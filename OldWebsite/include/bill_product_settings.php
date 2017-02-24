<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabill_product = array();
	$tdatabill_product[".NumberOfChars"] = 80; 
	$tdatabill_product[".ShortName"] = "bill_product";
	$tdatabill_product[".OwnerID"] = "";
	$tdatabill_product[".OriginalTable"] = "bill_product";

//	field labels
$fieldLabelsbill_product = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbill_product["English"] = array();
	$fieldToolTipsbill_product["English"] = array();
	$fieldLabelsbill_product["English"]["BillNo"] = "Bill No";
	$fieldToolTipsbill_product["English"]["BillNo"] = "";
	$fieldLabelsbill_product["English"]["ProductNo"] = "Product No";
	$fieldToolTipsbill_product["English"]["ProductNo"] = "";
	$fieldLabelsbill_product["English"]["ProdAmont"] = "Prod Amont";
	$fieldToolTipsbill_product["English"]["ProdAmont"] = "";
	$fieldLabelsbill_product["English"]["Price"] = "Price";
	$fieldToolTipsbill_product["English"]["Price"] = "";
	$fieldLabelsbill_product["English"]["Amont"] = "Amont";
	$fieldToolTipsbill_product["English"]["Amont"] = "";
	if (count($fieldToolTipsbill_product["English"]))
		$tdatabill_product[".isUseToolTips"] = true;
}
	
	
	$tdatabill_product[".NCSearch"] = true;



$tdatabill_product[".shortTableName"] = "bill_product";
$tdatabill_product[".nSecOptions"] = 0;
$tdatabill_product[".recsPerRowList"] = 1;
$tdatabill_product[".mainTableOwnerID"] = "";
$tdatabill_product[".moveNext"] = 1;
$tdatabill_product[".nType"] = 0;

$tdatabill_product[".strOriginalTableName"] = "bill_product";




$tdatabill_product[".showAddInPopup"] = false;

$tdatabill_product[".showEditInPopup"] = false;

$tdatabill_product[".showViewInPopup"] = false;

$tdatabill_product[".fieldsForRegister"] = array();

$tdatabill_product[".listAjax"] = false;

	$tdatabill_product[".audit"] = false;

	$tdatabill_product[".locking"] = false;

$tdatabill_product[".listIcons"] = true;

$tdatabill_product[".exportTo"] = true;

$tdatabill_product[".printFriendly"] = true;


$tdatabill_product[".showSimpleSearchOptions"] = false;

$tdatabill_product[".showSearchPanel"] = true;

if (isMobile())
	$tdatabill_product[".isUseAjaxSuggest"] = false;
else 
	$tdatabill_product[".isUseAjaxSuggest"] = true;

$tdatabill_product[".rowHighlite"] = true;

// button handlers file names

$tdatabill_product[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabill_product[".isUseTimeForSearch"] = false;




$tdatabill_product[".allSearchFields"] = array();

$tdatabill_product[".allSearchFields"][] = "BillNo";
$tdatabill_product[".allSearchFields"][] = "ProductNo";
$tdatabill_product[".allSearchFields"][] = "ProdAmont";
$tdatabill_product[".allSearchFields"][] = "Price";
$tdatabill_product[".allSearchFields"][] = "Amont";

$tdatabill_product[".googleLikeFields"][] = "BillNo";
$tdatabill_product[".googleLikeFields"][] = "ProductNo";
$tdatabill_product[".googleLikeFields"][] = "ProdAmont";
$tdatabill_product[".googleLikeFields"][] = "Price";
$tdatabill_product[".googleLikeFields"][] = "Amont";


$tdatabill_product[".advSearchFields"][] = "BillNo";
$tdatabill_product[".advSearchFields"][] = "ProductNo";
$tdatabill_product[".advSearchFields"][] = "ProdAmont";
$tdatabill_product[".advSearchFields"][] = "Price";
$tdatabill_product[".advSearchFields"][] = "Amont";

$tdatabill_product[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabill_product[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabill_product[".strOrderBy"] = $tstrOrderBy;

$tdatabill_product[".orderindexes"] = array();

$tdatabill_product[".sqlHead"] = "SELECT BillNo,  ProductNo,  ProdAmont,  Price,  Amont";
$tdatabill_product[".sqlFrom"] = "FROM bill_product";
$tdatabill_product[".sqlWhereExpr"] = "";
$tdatabill_product[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabill_product[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabill_product[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbill_product = array();
$tdatabill_product[".Keys"] = $tableKeysbill_product;

$tdatabill_product[".listFields"] = array();
$tdatabill_product[".listFields"][] = "BillNo";
$tdatabill_product[".listFields"][] = "ProductNo";
$tdatabill_product[".listFields"][] = "ProdAmont";
$tdatabill_product[".listFields"][] = "Price";
$tdatabill_product[".listFields"][] = "Amont";

$tdatabill_product[".viewFields"] = array();

$tdatabill_product[".addFields"] = array();

$tdatabill_product[".inlineAddFields"] = array();

$tdatabill_product[".editFields"] = array();

$tdatabill_product[".inlineEditFields"] = array();

$tdatabill_product[".exportFields"] = array();
$tdatabill_product[".exportFields"][] = "BillNo";
$tdatabill_product[".exportFields"][] = "ProductNo";
$tdatabill_product[".exportFields"][] = "ProdAmont";
$tdatabill_product[".exportFields"][] = "Price";
$tdatabill_product[".exportFields"][] = "Amont";

$tdatabill_product[".printFields"] = array();
$tdatabill_product[".printFields"][] = "BillNo";
$tdatabill_product[".printFields"][] = "ProductNo";
$tdatabill_product[".printFields"][] = "ProdAmont";
$tdatabill_product[".printFields"][] = "Price";
$tdatabill_product[".printFields"][] = "Amont";

//	BillNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BillNo";
	$fdata["GoodName"] = "BillNo";
	$fdata["ownerTable"] = "bill_product";
	$fdata["Label"] = "Bill No"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BillNo"; 
		$fdata["FullName"] = "BillNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_product["BillNo"] = $fdata;
//	ProductNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProductNo";
	$fdata["GoodName"] = "ProductNo";
	$fdata["ownerTable"] = "bill_product";
	$fdata["Label"] = "Product No"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProductNo"; 
		$fdata["FullName"] = "ProductNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_product["ProductNo"] = $fdata;
//	ProdAmont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdAmont";
	$fdata["GoodName"] = "ProdAmont";
	$fdata["ownerTable"] = "bill_product";
	$fdata["Label"] = "Prod Amont"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdAmont"; 
		$fdata["FullName"] = "ProdAmont";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_product["ProdAmont"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "bill_product";
	$fdata["Label"] = "Price"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Price"; 
		$fdata["FullName"] = "Price";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_product["Price"] = $fdata;
//	Amont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amont";
	$fdata["GoodName"] = "Amont";
	$fdata["ownerTable"] = "bill_product";
	$fdata["Label"] = "Amont"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Amont"; 
		$fdata["FullName"] = "Amont";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_product["Amont"] = $fdata;

	
$tables_data["bill_product"]=&$tdatabill_product;
$field_labels["bill_product"] = &$fieldLabelsbill_product;
$fieldToolTips["bill_product"] = &$fieldToolTipsbill_product;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bill_product"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["bill_product"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bill_product()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BillNo,  ProductNo,  ProdAmont,  Price,  Amont";
$proto0["m_strFrom"] = "FROM bill_product";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "BillNo",
	"m_strTable" => "bill_product"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductNo",
	"m_strTable" => "bill_product"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdAmont",
	"m_strTable" => "bill_product"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "bill_product"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Amont",
	"m_strTable" => "bill_product"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "bill_product";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "BillNo";
$proto16["m_columns"][] = "ProductNo";
$proto16["m_columns"][] = "ProdAmont";
$proto16["m_columns"][] = "Price";
$proto16["m_columns"][] = "Amont";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bill_product = createSqlQuery_bill_product();
					$tdatabill_product[".sqlquery"] = $queryData_bill_product;

$tableEvents["bill_product"] = new eventsBase;
$tdatabill_product[".hasEvents"] = false;

$cipherer = new RunnerCipherer("bill_product");

?>