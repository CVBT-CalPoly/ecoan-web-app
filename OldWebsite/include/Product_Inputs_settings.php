<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_Inputs = array();
	$tdataProduct_Inputs[".NumberOfChars"] = 80; 
	$tdataProduct_Inputs[".ShortName"] = "Product_Inputs";
	$tdataProduct_Inputs[".OwnerID"] = "";
	$tdataProduct_Inputs[".OriginalTable"] = "prodcosts";

//	field labels
$fieldLabelsProduct_Inputs = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_Inputs["English"] = array();
	$fieldToolTipsProduct_Inputs["English"] = array();
	$fieldLabelsProduct_Inputs["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsProduct_Inputs["English"]["ProdGrpCode"] = "";
	$fieldLabelsProduct_Inputs["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsProduct_Inputs["English"]["ProdNo"] = "";
	$fieldLabelsProduct_Inputs["English"]["CostType"] = "Cost Type";
	$fieldToolTipsProduct_Inputs["English"]["CostType"] = "";
	$fieldLabelsProduct_Inputs["English"]["EngName"] = "Eng Name";
	$fieldToolTipsProduct_Inputs["English"]["EngName"] = "";
	$fieldLabelsProduct_Inputs["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsProduct_Inputs["English"]["ThaiName"] = "";
	$fieldLabelsProduct_Inputs["English"]["Cost"] = "Cost";
	$fieldToolTipsProduct_Inputs["English"]["Cost"] = "";
	$fieldLabelsProduct_Inputs["English"]["UnitEngRpt"] = "Unit Eng Rpt";
	$fieldToolTipsProduct_Inputs["English"]["UnitEngRpt"] = "";
	$fieldLabelsProduct_Inputs["English"]["UnitThaiRpt"] = "Unit Thai Rpt";
	$fieldToolTipsProduct_Inputs["English"]["UnitThaiRpt"] = "";
	$fieldLabelsProduct_Inputs["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipsProduct_Inputs["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelsProduct_Inputs["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsProduct_Inputs["English"]["ProdEngName"] = "";
	$fieldLabelsProduct_Inputs["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsProduct_Inputs["English"]["ProdThaiName"] = "";
	$fieldLabelsProduct_Inputs["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsProduct_Inputs["English"]["EngModel"] = "";
	$fieldLabelsProduct_Inputs["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsProduct_Inputs["English"]["ThaiModel"] = "";
	$fieldLabelsProduct_Inputs["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipsProduct_Inputs["English"]["SortOrder"] = "";
	$fieldLabelsProduct_Inputs["English"]["MixNo"] = "Mix No";
	$fieldToolTipsProduct_Inputs["English"]["MixNo"] = "";
	$fieldLabelsProduct_Inputs["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsProduct_Inputs["English"]["ColorMixNo"] = "";
	$fieldLabelsProduct_Inputs["English"]["EngProductGroup"] = "Eng Product Group";
	$fieldToolTipsProduct_Inputs["English"]["EngProductGroup"] = "";
	$fieldLabelsProduct_Inputs["English"]["ThaiProductGroup"] = "Thai Product Group";
	$fieldToolTipsProduct_Inputs["English"]["ThaiProductGroup"] = "";
	if (count($fieldToolTipsProduct_Inputs["English"]))
		$tdataProduct_Inputs[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_Inputs[".NCSearch"] = true;



$tdataProduct_Inputs[".shortTableName"] = "Product_Inputs";
$tdataProduct_Inputs[".nSecOptions"] = 0;
$tdataProduct_Inputs[".recsPerRowList"] = 1;
$tdataProduct_Inputs[".mainTableOwnerID"] = "";
$tdataProduct_Inputs[".moveNext"] = 1;
$tdataProduct_Inputs[".nType"] = 2;

$tdataProduct_Inputs[".strOriginalTableName"] = "prodcosts";




$tdataProduct_Inputs[".showAddInPopup"] = false;

$tdataProduct_Inputs[".showEditInPopup"] = false;

$tdataProduct_Inputs[".showViewInPopup"] = false;

$tdataProduct_Inputs[".fieldsForRegister"] = array();

$tdataProduct_Inputs[".listAjax"] = false;

	$tdataProduct_Inputs[".audit"] = false;

	$tdataProduct_Inputs[".locking"] = false;

$tdataProduct_Inputs[".listIcons"] = true;

$tdataProduct_Inputs[".exportTo"] = true;

$tdataProduct_Inputs[".printFriendly"] = true;


$tdataProduct_Inputs[".showSimpleSearchOptions"] = false;

$tdataProduct_Inputs[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_Inputs[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_Inputs[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataProduct_Inputs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_Inputs[".isUseTimeForSearch"] = false;




$tdataProduct_Inputs[".allSearchFields"] = array();

$tdataProduct_Inputs[".allSearchFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".allSearchFields"][] = "ProdNo";
$tdataProduct_Inputs[".allSearchFields"][] = "ProdEngName";
$tdataProduct_Inputs[".allSearchFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".allSearchFields"][] = "EngModel";
$tdataProduct_Inputs[".allSearchFields"][] = "ThaiModel";
$tdataProduct_Inputs[".allSearchFields"][] = "CostType";
$tdataProduct_Inputs[".allSearchFields"][] = "EngName";
$tdataProduct_Inputs[".allSearchFields"][] = "ThaiName";
$tdataProduct_Inputs[".allSearchFields"][] = "Cost";
$tdataProduct_Inputs[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".allSearchFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".allSearchFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".allSearchFields"][] = "SortOrder";
$tdataProduct_Inputs[".allSearchFields"][] = "MixNo";
$tdataProduct_Inputs[".allSearchFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".allSearchFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".allSearchFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".googleLikeFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".googleLikeFields"][] = "ProdNo";
$tdataProduct_Inputs[".googleLikeFields"][] = "ProdEngName";
$tdataProduct_Inputs[".googleLikeFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".googleLikeFields"][] = "EngModel";
$tdataProduct_Inputs[".googleLikeFields"][] = "ThaiModel";
$tdataProduct_Inputs[".googleLikeFields"][] = "CostType";
$tdataProduct_Inputs[".googleLikeFields"][] = "EngName";
$tdataProduct_Inputs[".googleLikeFields"][] = "ThaiName";
$tdataProduct_Inputs[".googleLikeFields"][] = "Cost";
$tdataProduct_Inputs[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".googleLikeFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".googleLikeFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".googleLikeFields"][] = "SortOrder";
$tdataProduct_Inputs[".googleLikeFields"][] = "MixNo";
$tdataProduct_Inputs[".googleLikeFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".googleLikeFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".googleLikeFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".panelSearchFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".panelSearchFields"][] = "ProdEngName";
$tdataProduct_Inputs[".panelSearchFields"][] = "EngModel";

$tdataProduct_Inputs[".advSearchFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".advSearchFields"][] = "ProdEngName";
$tdataProduct_Inputs[".advSearchFields"][] = "EngModel";

$tdataProduct_Inputs[".isTableType"] = "report";

$tdataProduct_Inputs[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "ORDER BY prodcosts.ProdNo, prodcosts.CostType, prodcosts.SortOrder";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_Inputs[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_Inputs[".orderindexes"] = array();
$tdataProduct_Inputs[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "prodcosts.ProdNo");
$tdataProduct_Inputs[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "prodcosts.CostType");
$tdataProduct_Inputs[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "prodcosts.SortOrder");

$tdataProduct_Inputs[".sqlHead"] = "SELECT prodcosts.ProdGrpCode,  prodcosts.ProdNo,  products.ProdEngName,  products.ProdThaiName,  products.EngModel,  products.ThaiModel,  prodcosts.CostType,  prodcosts.EngName,  prodcosts.ThaiName,  prodcosts.Cost,  prodcosts.CompPurchaseUnitEn,  prodcosts.UnitEngRpt,  prodcosts.UnitThaiRpt,  prodcosts.SortOrder,  products.MixNo,  products.ColorMixNo,  prodgrp.EngProductGroup,  prodgrp.ThaiProductGroup";
$tdataProduct_Inputs[".sqlFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo  INNER JOIN prodgrp ON products.ProdGrpCode = prodgrp.ProdGrpCode";
$tdataProduct_Inputs[".sqlWhereExpr"] = "";
$tdataProduct_Inputs[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_Inputs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduct_Inputs[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_Inputs = array();
$tdataProduct_Inputs[".Keys"] = $tableKeysProduct_Inputs;

$tdataProduct_Inputs[".listFields"] = array();
$tdataProduct_Inputs[".listFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".listFields"][] = "ProdNo";
$tdataProduct_Inputs[".listFields"][] = "ProdEngName";
$tdataProduct_Inputs[".listFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".listFields"][] = "EngModel";
$tdataProduct_Inputs[".listFields"][] = "ThaiModel";
$tdataProduct_Inputs[".listFields"][] = "CostType";
$tdataProduct_Inputs[".listFields"][] = "EngName";
$tdataProduct_Inputs[".listFields"][] = "ThaiName";
$tdataProduct_Inputs[".listFields"][] = "Cost";
$tdataProduct_Inputs[".listFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".listFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".listFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".listFields"][] = "SortOrder";
$tdataProduct_Inputs[".listFields"][] = "MixNo";
$tdataProduct_Inputs[".listFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".listFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".listFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".viewFields"] = array();
$tdataProduct_Inputs[".viewFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".viewFields"][] = "ProdNo";
$tdataProduct_Inputs[".viewFields"][] = "ProdEngName";
$tdataProduct_Inputs[".viewFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".viewFields"][] = "EngModel";
$tdataProduct_Inputs[".viewFields"][] = "ThaiModel";
$tdataProduct_Inputs[".viewFields"][] = "CostType";
$tdataProduct_Inputs[".viewFields"][] = "EngName";
$tdataProduct_Inputs[".viewFields"][] = "ThaiName";
$tdataProduct_Inputs[".viewFields"][] = "Cost";
$tdataProduct_Inputs[".viewFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".viewFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".viewFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".viewFields"][] = "SortOrder";
$tdataProduct_Inputs[".viewFields"][] = "MixNo";
$tdataProduct_Inputs[".viewFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".viewFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".viewFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".addFields"] = array();
$tdataProduct_Inputs[".addFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".addFields"][] = "ProdNo";
$tdataProduct_Inputs[".addFields"][] = "CostType";
$tdataProduct_Inputs[".addFields"][] = "EngName";
$tdataProduct_Inputs[".addFields"][] = "ThaiName";
$tdataProduct_Inputs[".addFields"][] = "Cost";
$tdataProduct_Inputs[".addFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".addFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".addFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".addFields"][] = "SortOrder";

$tdataProduct_Inputs[".inlineAddFields"] = array();
$tdataProduct_Inputs[".inlineAddFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".inlineAddFields"][] = "ProdNo";
$tdataProduct_Inputs[".inlineAddFields"][] = "ProdEngName";
$tdataProduct_Inputs[".inlineAddFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".inlineAddFields"][] = "EngModel";
$tdataProduct_Inputs[".inlineAddFields"][] = "ThaiModel";
$tdataProduct_Inputs[".inlineAddFields"][] = "CostType";
$tdataProduct_Inputs[".inlineAddFields"][] = "EngName";
$tdataProduct_Inputs[".inlineAddFields"][] = "ThaiName";
$tdataProduct_Inputs[".inlineAddFields"][] = "Cost";
$tdataProduct_Inputs[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".inlineAddFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".inlineAddFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".inlineAddFields"][] = "SortOrder";
$tdataProduct_Inputs[".inlineAddFields"][] = "MixNo";
$tdataProduct_Inputs[".inlineAddFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".inlineAddFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".inlineAddFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".editFields"] = array();
$tdataProduct_Inputs[".editFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".editFields"][] = "ProdNo";
$tdataProduct_Inputs[".editFields"][] = "CostType";
$tdataProduct_Inputs[".editFields"][] = "EngName";
$tdataProduct_Inputs[".editFields"][] = "ThaiName";
$tdataProduct_Inputs[".editFields"][] = "Cost";
$tdataProduct_Inputs[".editFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".editFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".editFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".editFields"][] = "SortOrder";

$tdataProduct_Inputs[".inlineEditFields"] = array();
$tdataProduct_Inputs[".inlineEditFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".inlineEditFields"][] = "ProdNo";
$tdataProduct_Inputs[".inlineEditFields"][] = "ProdEngName";
$tdataProduct_Inputs[".inlineEditFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".inlineEditFields"][] = "EngModel";
$tdataProduct_Inputs[".inlineEditFields"][] = "ThaiModel";
$tdataProduct_Inputs[".inlineEditFields"][] = "CostType";
$tdataProduct_Inputs[".inlineEditFields"][] = "EngName";
$tdataProduct_Inputs[".inlineEditFields"][] = "ThaiName";
$tdataProduct_Inputs[".inlineEditFields"][] = "Cost";
$tdataProduct_Inputs[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".inlineEditFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".inlineEditFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".inlineEditFields"][] = "SortOrder";
$tdataProduct_Inputs[".inlineEditFields"][] = "MixNo";
$tdataProduct_Inputs[".inlineEditFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".inlineEditFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".inlineEditFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".exportFields"] = array();
$tdataProduct_Inputs[".exportFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".exportFields"][] = "ProdNo";
$tdataProduct_Inputs[".exportFields"][] = "ProdEngName";
$tdataProduct_Inputs[".exportFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".exportFields"][] = "EngModel";
$tdataProduct_Inputs[".exportFields"][] = "ThaiModel";
$tdataProduct_Inputs[".exportFields"][] = "CostType";
$tdataProduct_Inputs[".exportFields"][] = "EngName";
$tdataProduct_Inputs[".exportFields"][] = "ThaiName";
$tdataProduct_Inputs[".exportFields"][] = "Cost";
$tdataProduct_Inputs[".exportFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".exportFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".exportFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".exportFields"][] = "SortOrder";
$tdataProduct_Inputs[".exportFields"][] = "MixNo";
$tdataProduct_Inputs[".exportFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".exportFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".exportFields"][] = "ThaiProductGroup";

$tdataProduct_Inputs[".printFields"] = array();
$tdataProduct_Inputs[".printFields"][] = "ProdGrpCode";
$tdataProduct_Inputs[".printFields"][] = "ProdNo";
$tdataProduct_Inputs[".printFields"][] = "ProdEngName";
$tdataProduct_Inputs[".printFields"][] = "ProdThaiName";
$tdataProduct_Inputs[".printFields"][] = "EngModel";
$tdataProduct_Inputs[".printFields"][] = "ThaiModel";
$tdataProduct_Inputs[".printFields"][] = "CostType";
$tdataProduct_Inputs[".printFields"][] = "EngName";
$tdataProduct_Inputs[".printFields"][] = "ThaiName";
$tdataProduct_Inputs[".printFields"][] = "Cost";
$tdataProduct_Inputs[".printFields"][] = "CompPurchaseUnitEn";
$tdataProduct_Inputs[".printFields"][] = "UnitEngRpt";
$tdataProduct_Inputs[".printFields"][] = "UnitThaiRpt";
$tdataProduct_Inputs[".printFields"][] = "SortOrder";
$tdataProduct_Inputs[".printFields"][] = "MixNo";
$tdataProduct_Inputs[".printFields"][] = "ColorMixNo";
$tdataProduct_Inputs[".printFields"][] = "EngProductGroup";
$tdataProduct_Inputs[".printFields"][] = "ThaiProductGroup";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "prodcosts";
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
		$fdata["FullName"] = "prodcosts.ProdGrpCode";
	
		
		
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
				
		
			
	$edata["LinkField"] = "ProdGrpCode";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "concat(EngProductGroup,' / ',ThaiProductGroup)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "prodgrp";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
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
	
		
		
	$tdataProduct_Inputs["ProdGrpCode"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
		
		
	$tdataProduct_Inputs["ProdNo"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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
	
		
		
	$tdataProduct_Inputs["ProdEngName"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Thai Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
		
		
	$tdataProduct_Inputs["ProdThaiName"] = $fdata;
//	EngModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
				
		
			
	$edata["LinkField"] = "EngModel";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "concat(
    IFNULL(EngModel, ' '),
    ' / ',
    IFNULL(ThaiModel, ' ')
)";
	
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
	
		
		
	$tdataProduct_Inputs["EngModel"] = $fdata;
//	ThaiModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ThaiModel";
	$fdata["GoodName"] = "ThaiModel";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Thai Model"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiModel"; 
		$fdata["FullName"] = "products.ThaiModel";
	
		
		
				
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
	
		
		
	$tdataProduct_Inputs["ThaiModel"] = $fdata;
//	CostType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["CostType"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["ThaiName"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
		$fdata["FullName"] = "prodcosts.Cost";
	
		
		
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
	
		
		
	$tdataProduct_Inputs["Cost"] = $fdata;
//	CompPurchaseUnitEn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CompPurchaseUnitEn";
	$fdata["GoodName"] = "CompPurchaseUnitEn";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Comp Purchase Unit En"; 
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
	
		$fdata["strField"] = "CompPurchaseUnitEn"; 
		$fdata["FullName"] = "prodcosts.CompPurchaseUnitEn";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["CompPurchaseUnitEn"] = $fdata;
//	UnitEngRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["UnitEngRpt"] = $fdata;
//	UnitThaiRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UnitThaiRpt";
	$fdata["GoodName"] = "UnitThaiRpt";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Unit Thai Rpt"; 
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
	
		$fdata["strField"] = "UnitThaiRpt"; 
		$fdata["FullName"] = "prodcosts.UnitThaiRpt";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Inputs["UnitThaiRpt"] = $fdata;
//	SortOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
		
		
	$tdataProduct_Inputs["SortOrder"] = $fdata;
//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "products.MixNo";
	
		
		
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
	
		
		
	$tdataProduct_Inputs["MixNo"] = $fdata;
//	ColorMixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ColorMixNo";
	$fdata["GoodName"] = "ColorMixNo";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Color Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ColorMixNo"; 
		$fdata["FullName"] = "products.ColorMixNo";
	
		
		
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
	
		
		
	$tdataProduct_Inputs["ColorMixNo"] = $fdata;
//	EngProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EngProductGroup";
	$fdata["GoodName"] = "EngProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Eng Product Group"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngProductGroup"; 
		$fdata["FullName"] = "prodgrp.EngProductGroup";
	
		
		
				
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
	
		
		
	$tdataProduct_Inputs["EngProductGroup"] = $fdata;
//	ThaiProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ThaiProductGroup";
	$fdata["GoodName"] = "ThaiProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Thai Product Group"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiProductGroup"; 
		$fdata["FullName"] = "prodgrp.ThaiProductGroup";
	
		
		
				
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
	
		
		
	$tdataProduct_Inputs["ThaiProductGroup"] = $fdata;

	
$tables_data["Product Inputs"]=&$tdataProduct_Inputs;
$field_labels["Product_Inputs"] = &$fieldLabelsProduct_Inputs;
$fieldToolTips["Product Inputs"] = &$fieldToolTipsProduct_Inputs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product Inputs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product Inputs"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_Inputs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "prodcosts.ProdGrpCode,  prodcosts.ProdNo,  products.ProdEngName,  products.ProdThaiName,  products.EngModel,  products.ThaiModel,  prodcosts.CostType,  prodcosts.EngName,  prodcosts.ThaiName,  prodcosts.Cost,  prodcosts.CompPurchaseUnitEn,  prodcosts.UnitEngRpt,  prodcosts.UnitThaiRpt,  prodcosts.SortOrder,  products.MixNo,  products.ColorMixNo,  prodgrp.EngProductGroup,  prodgrp.ThaiProductGroup";
$proto0["m_strFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo  INNER JOIN prodgrp ON products.ProdGrpCode = prodgrp.ProdGrpCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY prodcosts.ProdNo, prodcosts.CostType, prodcosts.SortOrder";
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
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "prodcosts"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
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
	"m_strName" => "ProdEngName",
	"m_strTable" => "products"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "products"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "EngModel",
	"m_strTable" => "products"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiModel",
	"m_strTable" => "products"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "prodcosts"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "prodcosts"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "prodcosts"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "CompPurchaseUnitEn",
	"m_strTable" => "prodcosts"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEngRpt",
	"m_strTable" => "prodcosts"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitThaiRpt",
	"m_strTable" => "prodcosts"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "MixNo",
	"m_strTable" => "products"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorMixNo",
	"m_strTable" => "products"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "EngProductGroup",
	"m_strTable" => "prodgrp"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiProductGroup",
	"m_strTable" => "prodgrp"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "prodcosts";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "ProdGrpCode";
$proto42["m_columns"][] = "Status";
$proto42["m_columns"][] = "ProdNo";
$proto42["m_columns"][] = "CostType";
$proto42["m_columns"][] = "EngName";
$proto42["m_columns"][] = "ThaiName";
$proto42["m_columns"][] = "Qtty";
$proto42["m_columns"][] = "PieceCost";
$proto42["m_columns"][] = "SortOrder";
$proto42["m_columns"][] = "Cost";
$proto42["m_columns"][] = "UnitEngRpt";
$proto42["m_columns"][] = "UnitThaiRpt";
$proto42["m_columns"][] = "CompPurchaseUnitEn";
$proto42["m_columns"][] = "CostYear";
$proto42["m_columns"][] = "CostMonth";
$proto42["m_columns"][] = "PercentCost";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "products";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "ProdGrpCode";
$proto46["m_columns"][] = "ProdThaiName";
$proto46["m_columns"][] = "ProdEngName";
$proto46["m_columns"][] = "Picture";
$proto46["m_columns"][] = "ThaiModel";
$proto46["m_columns"][] = "EngModel";
$proto46["m_columns"][] = "MixNo";
$proto46["m_columns"][] = "ProdWt";
$proto46["m_columns"][] = "ColorMixNo";
$proto46["m_columns"][] = "FaceWt";
$proto46["m_columns"][] = "Mold";
$proto46["m_columns"][] = "PiecesPerMould";
$proto46["m_columns"][] = "ProductCost";
$proto46["m_columns"][] = "PriceRetail";
$proto46["m_columns"][] = "PriceWholeSale";
$proto46["m_columns"][] = "ProdStockGoal";
$proto46["m_columns"][] = "ThaiCom";
$proto46["m_columns"][] = "EngCom";
$proto46["m_columns"][] = "Status";
$proto46["m_columns"][] = "MoldWt";
$proto46["m_columns"][] = "GrayWtMold";
$proto46["m_columns"][] = "ColorWtMold";
$proto46["m_columns"][] = "Length";
$proto46["m_columns"][] = "Width1";
$proto46["m_columns"][] = "Thickness";
$proto46["m_columns"][] = "ProdNo";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_alias"] = "";
$proto47=array();
$proto47["m_sql"] = "prodcosts.ProdNo = products.ProdNo";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= products.ProdNo";
$proto47["m_havingmode"] = "0";
$proto47["m_inBrackets"] = "0";
$proto47["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "prodgrp";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "ProdGrpCode";
$proto50["m_columns"][] = "ThaiProductGroup";
$proto50["m_columns"][] = "EngProductGroup";
$proto50["m_columns"][] = "MarkDownWholesale";
$proto50["m_columns"][] = "MarkDownRetail";
$proto50["m_columns"][] = "DaysWorked";
$proto50["m_columns"][] = "NumberWorkers";
$proto50["m_columns"][] = "QtyMolds";
$proto50["m_columns"][] = "MouldsPerDay";
$proto50["m_columns"][] = "Interest";
$proto50["m_columns"][] = "Period";
$proto50["m_columns"][] = "DownPay";
$proto50["m_columns"][] = "MonthsOfCap";
$proto50["m_columns"][] = "Waste";
$proto50["m_columns"][] = "Maint";
$proto50["m_columns"][] = "ItemNotes";
$proto50["m_columns"][] = "CuringTime";
$proto50["m_columns"][] = "GAP";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_alias"] = "";
$proto51=array();
$proto51["m_sql"] = "products.ProdGrpCode = prodgrp.ProdGrpCode";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "products"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= prodgrp.ProdGrpCode";
$proto51["m_havingmode"] = "0";
$proto51["m_inBrackets"] = "0";
$proto51["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 1;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 1;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Product_Inputs = createSqlQuery_Product_Inputs();
																		$tdataProduct_Inputs[".sqlquery"] = $queryData_Product_Inputs;

include_once(getabspath("include/Product_Inputs_events.php"));
$tableEvents["Product Inputs"] = new eventclass_Product_Inputs;
$tdataProduct_Inputs[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Product Inputs");

?>