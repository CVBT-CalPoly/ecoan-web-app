<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_Cost_Breakdown = array();
	$tdataProduct_Cost_Breakdown[".NumberOfChars"] = 80; 
	$tdataProduct_Cost_Breakdown[".ShortName"] = "Product_Cost_Breakdown";
	$tdataProduct_Cost_Breakdown[".OwnerID"] = "";
	$tdataProduct_Cost_Breakdown[".OriginalTable"] = "prodcosts";

//	field labels
$fieldLabelsProduct_Cost_Breakdown = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_Cost_Breakdown["English"] = array();
	$fieldToolTipsProduct_Cost_Breakdown["English"] = array();
	$fieldLabelsProduct_Cost_Breakdown["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ProdNo"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["PercentCost"] = "Percent Cost";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["PercentCost"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["CostType"] = "Cost Type";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["CostType"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["UnitEngRpt"] = "Unit Eng Rpt";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["UnitEngRpt"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["SortOrder"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Qty_Mo"] = "Qty/Mo";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Qty/Mo"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Qty_Day"] = "Qty/Day";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Qty/Day"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ProdGrpCode"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Qty_Year"] = "Qty/Year";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Qty/Year"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Baht_Yr"] = "Baht/Yr";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Baht/Yr"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Baht_Mo"] = "Baht/Mo";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Baht/Mo"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["Baht_pc"] = "Baht/pc";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["Baht/pc"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["EngName"] = "Eng Name";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["EngName"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ThaiName"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ThaiModel"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["EngModel"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ProdThaiName"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ProdEngName"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ProdGrpCode1"] = "Prod Grp Code1";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ProdGrpCode1"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ThaiProductGroup"] = "Thai Product Group";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ThaiProductGroup"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["EngProductGroup"] = "Eng Product Group";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["EngProductGroup"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["MixNo"] = "Mix No";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["MixNo"] = "";
	$fieldLabelsProduct_Cost_Breakdown["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsProduct_Cost_Breakdown["English"]["ColorMixNo"] = "";
	if (count($fieldToolTipsProduct_Cost_Breakdown["English"]))
		$tdataProduct_Cost_Breakdown[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_Cost_Breakdown[".NCSearch"] = true;



$tdataProduct_Cost_Breakdown[".shortTableName"] = "Product_Cost_Breakdown";
$tdataProduct_Cost_Breakdown[".nSecOptions"] = 0;
$tdataProduct_Cost_Breakdown[".recsPerRowList"] = 1;
$tdataProduct_Cost_Breakdown[".mainTableOwnerID"] = "";
$tdataProduct_Cost_Breakdown[".moveNext"] = 1;
$tdataProduct_Cost_Breakdown[".nType"] = 2;

$tdataProduct_Cost_Breakdown[".strOriginalTableName"] = "prodcosts";




$tdataProduct_Cost_Breakdown[".showAddInPopup"] = false;

$tdataProduct_Cost_Breakdown[".showEditInPopup"] = false;

$tdataProduct_Cost_Breakdown[".showViewInPopup"] = false;

$tdataProduct_Cost_Breakdown[".fieldsForRegister"] = array();

$tdataProduct_Cost_Breakdown[".listAjax"] = false;

	$tdataProduct_Cost_Breakdown[".audit"] = false;

	$tdataProduct_Cost_Breakdown[".locking"] = false;

$tdataProduct_Cost_Breakdown[".listIcons"] = true;

$tdataProduct_Cost_Breakdown[".exportTo"] = true;

$tdataProduct_Cost_Breakdown[".printFriendly"] = true;


$tdataProduct_Cost_Breakdown[".showSimpleSearchOptions"] = false;

$tdataProduct_Cost_Breakdown[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_Cost_Breakdown[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_Cost_Breakdown[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataProduct_Cost_Breakdown[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_Cost_Breakdown[".isUseTimeForSearch"] = false;




$tdataProduct_Cost_Breakdown[".allSearchFields"] = array();

$tdataProduct_Cost_Breakdown[".allSearchFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".allSearchFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".allSearchFields"][] = "EngModel";

$tdataProduct_Cost_Breakdown[".googleLikeFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".googleLikeFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".googleLikeFields"][] = "EngModel";

$tdataProduct_Cost_Breakdown[".panelSearchFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".panelSearchFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".panelSearchFields"][] = "EngModel";

$tdataProduct_Cost_Breakdown[".advSearchFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".advSearchFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".advSearchFields"][] = "EngModel";

$tdataProduct_Cost_Breakdown[".isTableType"] = "report";

$tdataProduct_Cost_Breakdown[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "ORDER BY prodcosts.ProdNo, prodcosts.CostType, prodcosts.SortOrder";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_Cost_Breakdown[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_Cost_Breakdown[".orderindexes"] = array();
$tdataProduct_Cost_Breakdown[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "prodcosts.ProdNo");
$tdataProduct_Cost_Breakdown[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "prodcosts.CostType");
$tdataProduct_Cost_Breakdown[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "prodcosts.SortOrder");

$tdataProduct_Cost_Breakdown[".sqlHead"] = "SELECT prodcosts.ProdNo,  products.ProdGrpCode,  prodcosts.Qtty AS `Qty/Year`,  Qtty/12 AS `Qty/Mo`,  prodcosts.Qtty AS `Qty/Day`,  prodcosts.UnitEngRpt,  PieceCost*Qtty AS `Baht/Yr`,  PieceCost*Qtty/12 AS `Baht/Mo`,  prodcosts.PieceCost AS `Baht/pc`,  prodcosts.PercentCost,  prodcosts.SortOrder,  prodcosts.CostType,  prodcosts.EngName,  prodcosts.ThaiName,  products.ProdThaiName,  products.ProdEngName,  products.EngModel,  products.ThaiModel,  prodgrp.ProdGrpCode AS ProdGrpCode1,  prodgrp.ThaiProductGroup,  prodgrp.EngProductGroup,  products.MixNo,  products.ColorMixNo";
$tdataProduct_Cost_Breakdown[".sqlFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo  INNER JOIN prodgrp ON products.ProdGrpCode = prodgrp.ProdGrpCode";
$tdataProduct_Cost_Breakdown[".sqlWhereExpr"] = "(STRCMP(prodcosts.CostType, \"Capital Costs\") != 0)";
$tdataProduct_Cost_Breakdown[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_Cost_Breakdown[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$tdataProduct_Cost_Breakdown[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_Cost_Breakdown = array();
$tdataProduct_Cost_Breakdown[".Keys"] = $tableKeysProduct_Cost_Breakdown;

$tdataProduct_Cost_Breakdown[".listFields"] = array();
$tdataProduct_Cost_Breakdown[".listFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".listFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".listFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".listFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".listFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".listFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".listFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".listFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".listFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".listFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".listFields"][] = "ColorMixNo";

$tdataProduct_Cost_Breakdown[".viewFields"] = array();
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".viewFields"][] = "ColorMixNo";

$tdataProduct_Cost_Breakdown[".addFields"] = array();
$tdataProduct_Cost_Breakdown[".addFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".addFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".addFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".addFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".addFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".addFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".addFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".addFields"][] = "ThaiName";

$tdataProduct_Cost_Breakdown[".inlineAddFields"] = array();
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".inlineAddFields"][] = "ColorMixNo";

$tdataProduct_Cost_Breakdown[".editFields"] = array();
$tdataProduct_Cost_Breakdown[".editFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".editFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".editFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".editFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".editFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".editFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".editFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".editFields"][] = "ThaiName";

$tdataProduct_Cost_Breakdown[".inlineEditFields"] = array();
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".inlineEditFields"][] = "ColorMixNo";

$tdataProduct_Cost_Breakdown[".exportFields"] = array();
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".exportFields"][] = "ColorMixNo";

$tdataProduct_Cost_Breakdown[".printFields"] = array();
$tdataProduct_Cost_Breakdown[".printFields"][] = "ProdNo";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ProdGrpCode";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Qty/Year";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Qty/Mo";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Qty/Day";
$tdataProduct_Cost_Breakdown[".printFields"][] = "UnitEngRpt";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Baht/Yr";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Baht/Mo";
$tdataProduct_Cost_Breakdown[".printFields"][] = "Baht/pc";
$tdataProduct_Cost_Breakdown[".printFields"][] = "PercentCost";
$tdataProduct_Cost_Breakdown[".printFields"][] = "SortOrder";
$tdataProduct_Cost_Breakdown[".printFields"][] = "CostType";
$tdataProduct_Cost_Breakdown[".printFields"][] = "EngName";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ThaiName";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ProdThaiName";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ProdEngName";
$tdataProduct_Cost_Breakdown[".printFields"][] = "EngModel";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ThaiModel";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ProdGrpCode1";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ThaiProductGroup";
$tdataProduct_Cost_Breakdown[".printFields"][] = "EngProductGroup";
$tdataProduct_Cost_Breakdown[".printFields"][] = "MixNo";
$tdataProduct_Cost_Breakdown[".printFields"][] = "ColorMixNo";

//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Prod No"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdNo"; 
		$fdata["FullName"] = "prodcosts.ProdNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ProdNo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ProdNo";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ProdNo"] = $fdata;
//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Grp Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdGrpCode"; 
		$fdata["FullName"] = "products.ProdGrpCode";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ProdGrpCode";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "concat(EngProductGroup,' / ',ThaiProductGroup)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "prodgrp";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ProdThaiName";
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ProdEngName";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ProdGrpCode"] = $fdata;
//	Qty/Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Qty/Year";
	$fdata["GoodName"] = "Qty_Year";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Qty/Year"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Qtty"; 
		$fdata["FullName"] = "prodcosts.Qtty";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Qty/Year"] = $fdata;
//	Qty/Mo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Qty/Mo";
	$fdata["GoodName"] = "Qty_Mo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Qty/Mo"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Qty/Mo"; 
		$fdata["FullName"] = "Qtty/12";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Qty/Mo"] = $fdata;
//	Qty/Day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Qty/Day";
	$fdata["GoodName"] = "Qty_Day";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Qty/Day"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Qtty"; 
		$fdata["FullName"] = "prodcosts.Qtty";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Qty/Day"] = $fdata;
//	UnitEngRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitEngRpt";
	$fdata["GoodName"] = "UnitEngRpt";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Unit Eng Rpt"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UnitEngRpt"; 
		$fdata["FullName"] = "prodcosts.UnitEngRpt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["UnitEngRpt"] = $fdata;
//	Baht/Yr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Baht/Yr";
	$fdata["GoodName"] = "Baht_Yr";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Baht/Yr"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Baht/Yr"; 
		$fdata["FullName"] = "PieceCost*Qtty";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Baht/Yr"] = $fdata;
//	Baht/Mo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Baht/Mo";
	$fdata["GoodName"] = "Baht_Mo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Baht/Mo"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Baht/Mo"; 
		$fdata["FullName"] = "PieceCost*Qtty/12";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Baht/Mo"] = $fdata;
//	Baht/pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Baht/pc";
	$fdata["GoodName"] = "Baht_pc";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Baht/pc"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PieceCost"; 
		$fdata["FullName"] = "prodcosts.PieceCost";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["Baht/pc"] = $fdata;
//	PercentCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PercentCost";
	$fdata["GoodName"] = "PercentCost";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Percent Cost"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PercentCost"; 
		$fdata["FullName"] = "prodcosts.PercentCost";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["PercentCost"] = $fdata;
//	SortOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SortOrder";
	$fdata["GoodName"] = "SortOrder";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Sort Order"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SortOrder"; 
		$fdata["FullName"] = "prodcosts.SortOrder";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["SortOrder"] = $fdata;
//	CostType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CostType";
	$fdata["GoodName"] = "CostType";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost Type"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CostType"; 
		$fdata["FullName"] = "prodcosts.CostType";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["CostType"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Eng Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngName"; 
		$fdata["FullName"] = "prodcosts.EngName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Thai Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiName"; 
		$fdata["FullName"] = "prodcosts.ThaiName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ThaiName"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Thai Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdThaiName"; 
		$fdata["FullName"] = "products.ProdThaiName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ProdThaiName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ProdThaiName";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "ProdGrpCode"; 
	$edata["CategoryFilter"] = "ProdGrpCode"; 
	
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ThaiModel";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ProdThaiName"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ProdEngName";
	$fdata["GoodName"] = "ProdEngName";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Eng Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdEngName"; 
		$fdata["FullName"] = "products.ProdEngName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ProdEngName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "concat(
    IFNULL(ProdEngName, ' '),
    ' / ',
    IFNULL(ProdThaiName, ' ')
)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "ProdGrpCode"; 
	$edata["CategoryFilter"] = "ProdGrpCode"; 
	
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "EngModel";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ProdEngName"] = $fdata;
//	EngModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EngModel";
	$fdata["GoodName"] = "EngModel";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Eng Model"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngModel"; 
		$fdata["FullName"] = "products.EngModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "EngModel";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "concat(
    IFNULL(EngModel, ' '),
    ' / ',
    IFNULL(ThaiModel, ' '))";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "ProdEngName"; 
	$edata["CategoryFilter"] = "ProdEngName"; 
	
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["EngModel"] = $fdata;
//	ThaiModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ThaiModel";
	$fdata["GoodName"] = "ThaiModel";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Thai Model"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiModel"; 
		$fdata["FullName"] = "products.ThaiModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ThaiModel";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ThaiModel";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "ProdThaiName"; 
	$edata["CategoryFilter"] = "ProdThaiName"; 
	
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ThaiModel"] = $fdata;
//	ProdGrpCode1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ProdGrpCode1";
	$fdata["GoodName"] = "ProdGrpCode1";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Prod Grp Code1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdGrpCode"; 
		$fdata["FullName"] = "prodgrp.ProdGrpCode";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ProdGrpCode1"] = $fdata;
//	ThaiProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ThaiProductGroup";
	$fdata["GoodName"] = "ThaiProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Thai Product Group"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiProductGroup"; 
		$fdata["FullName"] = "prodgrp.ThaiProductGroup";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ThaiProductGroup"] = $fdata;
//	EngProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EngProductGroup";
	$fdata["GoodName"] = "EngProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Eng Product Group"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngProductGroup"; 
		$fdata["FullName"] = "prodgrp.EngProductGroup";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["EngProductGroup"] = $fdata;
//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "products.MixNo";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["MixNo"] = $fdata;
//	ColorMixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ColorMixNo";
	$fdata["GoodName"] = "ColorMixNo";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Color Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ColorMixNo"; 
		$fdata["FullName"] = "products.ColorMixNo";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Cost_Breakdown["ColorMixNo"] = $fdata;

	
$tables_data["Product Cost Breakdown"]=&$tdataProduct_Cost_Breakdown;
$field_labels["Product_Cost_Breakdown"] = &$fieldLabelsProduct_Cost_Breakdown;
$fieldToolTips["Product Cost Breakdown"] = &$fieldToolTipsProduct_Cost_Breakdown;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product Cost Breakdown"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product Cost Breakdown"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_Cost_Breakdown()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "prodcosts.ProdNo,  products.ProdGrpCode,  prodcosts.Qtty AS `Qty/Year`,  Qtty/12 AS `Qty/Mo`,  prodcosts.Qtty AS `Qty/Day`,  prodcosts.UnitEngRpt,  PieceCost*Qtty AS `Baht/Yr`,  PieceCost*Qtty/12 AS `Baht/Mo`,  prodcosts.PieceCost AS `Baht/pc`,  prodcosts.PercentCost,  prodcosts.SortOrder,  prodcosts.CostType,  prodcosts.EngName,  prodcosts.ThaiName,  products.ProdThaiName,  products.ProdEngName,  products.EngModel,  products.ThaiModel,  prodgrp.ProdGrpCode AS ProdGrpCode1,  prodgrp.ThaiProductGroup,  prodgrp.EngProductGroup,  products.MixNo,  products.ColorMixNo";
$proto0["m_strFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo  INNER JOIN prodgrp ON products.ProdGrpCode = prodgrp.ProdGrpCode";
$proto0["m_strWhere"] = "(STRCMP(prodcosts.CostType, \"Capital Costs\") != 0)";
$proto0["m_strOrderBy"] = "ORDER BY prodcosts.ProdNo, prodcosts.CostType, prodcosts.SortOrder";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "STRCMP(prodcosts.CostType, \"Capital Costs\") != 0";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$proto2=array();
$proto2["m_functiontype"] = "SQLF_CUSTOM";
$proto2["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "prodcosts.CostType"
));

$proto2["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"Capital Costs\""
));

$proto2["m_arguments"][]=$obj;
$proto2["m_strFunctionName"] = "STRCMP";
$obj = new SQLFunctionCall($proto2);

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!= 0";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "0";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "products"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Qtty",
	"m_strTable" => "prodcosts"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Qty/Year";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Qtty/12"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Qty/Mo";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Qtty",
	"m_strTable" => "prodcosts"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Qty/Day";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEngRpt",
	"m_strTable" => "prodcosts"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "PieceCost*Qtty"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Baht/Yr";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "PieceCost*Qtty/12"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Baht/Mo";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PieceCost",
	"m_strTable" => "prodcosts"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Baht/pc";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "PercentCost",
	"m_strTable" => "prodcosts"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "prodcosts"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "prodcosts"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "products"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdEngName",
	"m_strTable" => "products"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EngModel",
	"m_strTable" => "products"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiModel",
	"m_strTable" => "products"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "prodgrp"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "ProdGrpCode1";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiProductGroup",
	"m_strTable" => "prodgrp"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "EngProductGroup",
	"m_strTable" => "prodgrp"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "MixNo",
	"m_strTable" => "products"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorMixNo",
	"m_strTable" => "products"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto53=array();
$proto53["m_link"] = "SQLL_MAIN";
			$proto54=array();
$proto54["m_strName"] = "prodcosts";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "ProdGrpCode";
$proto54["m_columns"][] = "Status";
$proto54["m_columns"][] = "ProdNo";
$proto54["m_columns"][] = "CostType";
$proto54["m_columns"][] = "EngName";
$proto54["m_columns"][] = "ThaiName";
$proto54["m_columns"][] = "Qtty";
$proto54["m_columns"][] = "PieceCost";
$proto54["m_columns"][] = "SortOrder";
$proto54["m_columns"][] = "Cost";
$proto54["m_columns"][] = "UnitEngRpt";
$proto54["m_columns"][] = "UnitThaiRpt";
$proto54["m_columns"][] = "CompPurchaseUnitEn";
$proto54["m_columns"][] = "CostYear";
$proto54["m_columns"][] = "CostMonth";
$proto54["m_columns"][] = "PercentCost";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_alias"] = "";
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = "0";
$proto55["m_inBrackets"] = "0";
$proto55["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_INNERJOIN";
			$proto58=array();
$proto58["m_strName"] = "products";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "ProdGrpCode";
$proto58["m_columns"][] = "ProdThaiName";
$proto58["m_columns"][] = "ProdEngName";
$proto58["m_columns"][] = "Picture";
$proto58["m_columns"][] = "ThaiModel";
$proto58["m_columns"][] = "EngModel";
$proto58["m_columns"][] = "MixNo";
$proto58["m_columns"][] = "ProdWt";
$proto58["m_columns"][] = "ColorMixNo";
$proto58["m_columns"][] = "FaceWt";
$proto58["m_columns"][] = "Mold";
$proto58["m_columns"][] = "PiecesPerMould";
$proto58["m_columns"][] = "ProductCost";
$proto58["m_columns"][] = "PriceRetail";
$proto58["m_columns"][] = "PriceWholeSale";
$proto58["m_columns"][] = "ProdStockGoal";
$proto58["m_columns"][] = "ThaiCom";
$proto58["m_columns"][] = "EngCom";
$proto58["m_columns"][] = "Status";
$proto58["m_columns"][] = "MoldWt";
$proto58["m_columns"][] = "GrayWtMold";
$proto58["m_columns"][] = "ColorWtMold";
$proto58["m_columns"][] = "Length";
$proto58["m_columns"][] = "Width1";
$proto58["m_columns"][] = "Thickness";
$proto58["m_columns"][] = "ProdNo";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_alias"] = "";
$proto59=array();
$proto59["m_sql"] = "prodcosts.ProdNo = products.ProdNo";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= products.ProdNo";
$proto59["m_havingmode"] = "0";
$proto59["m_inBrackets"] = "0";
$proto59["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_INNERJOIN";
			$proto62=array();
$proto62["m_strName"] = "prodgrp";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "ProdGrpCode";
$proto62["m_columns"][] = "ThaiProductGroup";
$proto62["m_columns"][] = "EngProductGroup";
$proto62["m_columns"][] = "MarkDownWholesale";
$proto62["m_columns"][] = "MarkDownRetail";
$proto62["m_columns"][] = "DaysWorked";
$proto62["m_columns"][] = "NumberWorkers";
$proto62["m_columns"][] = "QtyMolds";
$proto62["m_columns"][] = "MouldsPerDay";
$proto62["m_columns"][] = "Interest";
$proto62["m_columns"][] = "Period";
$proto62["m_columns"][] = "DownPay";
$proto62["m_columns"][] = "MonthsOfCap";
$proto62["m_columns"][] = "Waste";
$proto62["m_columns"][] = "Maint";
$proto62["m_columns"][] = "ItemNotes";
$proto62["m_columns"][] = "CuringTime";
$proto62["m_columns"][] = "GAP";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_alias"] = "";
$proto63=array();
$proto63["m_sql"] = "products.ProdGrpCode = prodgrp.ProdGrpCode";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "products"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= prodgrp.ProdGrpCode";
$proto63["m_havingmode"] = "0";
$proto63["m_inBrackets"] = "0";
$proto63["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto65["m_column"]=$obj;
$proto65["m_bAsc"] = 1;
$proto65["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto65);

$proto0["m_orderby"][]=$obj;					
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto67["m_column"]=$obj;
$proto67["m_bAsc"] = 1;
$proto67["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto67);

$proto0["m_orderby"][]=$obj;					
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto69["m_column"]=$obj;
$proto69["m_bAsc"] = 1;
$proto69["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto69);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Product_Cost_Breakdown = createSqlQuery_Product_Cost_Breakdown();
																							$tdataProduct_Cost_Breakdown[".sqlquery"] = $queryData_Product_Cost_Breakdown;

include_once(getabspath("include/Product_Cost_Breakdown_events.php"));
$tableEvents["Product Cost Breakdown"] = new eventclass_Product_Cost_Breakdown;
$tdataProduct_Cost_Breakdown[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Product Cost Breakdown");

?>