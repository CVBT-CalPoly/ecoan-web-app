<?php
$strTableName="Product Inputs";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="prodcosts";

$gstrOrderBy="ORDER BY prodcosts.ProdNo, prodcosts.CostType, prodcosts.SortOrder";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Product Inputs");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Product Inputs"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>