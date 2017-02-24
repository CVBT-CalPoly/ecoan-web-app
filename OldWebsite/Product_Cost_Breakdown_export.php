<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/Product_Cost_Breakdown_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("export","FancyOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["Product_Cost_Breakdown_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys = array();
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("Product_Cost_Breakdown_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Product_Cost_Breakdown.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Product_Cost_Breakdown.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=Product_Cost_Breakdown.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["ProdNo"] = $pageObject->showDBValue("ProdNo", $row);
			$values["ProdGrpCode"] = $pageObject->showDBValue("ProdGrpCode", $row);
			$values["Qty/Year"] = $pageObject->showDBValue("Qty/Year", $row);
			$values["Qty/Mo"] = $pageObject->showDBValue("Qty/Mo", $row);
			$values["Qty/Day"] = $pageObject->showDBValue("Qty/Day", $row);
			$values["UnitEngRpt"] = $pageObject->showDBValue("UnitEngRpt", $row);
			$values["Baht/Yr"] = $pageObject->showDBValue("Baht/Yr", $row);
			$values["Baht/Mo"] = $pageObject->showDBValue("Baht/Mo", $row);
			$values["Baht/pc"] = $pageObject->showDBValue("Baht/pc", $row);
			$values["PercentCost"] = $pageObject->showDBValue("PercentCost", $row);
			$values["SortOrder"] = $pageObject->showDBValue("SortOrder", $row);
			$values["CostType"] = $pageObject->showDBValue("CostType", $row);
			$values["EngName"] = $pageObject->showDBValue("EngName", $row);
			$values["ThaiName"] = $pageObject->showDBValue("ThaiName", $row);
			$values["ProdThaiName"] = $pageObject->showDBValue("ProdThaiName", $row);
			$values["ProdEngName"] = $pageObject->showDBValue("ProdEngName", $row);
			$values["EngModel"] = $pageObject->showDBValue("EngModel", $row);
			$values["ThaiModel"] = $pageObject->showDBValue("ThaiModel", $row);
			$values["ProdGrpCode1"] = $pageObject->showDBValue("ProdGrpCode1", $row);
			$values["ThaiProductGroup"] = $pageObject->showDBValue("ThaiProductGroup", $row);
			$values["EngProductGroup"] = $pageObject->showDBValue("EngProductGroup", $row);
			$values["MixNo"] = $pageObject->showDBValue("MixNo", $row);
			$values["ColorMixNo"] = $pageObject->showDBValue("ColorMixNo", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=Product_Cost_Breakdown.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdNo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdGrpCode\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Qty/Year\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Qty/Mo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Qty/Day\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"UnitEngRpt\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Baht/Yr\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Baht/Mo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Baht/pc\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"PercentCost\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"SortOrder\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"CostType\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"EngName\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ThaiName\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdThaiName\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdEngName\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"EngModel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ThaiModel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdGrpCode1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ThaiProductGroup\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"EngProductGroup\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MixNo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ColorMixNo\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["ProdNo"] = $pageObject->getViewControl("ProdNo")->showDBValue($row, "");
			$values["ProdGrpCode"] = $pageObject->getViewControl("ProdGrpCode")->showDBValue($row, "");
			$values["Qty/Year"] = $row["Qty/Year"];
			$values["Qty/Mo"] = $row["Qty/Mo"];
			$values["Qty/Day"] = $row["Qty/Day"];
			$values["UnitEngRpt"] = $pageObject->getViewControl("UnitEngRpt")->showDBValue($row, "");
			$values["Baht/Yr"] = $row["Baht/Yr"];
			$values["Baht/Mo"] = $row["Baht/Mo"];
			$values["Baht/pc"] = $row["Baht/pc"];
			$values["PercentCost"] = $row["PercentCost"];
			$values["SortOrder"] = $pageObject->getViewControl("SortOrder")->showDBValue($row, "");
			$values["CostType"] = $pageObject->getViewControl("CostType")->showDBValue($row, "");
			$values["EngName"] = $pageObject->getViewControl("EngName")->showDBValue($row, "");
			$values["ThaiName"] = $pageObject->getViewControl("ThaiName")->showDBValue($row, "");
			$values["ProdThaiName"] = $pageObject->getViewControl("ProdThaiName")->showDBValue($row, "");
			$values["ProdEngName"] = $pageObject->getViewControl("ProdEngName")->showDBValue($row, "");
			$values["EngModel"] = $pageObject->getViewControl("EngModel")->showDBValue($row, "");
			$values["ThaiModel"] = $pageObject->getViewControl("ThaiModel")->showDBValue($row, "");
			$values["ProdGrpCode1"] = $pageObject->getViewControl("ProdGrpCode1")->showDBValue($row, "");
			$values["ThaiProductGroup"] = $pageObject->getViewControl("ThaiProductGroup")->showDBValue($row, "");
			$values["EngProductGroup"] = $pageObject->getViewControl("EngProductGroup")->showDBValue($row, "");
			$values["MixNo"] = $pageObject->getViewControl("MixNo")->showDBValue($row, "");
			$values["ColorMixNo"] = $pageObject->getViewControl("ColorMixNo")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdNo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdGrpCode"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Qty/Year"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Qty/Mo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Qty/Day"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["UnitEngRpt"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Baht/Yr"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Baht/Mo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Baht/pc"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["PercentCost"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["SortOrder"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["CostType"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["EngName"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ThaiName"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdThaiName"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdEngName"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["EngModel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ThaiModel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdGrpCode1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ThaiProductGroup"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["EngProductGroup"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MixNo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ColorMixNo"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod No").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod Grp Code").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qty/Year").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qty/Mo").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qty/Day").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Unit Eng Rpt").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Baht/Yr").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Baht/Mo").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Baht/pc").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Percent Cost").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sort Order").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Cost Type").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Eng Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Thai Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod Thai Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod Eng Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Eng Model").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Thai Model").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod Grp Code1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Thai Product Group").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Eng Product Group").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mix No").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Color Mix No").'</td>';	
	}
	else
	{
		echo "<td>"."Prod No"."</td>";
		echo "<td>"."Prod Grp Code"."</td>";
		echo "<td>"."Qty/Year"."</td>";
		echo "<td>"."Qty/Mo"."</td>";
		echo "<td>"."Qty/Day"."</td>";
		echo "<td>"."Unit Eng Rpt"."</td>";
		echo "<td>"."Baht/Yr"."</td>";
		echo "<td>"."Baht/Mo"."</td>";
		echo "<td>"."Baht/pc"."</td>";
		echo "<td>"."Percent Cost"."</td>";
		echo "<td>"."Sort Order"."</td>";
		echo "<td>"."Cost Type"."</td>";
		echo "<td>"."Eng Name"."</td>";
		echo "<td>"."Thai Name"."</td>";
		echo "<td>"."Prod Thai Name"."</td>";
		echo "<td>"."Prod Eng Name"."</td>";
		echo "<td>"."Eng Model"."</td>";
		echo "<td>"."Thai Model"."</td>";
		echo "<td>"."Prod Grp Code1"."</td>";
		echo "<td>"."Thai Product Group"."</td>";
		echo "<td>"."Eng Product Group"."</td>";
		echo "<td>"."Mix No"."</td>";
		echo "<td>"."Color Mix No"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["ProdNo"] = $pageObject->getViewControl("ProdNo")->showDBValue($row, "");
					$values["ProdGrpCode"] = $pageObject->getViewControl("ProdGrpCode")->showDBValue($row, "");
					$values["Qty/Year"] = $pageObject->getViewControl("Qty/Year")->showDBValue($row, "");
					$values["Qty/Mo"] = $pageObject->getViewControl("Qty/Mo")->showDBValue($row, "");
					$values["Qty/Day"] = $pageObject->getViewControl("Qty/Day")->showDBValue($row, "");
					$values["UnitEngRpt"] = $pageObject->getViewControl("UnitEngRpt")->showDBValue($row, "");
					$values["Baht/Yr"] = $pageObject->getViewControl("Baht/Yr")->showDBValue($row, "");
					$values["Baht/Mo"] = $pageObject->getViewControl("Baht/Mo")->showDBValue($row, "");
					$values["Baht/pc"] = $pageObject->getViewControl("Baht/pc")->showDBValue($row, "");
					$values["PercentCost"] = $pageObject->getViewControl("PercentCost")->showDBValue($row, "");
					$values["SortOrder"] = $pageObject->getViewControl("SortOrder")->showDBValue($row, "");
					$values["CostType"] = $pageObject->getViewControl("CostType")->showDBValue($row, "");
					$values["EngName"] = $pageObject->getViewControl("EngName")->showDBValue($row, "");
					$values["ThaiName"] = $pageObject->getViewControl("ThaiName")->showDBValue($row, "");
					$values["ProdThaiName"] = $pageObject->getViewControl("ProdThaiName")->showDBValue($row, "");
					$values["ProdEngName"] = $pageObject->getViewControl("ProdEngName")->showDBValue($row, "");
					$values["EngModel"] = $pageObject->getViewControl("EngModel")->showDBValue($row, "");
					$values["ThaiModel"] = $pageObject->getViewControl("ThaiModel")->showDBValue($row, "");
					$values["ProdGrpCode1"] = $pageObject->getViewControl("ProdGrpCode1")->showDBValue($row, "");
					$values["ThaiProductGroup"] = $pageObject->getViewControl("ThaiProductGroup")->showDBValue($row, "");
					$values["EngProductGroup"] = $pageObject->getViewControl("EngProductGroup")->showDBValue($row, "");
					$values["MixNo"] = $pageObject->getViewControl("MixNo")->showDBValue($row, "");
					$values["ColorMixNo"] = $pageObject->getViewControl("ColorMixNo")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["ProdNo"]);
				else
					echo $values["ProdNo"];//echo htmlspecialchars($values["ProdNo"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["ProdGrpCode"]);
				else
					echo $values["ProdGrpCode"];//echo htmlspecialchars($values["ProdGrpCode"]); commented for bug #6823
					
			echo '</td>';
							echo '<td>';
			
									echo $values["Qty/Year"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Qty/Mo"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Qty/Day"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["UnitEngRpt"]);
					else
						echo $values["UnitEngRpt"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Baht/Yr"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Baht/Mo"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Baht/pc"];
			echo '</td>';
							echo '<td>';
			
									echo $values["PercentCost"];
			echo '</td>';
							echo '<td>';
			
									echo $values["SortOrder"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									echo $values["CostType"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["EngName"]);
					else
						echo $values["EngName"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ThaiName"]);
					else
						echo $values["ThaiName"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
									echo $values["ProdThaiName"];
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
									echo $values["ProdEngName"];
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["EngModel"]);
				else
					echo $values["EngModel"];//echo htmlspecialchars($values["EngModel"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["ThaiModel"]);
				else
					echo $values["ThaiModel"];//echo htmlspecialchars($values["ThaiModel"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ProdGrpCode1"]);
					else
						echo $values["ProdGrpCode1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ThaiProductGroup"]);
					else
						echo $values["ThaiProductGroup"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["EngProductGroup"]);
					else
						echo $values["EngProductGroup"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["MixNo"]);
					else
						echo $values["MixNo"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ColorMixNo"]);
					else
						echo $values["ColorMixNo"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
