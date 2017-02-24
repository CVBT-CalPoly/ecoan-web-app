<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatestchart = array();
	$tdatatestchart[".ShortName"] = "testchart";
	$tdatatestchart[".OwnerID"] = "";
	$tdatatestchart[".OriginalTable"] = "products";

//	field labels
$fieldLabelstestchart = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestchart["English"] = array();
	$fieldToolTipstestchart["English"] = array();
	$fieldLabelstestchart["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipstestchart["English"]["ProdGrpCode"] = "";
	$fieldLabelstestchart["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipstestchart["English"]["ProdThaiName"] = "";
	$fieldLabelstestchart["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipstestchart["English"]["ProdEngName"] = "";
	$fieldLabelstestchart["English"]["Picture"] = "Picture";
	$fieldToolTipstestchart["English"]["Picture"] = "";
	$fieldLabelstestchart["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipstestchart["English"]["ThaiModel"] = "";
	$fieldLabelstestchart["English"]["EngModel"] = "Eng Model";
	$fieldToolTipstestchart["English"]["EngModel"] = "";
	$fieldLabelstestchart["English"]["MixNo"] = "Mix No";
	$fieldToolTipstestchart["English"]["MixNo"] = "";
	$fieldLabelstestchart["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipstestchart["English"]["ProdWt"] = "";
	$fieldLabelstestchart["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipstestchart["English"]["ColorMixNo"] = "";
	$fieldLabelstestchart["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipstestchart["English"]["FaceWt"] = "";
	$fieldLabelstestchart["English"]["Mold"] = "Mold";
	$fieldToolTipstestchart["English"]["Mold"] = "";
	$fieldLabelstestchart["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipstestchart["English"]["PiecesPerMould"] = "";
	$fieldLabelstestchart["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipstestchart["English"]["ProductCost"] = "";
	$fieldLabelstestchart["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipstestchart["English"]["PriceRetail"] = "";
	$fieldLabelstestchart["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipstestchart["English"]["PriceWholeSale"] = "";
	$fieldLabelstestchart["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipstestchart["English"]["ProdStockGoal"] = "";
	$fieldLabelstestchart["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipstestchart["English"]["ThaiCom"] = "";
	$fieldLabelstestchart["English"]["EngCom"] = "Eng Com";
	$fieldToolTipstestchart["English"]["EngCom"] = "";
	$fieldLabelstestchart["English"]["Status"] = "Status";
	$fieldToolTipstestchart["English"]["Status"] = "";
	$fieldLabelstestchart["English"]["MoldWt"] = "Mold Wt";
	$fieldToolTipstestchart["English"]["MoldWt"] = "";
	$fieldLabelstestchart["English"]["GrayWtMold"] = "Gray Wt Mold";
	$fieldToolTipstestchart["English"]["GrayWtMold"] = "";
	$fieldLabelstestchart["English"]["ColorWtMold"] = "Color Wt Mold";
	$fieldToolTipstestchart["English"]["ColorWtMold"] = "";
	$fieldLabelstestchart["English"]["Length"] = "Length";
	$fieldToolTipstestchart["English"]["Length"] = "";
	$fieldLabelstestchart["English"]["Thickness"] = "Thickness";
	$fieldToolTipstestchart["English"]["Thickness"] = "";
	$fieldLabelstestchart["English"]["ProdNo"] = "Prod No";
	$fieldToolTipstestchart["English"]["ProdNo"] = "";
	$fieldLabelstestchart["English"]["Width"] = "Width";
	$fieldToolTipstestchart["English"]["Width"] = "";
	if (count($fieldToolTipstestchart["English"]))
		$tdatatestchart[".isUseToolTips"] = true;
}
	
	
	$tdatatestchart[".NCSearch"] = true;

	$tdatatestchart[".ChartRefreshTime"] = 0;


$tdatatestchart[".shortTableName"] = "testchart";
$tdatatestchart[".nSecOptions"] = 0;
$tdatatestchart[".recsPerRowList"] = 1;
$tdatatestchart[".mainTableOwnerID"] = "";
$tdatatestchart[".moveNext"] = 1;
$tdatatestchart[".nType"] = 3;

$tdatatestchart[".strOriginalTableName"] = "products";




$tdatatestchart[".showAddInPopup"] = false;

$tdatatestchart[".showEditInPopup"] = false;

$tdatatestchart[".showViewInPopup"] = false;

$tdatatestchart[".fieldsForRegister"] = array();

$tdatatestchart[".listAjax"] = false;

	$tdatatestchart[".audit"] = false;

	$tdatatestchart[".locking"] = false;

$tdatatestchart[".listIcons"] = true;
$tdatatestchart[".edit"] = true;
$tdatatestchart[".inlineEdit"] = true;
$tdatatestchart[".inlineAdd"] = true;
$tdatatestchart[".view"] = true;



$tdatatestchart[".delete"] = true;

$tdatatestchart[".showSimpleSearchOptions"] = false;

$tdatatestchart[".showSearchPanel"] = true;

if (isMobile())
	$tdatatestchart[".isUseAjaxSuggest"] = false;
else 
	$tdatatestchart[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdatatestchart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestchart[".isUseTimeForSearch"] = false;




$tdatatestchart[".allSearchFields"] = array();

$tdatatestchart[".allSearchFields"][] = "ProdGrpCode";
$tdatatestchart[".allSearchFields"][] = "ProdThaiName";
$tdatatestchart[".allSearchFields"][] = "ProdEngName";
$tdatatestchart[".allSearchFields"][] = "ThaiModel";
$tdatatestchart[".allSearchFields"][] = "EngModel";
$tdatatestchart[".allSearchFields"][] = "MixNo";
$tdatatestchart[".allSearchFields"][] = "ProdWt";
$tdatatestchart[".allSearchFields"][] = "ColorMixNo";
$tdatatestchart[".allSearchFields"][] = "FaceWt";
$tdatatestchart[".allSearchFields"][] = "Mold";
$tdatatestchart[".allSearchFields"][] = "PiecesPerMould";
$tdatatestchart[".allSearchFields"][] = "ProductCost";
$tdatatestchart[".allSearchFields"][] = "PriceRetail";
$tdatatestchart[".allSearchFields"][] = "PriceWholeSale";
$tdatatestchart[".allSearchFields"][] = "ProdStockGoal";
$tdatatestchart[".allSearchFields"][] = "ThaiCom";
$tdatatestchart[".allSearchFields"][] = "EngCom";
$tdatatestchart[".allSearchFields"][] = "Status";
$tdatatestchart[".allSearchFields"][] = "MoldWt";
$tdatatestchart[".allSearchFields"][] = "GrayWtMold";
$tdatatestchart[".allSearchFields"][] = "ColorWtMold";
$tdatatestchart[".allSearchFields"][] = "Length";
$tdatatestchart[".allSearchFields"][] = "Width";
$tdatatestchart[".allSearchFields"][] = "Thickness";
$tdatatestchart[".allSearchFields"][] = "ProdNo";

$tdatatestchart[".googleLikeFields"][] = "ProdGrpCode";
$tdatatestchart[".googleLikeFields"][] = "ProdThaiName";
$tdatatestchart[".googleLikeFields"][] = "ProdEngName";
$tdatatestchart[".googleLikeFields"][] = "ThaiModel";
$tdatatestchart[".googleLikeFields"][] = "EngModel";
$tdatatestchart[".googleLikeFields"][] = "MixNo";
$tdatatestchart[".googleLikeFields"][] = "ProdWt";
$tdatatestchart[".googleLikeFields"][] = "ColorMixNo";
$tdatatestchart[".googleLikeFields"][] = "FaceWt";
$tdatatestchart[".googleLikeFields"][] = "Mold";
$tdatatestchart[".googleLikeFields"][] = "PiecesPerMould";
$tdatatestchart[".googleLikeFields"][] = "ProductCost";
$tdatatestchart[".googleLikeFields"][] = "PriceRetail";
$tdatatestchart[".googleLikeFields"][] = "PriceWholeSale";
$tdatatestchart[".googleLikeFields"][] = "ProdStockGoal";
$tdatatestchart[".googleLikeFields"][] = "ThaiCom";
$tdatatestchart[".googleLikeFields"][] = "EngCom";
$tdatatestchart[".googleLikeFields"][] = "Status";
$tdatatestchart[".googleLikeFields"][] = "MoldWt";
$tdatatestchart[".googleLikeFields"][] = "GrayWtMold";
$tdatatestchart[".googleLikeFields"][] = "ColorWtMold";
$tdatatestchart[".googleLikeFields"][] = "Length";
$tdatatestchart[".googleLikeFields"][] = "Width";
$tdatatestchart[".googleLikeFields"][] = "Thickness";
$tdatatestchart[".googleLikeFields"][] = "ProdNo";


$tdatatestchart[".advSearchFields"][] = "ProdGrpCode";
$tdatatestchart[".advSearchFields"][] = "ProdThaiName";
$tdatatestchart[".advSearchFields"][] = "ProdEngName";
$tdatatestchart[".advSearchFields"][] = "ThaiModel";
$tdatatestchart[".advSearchFields"][] = "EngModel";
$tdatatestchart[".advSearchFields"][] = "MixNo";
$tdatatestchart[".advSearchFields"][] = "ProdWt";
$tdatatestchart[".advSearchFields"][] = "ColorMixNo";
$tdatatestchart[".advSearchFields"][] = "FaceWt";
$tdatatestchart[".advSearchFields"][] = "Mold";
$tdatatestchart[".advSearchFields"][] = "PiecesPerMould";
$tdatatestchart[".advSearchFields"][] = "ProductCost";
$tdatatestchart[".advSearchFields"][] = "PriceRetail";
$tdatatestchart[".advSearchFields"][] = "PriceWholeSale";
$tdatatestchart[".advSearchFields"][] = "ProdStockGoal";
$tdatatestchart[".advSearchFields"][] = "ThaiCom";
$tdatatestchart[".advSearchFields"][] = "EngCom";
$tdatatestchart[".advSearchFields"][] = "Status";
$tdatatestchart[".advSearchFields"][] = "MoldWt";
$tdatatestchart[".advSearchFields"][] = "GrayWtMold";
$tdatatestchart[".advSearchFields"][] = "ColorWtMold";
$tdatatestchart[".advSearchFields"][] = "Length";
$tdatatestchart[".advSearchFields"][] = "Width";
$tdatatestchart[".advSearchFields"][] = "Thickness";
$tdatatestchart[".advSearchFields"][] = "ProdNo";

$tdatatestchart[".isTableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestchart[".strOrderBy"] = $tstrOrderBy;

$tdatatestchart[".orderindexes"] = array();

$tdatatestchart[".sqlHead"] = "SELECT ProdGrpCode,  ProdThaiName,  ProdEngName,  Picture,  ThaiModel,  EngModel,  MixNo,  ProdWt,  ColorMixNo,  FaceWt,  Mold,  PiecesPerMould,  ProductCost,  PriceRetail,  PriceWholeSale,  ProdStockGoal,  ThaiCom,  EngCom,  Status,  MoldWt,  GrayWtMold,  ColorWtMold,  Length,  Width,  Thickness,  ProdNo";
$tdatatestchart[".sqlFrom"] = "FROM Products";
$tdatatestchart[".sqlWhereExpr"] = "";
$tdatatestchart[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestchart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestchart[".arrGroupsPerPage"] = $arrGPP;

$tableKeystestchart = array();
$tableKeystestchart[] = "ProdNo";
$tdatatestchart[".Keys"] = $tableKeystestchart;

$tdatatestchart[".listFields"] = array();
$tdatatestchart[".listFields"][] = "ProdGrpCode";
$tdatatestchart[".listFields"][] = "ProdThaiName";
$tdatatestchart[".listFields"][] = "ProdEngName";
$tdatatestchart[".listFields"][] = "Picture";
$tdatatestchart[".listFields"][] = "ThaiModel";
$tdatatestchart[".listFields"][] = "EngModel";
$tdatatestchart[".listFields"][] = "MixNo";
$tdatatestchart[".listFields"][] = "ProdWt";
$tdatatestchart[".listFields"][] = "ColorMixNo";
$tdatatestchart[".listFields"][] = "FaceWt";
$tdatatestchart[".listFields"][] = "Mold";
$tdatatestchart[".listFields"][] = "PiecesPerMould";
$tdatatestchart[".listFields"][] = "ProductCost";
$tdatatestchart[".listFields"][] = "PriceRetail";
$tdatatestchart[".listFields"][] = "PriceWholeSale";
$tdatatestchart[".listFields"][] = "ProdStockGoal";
$tdatatestchart[".listFields"][] = "ThaiCom";
$tdatatestchart[".listFields"][] = "EngCom";
$tdatatestchart[".listFields"][] = "Status";
$tdatatestchart[".listFields"][] = "MoldWt";
$tdatatestchart[".listFields"][] = "GrayWtMold";
$tdatatestchart[".listFields"][] = "ColorWtMold";
$tdatatestchart[".listFields"][] = "Length";
$tdatatestchart[".listFields"][] = "Width";
$tdatatestchart[".listFields"][] = "Thickness";
$tdatatestchart[".listFields"][] = "ProdNo";

$tdatatestchart[".viewFields"] = array();
$tdatatestchart[".viewFields"][] = "ProdGrpCode";
$tdatatestchart[".viewFields"][] = "ProdThaiName";
$tdatatestchart[".viewFields"][] = "ProdEngName";
$tdatatestchart[".viewFields"][] = "Picture";
$tdatatestchart[".viewFields"][] = "ThaiModel";
$tdatatestchart[".viewFields"][] = "EngModel";
$tdatatestchart[".viewFields"][] = "MixNo";
$tdatatestchart[".viewFields"][] = "ProdWt";
$tdatatestchart[".viewFields"][] = "ColorMixNo";
$tdatatestchart[".viewFields"][] = "FaceWt";
$tdatatestchart[".viewFields"][] = "Mold";
$tdatatestchart[".viewFields"][] = "PiecesPerMould";
$tdatatestchart[".viewFields"][] = "ProductCost";
$tdatatestchart[".viewFields"][] = "PriceRetail";
$tdatatestchart[".viewFields"][] = "PriceWholeSale";
$tdatatestchart[".viewFields"][] = "ProdStockGoal";
$tdatatestchart[".viewFields"][] = "ThaiCom";
$tdatatestchart[".viewFields"][] = "EngCom";
$tdatatestchart[".viewFields"][] = "Status";
$tdatatestchart[".viewFields"][] = "MoldWt";
$tdatatestchart[".viewFields"][] = "GrayWtMold";
$tdatatestchart[".viewFields"][] = "ColorWtMold";
$tdatatestchart[".viewFields"][] = "Length";
$tdatatestchart[".viewFields"][] = "Width";
$tdatatestchart[".viewFields"][] = "Thickness";
$tdatatestchart[".viewFields"][] = "ProdNo";

$tdatatestchart[".addFields"] = array();
$tdatatestchart[".addFields"][] = "ProdGrpCode";
$tdatatestchart[".addFields"][] = "ProdThaiName";
$tdatatestchart[".addFields"][] = "ProdEngName";
$tdatatestchart[".addFields"][] = "Picture";
$tdatatestchart[".addFields"][] = "ThaiModel";
$tdatatestchart[".addFields"][] = "EngModel";
$tdatatestchart[".addFields"][] = "MixNo";
$tdatatestchart[".addFields"][] = "ProdWt";
$tdatatestchart[".addFields"][] = "ColorMixNo";
$tdatatestchart[".addFields"][] = "FaceWt";
$tdatatestchart[".addFields"][] = "Mold";
$tdatatestchart[".addFields"][] = "PiecesPerMould";
$tdatatestchart[".addFields"][] = "ProductCost";
$tdatatestchart[".addFields"][] = "PriceRetail";
$tdatatestchart[".addFields"][] = "PriceWholeSale";
$tdatatestchart[".addFields"][] = "ProdStockGoal";
$tdatatestchart[".addFields"][] = "ThaiCom";
$tdatatestchart[".addFields"][] = "EngCom";
$tdatatestchart[".addFields"][] = "Status";
$tdatatestchart[".addFields"][] = "MoldWt";
$tdatatestchart[".addFields"][] = "GrayWtMold";
$tdatatestchart[".addFields"][] = "ColorWtMold";
$tdatatestchart[".addFields"][] = "Length";
$tdatatestchart[".addFields"][] = "Width";
$tdatatestchart[".addFields"][] = "Thickness";

$tdatatestchart[".inlineAddFields"] = array();
$tdatatestchart[".inlineAddFields"][] = "ProdGrpCode";
$tdatatestchart[".inlineAddFields"][] = "ProdThaiName";
$tdatatestchart[".inlineAddFields"][] = "ProdEngName";
$tdatatestchart[".inlineAddFields"][] = "Picture";
$tdatatestchart[".inlineAddFields"][] = "ThaiModel";
$tdatatestchart[".inlineAddFields"][] = "EngModel";
$tdatatestchart[".inlineAddFields"][] = "MixNo";
$tdatatestchart[".inlineAddFields"][] = "ProdWt";
$tdatatestchart[".inlineAddFields"][] = "ColorMixNo";
$tdatatestchart[".inlineAddFields"][] = "FaceWt";
$tdatatestchart[".inlineAddFields"][] = "Mold";
$tdatatestchart[".inlineAddFields"][] = "PiecesPerMould";
$tdatatestchart[".inlineAddFields"][] = "ProductCost";
$tdatatestchart[".inlineAddFields"][] = "PriceRetail";
$tdatatestchart[".inlineAddFields"][] = "PriceWholeSale";
$tdatatestchart[".inlineAddFields"][] = "ProdStockGoal";
$tdatatestchart[".inlineAddFields"][] = "ThaiCom";
$tdatatestchart[".inlineAddFields"][] = "EngCom";
$tdatatestchart[".inlineAddFields"][] = "Status";
$tdatatestchart[".inlineAddFields"][] = "MoldWt";
$tdatatestchart[".inlineAddFields"][] = "GrayWtMold";
$tdatatestchart[".inlineAddFields"][] = "ColorWtMold";
$tdatatestchart[".inlineAddFields"][] = "Length";
$tdatatestchart[".inlineAddFields"][] = "Width";
$tdatatestchart[".inlineAddFields"][] = "Thickness";

$tdatatestchart[".editFields"] = array();
$tdatatestchart[".editFields"][] = "ProdGrpCode";
$tdatatestchart[".editFields"][] = "ProdThaiName";
$tdatatestchart[".editFields"][] = "ProdEngName";
$tdatatestchart[".editFields"][] = "Picture";
$tdatatestchart[".editFields"][] = "ThaiModel";
$tdatatestchart[".editFields"][] = "EngModel";
$tdatatestchart[".editFields"][] = "MixNo";
$tdatatestchart[".editFields"][] = "ProdWt";
$tdatatestchart[".editFields"][] = "ColorMixNo";
$tdatatestchart[".editFields"][] = "FaceWt";
$tdatatestchart[".editFields"][] = "Mold";
$tdatatestchart[".editFields"][] = "PiecesPerMould";
$tdatatestchart[".editFields"][] = "ProductCost";
$tdatatestchart[".editFields"][] = "PriceRetail";
$tdatatestchart[".editFields"][] = "PriceWholeSale";
$tdatatestchart[".editFields"][] = "ProdStockGoal";
$tdatatestchart[".editFields"][] = "ThaiCom";
$tdatatestchart[".editFields"][] = "EngCom";
$tdatatestchart[".editFields"][] = "Status";
$tdatatestchart[".editFields"][] = "MoldWt";
$tdatatestchart[".editFields"][] = "GrayWtMold";
$tdatatestchart[".editFields"][] = "ColorWtMold";
$tdatatestchart[".editFields"][] = "Length";
$tdatatestchart[".editFields"][] = "Width";
$tdatatestchart[".editFields"][] = "Thickness";

$tdatatestchart[".inlineEditFields"] = array();
$tdatatestchart[".inlineEditFields"][] = "ProdGrpCode";
$tdatatestchart[".inlineEditFields"][] = "ProdThaiName";
$tdatatestchart[".inlineEditFields"][] = "ProdEngName";
$tdatatestchart[".inlineEditFields"][] = "Picture";
$tdatatestchart[".inlineEditFields"][] = "ThaiModel";
$tdatatestchart[".inlineEditFields"][] = "EngModel";
$tdatatestchart[".inlineEditFields"][] = "MixNo";
$tdatatestchart[".inlineEditFields"][] = "ProdWt";
$tdatatestchart[".inlineEditFields"][] = "ColorMixNo";
$tdatatestchart[".inlineEditFields"][] = "FaceWt";
$tdatatestchart[".inlineEditFields"][] = "Mold";
$tdatatestchart[".inlineEditFields"][] = "PiecesPerMould";
$tdatatestchart[".inlineEditFields"][] = "ProductCost";
$tdatatestchart[".inlineEditFields"][] = "PriceRetail";
$tdatatestchart[".inlineEditFields"][] = "PriceWholeSale";
$tdatatestchart[".inlineEditFields"][] = "ProdStockGoal";
$tdatatestchart[".inlineEditFields"][] = "ThaiCom";
$tdatatestchart[".inlineEditFields"][] = "EngCom";
$tdatatestchart[".inlineEditFields"][] = "Status";
$tdatatestchart[".inlineEditFields"][] = "MoldWt";
$tdatatestchart[".inlineEditFields"][] = "GrayWtMold";
$tdatatestchart[".inlineEditFields"][] = "ColorWtMold";
$tdatatestchart[".inlineEditFields"][] = "Length";
$tdatatestchart[".inlineEditFields"][] = "Width";
$tdatatestchart[".inlineEditFields"][] = "Thickness";

$tdatatestchart[".exportFields"] = array();
$tdatatestchart[".exportFields"][] = "ProdGrpCode";
$tdatatestchart[".exportFields"][] = "ProdThaiName";
$tdatatestchart[".exportFields"][] = "ProdEngName";
$tdatatestchart[".exportFields"][] = "ThaiModel";
$tdatatestchart[".exportFields"][] = "EngModel";
$tdatatestchart[".exportFields"][] = "MixNo";
$tdatatestchart[".exportFields"][] = "ProdWt";
$tdatatestchart[".exportFields"][] = "ColorMixNo";
$tdatatestchart[".exportFields"][] = "FaceWt";
$tdatatestchart[".exportFields"][] = "Mold";
$tdatatestchart[".exportFields"][] = "PiecesPerMould";
$tdatatestchart[".exportFields"][] = "ProductCost";
$tdatatestchart[".exportFields"][] = "PriceRetail";
$tdatatestchart[".exportFields"][] = "PriceWholeSale";
$tdatatestchart[".exportFields"][] = "ProdStockGoal";
$tdatatestchart[".exportFields"][] = "ThaiCom";
$tdatatestchart[".exportFields"][] = "EngCom";
$tdatatestchart[".exportFields"][] = "Status";
$tdatatestchart[".exportFields"][] = "MoldWt";
$tdatatestchart[".exportFields"][] = "GrayWtMold";
$tdatatestchart[".exportFields"][] = "ColorWtMold";
$tdatatestchart[".exportFields"][] = "Length";
$tdatatestchart[".exportFields"][] = "Width";
$tdatatestchart[".exportFields"][] = "Thickness";
$tdatatestchart[".exportFields"][] = "ProdNo";

$tdatatestchart[".printFields"] = array();
$tdatatestchart[".printFields"][] = "ProdGrpCode";
$tdatatestchart[".printFields"][] = "ProdThaiName";
$tdatatestchart[".printFields"][] = "ProdEngName";
$tdatatestchart[".printFields"][] = "Picture";
$tdatatestchart[".printFields"][] = "ThaiModel";
$tdatatestchart[".printFields"][] = "EngModel";
$tdatatestchart[".printFields"][] = "MixNo";
$tdatatestchart[".printFields"][] = "ProdWt";
$tdatatestchart[".printFields"][] = "ColorMixNo";
$tdatatestchart[".printFields"][] = "FaceWt";
$tdatatestchart[".printFields"][] = "Mold";
$tdatatestchart[".printFields"][] = "PiecesPerMould";
$tdatatestchart[".printFields"][] = "ProductCost";
$tdatatestchart[".printFields"][] = "PriceRetail";
$tdatatestchart[".printFields"][] = "PriceWholeSale";
$tdatatestchart[".printFields"][] = "ProdStockGoal";
$tdatatestchart[".printFields"][] = "ThaiCom";
$tdatatestchart[".printFields"][] = "EngCom";
$tdatatestchart[".printFields"][] = "Status";
$tdatatestchart[".printFields"][] = "MoldWt";
$tdatatestchart[".printFields"][] = "GrayWtMold";
$tdatatestchart[".printFields"][] = "ColorWtMold";
$tdatatestchart[".printFields"][] = "Length";
$tdatatestchart[".printFields"][] = "Width";
$tdatatestchart[".printFields"][] = "Thickness";
$tdatatestchart[".printFields"][] = "ProdNo";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "Products";
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
		$fdata["FullName"] = "ProdGrpCode";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ProdGrpCode"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Prod Thai Name"; 
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
	
		$fdata["strField"] = "ProdThaiName"; 
		$fdata["FullName"] = "ProdThaiName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=67";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ProdThaiName"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdEngName";
	$fdata["GoodName"] = "ProdEngName";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Prod Eng Name"; 
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
	
		$fdata["strField"] = "ProdEngName"; 
		$fdata["FullName"] = "ProdEngName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=80";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ProdEngName"] = $fdata;
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Picture"; 
	$fdata["FieldType"] = 128;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Picture"; 
		$fdata["FullName"] = "Picture";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
				$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["Picture"] = $fdata;
//	ThaiModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ThaiModel";
	$fdata["GoodName"] = "ThaiModel";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Thai Model"; 
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
	
		$fdata["strField"] = "ThaiModel"; 
		$fdata["FullName"] = "ThaiModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ThaiModel"] = $fdata;
//	EngModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EngModel";
	$fdata["GoodName"] = "EngModel";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Eng Model"; 
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
	
		$fdata["strField"] = "EngModel"; 
		$fdata["FullName"] = "EngModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["EngModel"] = $fdata;
//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Mix No"; 
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
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "MixNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["MixNo"] = $fdata;
//	ProdWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProdWt";
	$fdata["GoodName"] = "ProdWt";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Prod Wt"; 
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
	
		$fdata["strField"] = "ProdWt"; 
		$fdata["FullName"] = "ProdWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["ProdWt"] = $fdata;
//	ColorMixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ColorMixNo";
	$fdata["GoodName"] = "ColorMixNo";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Color Mix No"; 
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
	
		$fdata["strField"] = "ColorMixNo"; 
		$fdata["FullName"] = "ColorMixNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ColorMixNo"] = $fdata;
//	FaceWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FaceWt";
	$fdata["GoodName"] = "FaceWt";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Face Wt"; 
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
	
		$fdata["strField"] = "FaceWt"; 
		$fdata["FullName"] = "FaceWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["FaceWt"] = $fdata;
//	Mold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Mold";
	$fdata["GoodName"] = "Mold";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Mold"; 
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
	
		$fdata["strField"] = "Mold"; 
		$fdata["FullName"] = "Mold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["Mold"] = $fdata;
//	PiecesPerMould
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PiecesPerMould";
	$fdata["GoodName"] = "PiecesPerMould";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Pieces Per Mould"; 
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
	
		$fdata["strField"] = "PiecesPerMould"; 
		$fdata["FullName"] = "PiecesPerMould";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["PiecesPerMould"] = $fdata;
//	ProductCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ProductCost";
	$fdata["GoodName"] = "ProductCost";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Product Cost"; 
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
	
		$fdata["strField"] = "ProductCost"; 
		$fdata["FullName"] = "ProductCost";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["ProductCost"] = $fdata;
//	PriceRetail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PriceRetail";
	$fdata["GoodName"] = "PriceRetail";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Price Retail"; 
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
	
		$fdata["strField"] = "PriceRetail"; 
		$fdata["FullName"] = "PriceRetail";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["PriceRetail"] = $fdata;
//	PriceWholeSale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PriceWholeSale";
	$fdata["GoodName"] = "PriceWholeSale";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Price Whole Sale"; 
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
	
		$fdata["strField"] = "PriceWholeSale"; 
		$fdata["FullName"] = "PriceWholeSale";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["PriceWholeSale"] = $fdata;
//	ProdStockGoal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ProdStockGoal";
	$fdata["GoodName"] = "ProdStockGoal";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Prod Stock Goal"; 
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
	
		$fdata["strField"] = "ProdStockGoal"; 
		$fdata["FullName"] = "ProdStockGoal";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["ProdStockGoal"] = $fdata;
//	ThaiCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ThaiCom";
	$fdata["GoodName"] = "ThaiCom";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Thai Com"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiCom"; 
		$fdata["FullName"] = "ThaiCom";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ThaiCom"] = $fdata;
//	EngCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EngCom";
	$fdata["GoodName"] = "EngCom";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Eng Com"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngCom"; 
		$fdata["FullName"] = "EngCom";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["EngCom"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Status"; 
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
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["Status"] = $fdata;
//	MoldWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MoldWt";
	$fdata["GoodName"] = "MoldWt";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Mold Wt"; 
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
	
		$fdata["strField"] = "MoldWt"; 
		$fdata["FullName"] = "MoldWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["MoldWt"] = $fdata;
//	GrayWtMold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "GrayWtMold";
	$fdata["GoodName"] = "GrayWtMold";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Gray Wt Mold"; 
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
	
		$fdata["strField"] = "GrayWtMold"; 
		$fdata["FullName"] = "GrayWtMold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["GrayWtMold"] = $fdata;
//	ColorWtMold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ColorWtMold";
	$fdata["GoodName"] = "ColorWtMold";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Color Wt Mold"; 
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
	
		$fdata["strField"] = "ColorWtMold"; 
		$fdata["FullName"] = "ColorWtMold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["ColorWtMold"] = $fdata;
//	Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Length";
	$fdata["GoodName"] = "Length";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Length"; 
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
	
		$fdata["strField"] = "Length"; 
		$fdata["FullName"] = "Length";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["Length"] = $fdata;
//	Width
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Width";
	$fdata["GoodName"] = "Width";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Width"; 
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
	
		$fdata["strField"] = "Width"; 
		$fdata["FullName"] = "Width";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["Width"] = $fdata;
//	Thickness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Thickness";
	$fdata["GoodName"] = "Thickness";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Thickness"; 
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
	
		$fdata["strField"] = "Thickness"; 
		$fdata["FullName"] = "Thickness";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdatatestchart["Thickness"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "Products";
	$fdata["Label"] = "Prod No"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdNo"; 
		$fdata["FullName"] = "ProdNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatestchart["ProdNo"] = $fdata;

	$tdatatestchart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">testchart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatatestchart[".chartXml"] .= '<attr value="0">
			<attr value="name">ProdWt</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">4</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatatestchart[".chartXml"] .= '</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="1">
		<attr value="name">ProdGrpCode</attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatatestchart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatatestchart[".chartXml"] .= '<attr value="head">'.xmlencode("Chart Title").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("ProdWt").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">5</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatatestchart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatestchart[".chartXml"] .= '<attr value="0">
		<attr value="name">ProdGrpCode</attr>
		<attr value="label">'.xmlencode("Prod Grp Code").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="1">
		<attr value="name">ProdThaiName</attr>
		<attr value="label">'.xmlencode("Prod Thai Name").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="2">
		<attr value="name">ProdEngName</attr>
		<attr value="label">'.xmlencode("Prod Eng Name").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="3">
		<attr value="name">Picture</attr>
		<attr value="label">'.xmlencode("Picture").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="4">
		<attr value="name">ThaiModel</attr>
		<attr value="label">'.xmlencode("Thai Model").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="5">
		<attr value="name">EngModel</attr>
		<attr value="label">'.xmlencode("Eng Model").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="6">
		<attr value="name">MixNo</attr>
		<attr value="label">'.xmlencode("Mix No").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="7">
		<attr value="name">ProdWt</attr>
		<attr value="label">'.xmlencode("Prod Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="8">
		<attr value="name">ColorMixNo</attr>
		<attr value="label">'.xmlencode("Color Mix No").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="9">
		<attr value="name">FaceWt</attr>
		<attr value="label">'.xmlencode("Face Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="10">
		<attr value="name">Mold</attr>
		<attr value="label">'.xmlencode("Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="11">
		<attr value="name">PiecesPerMould</attr>
		<attr value="label">'.xmlencode("Pieces Per Mould").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="12">
		<attr value="name">ProductCost</attr>
		<attr value="label">'.xmlencode("Product Cost").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="13">
		<attr value="name">PriceRetail</attr>
		<attr value="label">'.xmlencode("Price Retail").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="14">
		<attr value="name">PriceWholeSale</attr>
		<attr value="label">'.xmlencode("Price Whole Sale").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="15">
		<attr value="name">ProdStockGoal</attr>
		<attr value="label">'.xmlencode("Prod Stock Goal").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="16">
		<attr value="name">ThaiCom</attr>
		<attr value="label">'.xmlencode("Thai Com").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="17">
		<attr value="name">EngCom</attr>
		<attr value="label">'.xmlencode("Eng Com").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="18">
		<attr value="name">Status</attr>
		<attr value="label">'.xmlencode("Status").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="19">
		<attr value="name">MoldWt</attr>
		<attr value="label">'.xmlencode("Mold Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="20">
		<attr value="name">GrayWtMold</attr>
		<attr value="label">'.xmlencode("Gray Wt Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="21">
		<attr value="name">ColorWtMold</attr>
		<attr value="label">'.xmlencode("Color Wt Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="22">
		<attr value="name">Length</attr>
		<attr value="label">'.xmlencode("Length").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="23">
		<attr value="name">Width</attr>
		<attr value="label">'.xmlencode("Width").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="24">
		<attr value="name">Thickness</attr>
		<attr value="label">'.xmlencode("Thickness").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatestchart[".chartXml"] .= '<attr value="25">
		<attr value="name">ProdNo</attr>
		<attr value="label">'.xmlencode("Prod No").'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatestchart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">testchart</attr>
<attr value="short_table_name">testchart</attr>
</attr>

</chart>';
	
$tables_data["testchart"]=&$tdatatestchart;
$field_labels["testchart"] = &$fieldLabelstestchart;
$fieldToolTips["testchart"] = &$fieldToolTipstestchart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testchart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["testchart"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testchart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,  ProdThaiName,  ProdEngName,  Picture,  ThaiModel,  EngModel,  MixNo,  ProdWt,  ColorMixNo,  FaceWt,  Mold,  PiecesPerMould,  ProductCost,  PriceRetail,  PriceWholeSale,  ProdStockGoal,  ThaiCom,  EngCom,  Status,  MoldWt,  GrayWtMold,  ColorWtMold,  Length,  Width,  Thickness,  ProdNo";
$proto0["m_strFrom"] = "FROM Products";
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
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "Products"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "Products"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdEngName",
	"m_strTable" => "Products"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "Products"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiModel",
	"m_strTable" => "Products"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "EngModel",
	"m_strTable" => "Products"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "MixNo",
	"m_strTable" => "Products"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdWt",
	"m_strTable" => "Products"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorMixNo",
	"m_strTable" => "Products"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "FaceWt",
	"m_strTable" => "Products"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Mold",
	"m_strTable" => "Products"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "PiecesPerMould",
	"m_strTable" => "Products"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductCost",
	"m_strTable" => "Products"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceRetail",
	"m_strTable" => "Products"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceWholeSale",
	"m_strTable" => "Products"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdStockGoal",
	"m_strTable" => "Products"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiCom",
	"m_strTable" => "Products"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EngCom",
	"m_strTable" => "Products"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "Products"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "MoldWt",
	"m_strTable" => "Products"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "GrayWtMold",
	"m_strTable" => "Products"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorWtMold",
	"m_strTable" => "Products"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Length",
	"m_strTable" => "Products"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Width",
	"m_strTable" => "Products"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Thickness",
	"m_strTable" => "Products"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "Products"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "Products";
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
$proto58["m_columns"][] = "Width";
$proto58["m_columns"][] = "Thickness";
$proto58["m_columns"][] = "ProdNo";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_alias"] = "";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = "0";
$proto59["m_inBrackets"] = "0";
$proto59["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testchart = createSqlQuery_testchart();
																										$tdatatestchart[".sqlquery"] = $queryData_testchart;

$tableEvents["testchart"] = new eventsBase;
$tdatatestchart[".hasEvents"] = false;

$cipherer = new RunnerCipherer("testchart");

?>