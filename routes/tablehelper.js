var dict;

function initDict() {
  console.log("calling initDict")
  if (!dict) {
    dict = {}
    dict["Bucket"] = bucketsTableHeaders
    dict["CompType"] = compTypeTableHeaders
    dict["Component History"] = componentHistoryTableHeaders
    dict["Component Usage"] = componentUsageTableHeaders
    dict["Components"] = componentsTableHeaders
    dict["EmpSalary"] = empSalaryTableHeaders
    dict["FixedAssyUse"] = fixedAssyUseTableHeaders
    dict["Mix"] = mixTableHeaders
    dict["MixRegistry"] = mixRegistryTableHeaders
    dict["ModelCostData"] = modelCostDataTableHeaders
    dict["Personnel"] = personnelTableHeaders
    dict["ProdGrp"] = prodGrpTableHeaders
    dict["ProductsColorCostJg"] = productsColorCostJgTableHeaders
    dict["Product History"] = productHistoryTableHeaders
    dict["Products"] = productsTableHeaders
    dict["Status"] = statusTableHeaders
    dict["UnitType"] = unitTypeTableHeaders
    dict["Units"] = unitsTableHeaders
    console.log("initialized dict")
  }
}

module.exports = {
  getTableHeaders: function(table) {
    initDict()
    console.log("table name" + table)
    console.log(dict[table])
    return dict[table]
  }
}

var productHistoryTableHeaders = [
  "ProdGrpCode",
  "ProdThaiName",
  "ProdEngName",
  "Picture",
  "ThaiModel",
  "EngModel",
  "MixNo",
  "ProdWt",
  "ColorMixNo",
  "FaceWt",
  "Mold",
  "PiecesPerMould",
  "ProductCost",
  "PriceRetail",
  "PriceWholeSale",
  "ProdStockGoal",
  "ThaiCom",
  "EngCom",
  "Status",
  "ChangeType",
  "ChangeDate",
  "ChangeTime"
];

var componentHistoryTableHeaders = [
  "ComponentNo",
  "EngName",
  "ThaiName",
  "DescriptionEng",
  "DescriptionThai",
  "CompTypeNo",
  "UnitEng",
  "UnitQty",
  "CompPurchaseUnitEn",
  "Cost",
  "Density",
  "Source",
  "SortOrder",
  "ChangeType",
  "ChangeDate",
  "ChangeTime",
  "SorOrder"
];

var bucketsTableHeaders = [
  "Bucket No",
  "Unit Eng",
  "Volumne",
  "Component No",
  "Dry Weight"
];

var componentUsageTableHeaders = [
  "ProdNo",
  "ComponentNo",
  "ComponentQty"
];

var componentsTableHeaders = [
  "ComponentNo",
  "EngName",
  "ThaiName",
  "DescriptionEng",
  "DescriptionThai",
  "CompTypeNo",
  "UnitEng",
  "UnitQty",
  "CompPurchaseUnitEn",
  "Cost",
  "PriceSell",
  "Source",
  "Density",
  "SortOrder"
];

var compTypeTableHeaders = [
  "CompTypeEng",
  "CompTypeLL",
  "DetailsEng",
  "detailsLL",
  "CompTypeNo"
];

var empSalaryTableHeaders = [
  "Position",
  "Salary"
];

var fixedAssyUseTableHeaders = [
  "ProdGrpCode",
  "ProdNo",
  "Qty"
];

var mixTableHeaders = [
  "MixNo",
  "ComponentNo",
  "Qtty",
  "UnitOrBucket"
];

var mixRegistryTableHeaders = [
  "MixNo",
  "MixColor",
  "ProdGrpCode",
  "Notes",
  "Status"
];

var modelCostDataTableHeaders = [
  "ParameterNo",
  "EngParameter",
  "ThaiParameter",
  "Value"
];

var personnelTableHeaders = [
  "FirstName",
  "lastname",
  "FirstNmThai",
  "LastNmThai",
  "HireDate",
  "EndDate",
  "Salarys",
  "SalaryTimePeriod",
  "BirthDate",
  "HouseNo",
  "Village",
  "District",
  "Ampher",
  "Provence",
  "ZipC",
  "Mobie",
  "sex",
  "NationaiIDCardNo",
  "DateofIssue",
  "DateofExpiry",
  "DrivingCard",
  "IssueDate",
  "ExpiryDate",
  "Finish",
  "NameSchool",
  "EmpPhoto",
  "AccountNo",
  "BankName",
  "EmpNo"
];

var prodGrpTableHeaders = [
  "ProdGrpCode",
  "ThaiProductGroup",
  "EngProductGroup",
  "MarkDownWholesale",
  "MarkDownRetail",
  "DaysWorked",
  "NumberWorkers",
  "QtyMolds",
  "MouldsPerDay",
  "Interest",
  "Period",
  "DownPay",
  "MonthsOfCap",
  "Waste",
  "Maint",
  "ItemNotes",
  "CuringTime",
  "GAP",
  "Admin",
  "Manager",
  "Clerk"
];

var productsColorCostJgTableHeaders = [
  "ProductColor",
  "ProdGrpCode",
  "Cost4"
];

var productsTableHeaders = [
  "ProdGrpCode",
  "ProdThaiName",
  "ProdEngName",
  "Picture",
  "ThaiModel",
  "EngModel",
  "MixNo",
  "ProdWt",
  "ColorMixNo",
  "FaceWt",
  "Mold",
  "PiecesPerMould",
  "ProductCost",
  "PriceRetail",
  "PriceWholeSale",
  "ProdStockGoal",
  "ThaiCom",
  "EngCom",
  "Status",
  "MoldWt",
  "GrayWtMold",
  "ColorWtMold",
  "Length",
  "Width",
  "Thickness",
  "ProdNo"
];

var statusTableHeaders = [
  "StatusCode",
  "CodeDescription",
  "ThaiDescription"
];

var unitsTableHeaders = [
  "UnitEng",
  "Unit_LL",
  "Unit_English_Full",
  "Unit_LL_Full",
  "Unit_Type_English",
  "Rel_to_Base"
];

var unitTypeTableHeaders = [
  "Unit_Type_English",
  "Unit_Type_LL"
];