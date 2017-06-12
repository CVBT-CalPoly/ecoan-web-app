var selectedProd = 1;
var dataset;
var prodCost;
var productPrice;

document.getElementById('drop').onchange = function(){
    var value = document.getElementById('drop').options[document.getElementById('drop').selectedIndex].value;
    selectedProd = value;
    console.log(selectedProd);
    deleteGraph();
    getProdCost(selectedProd);
}
//var numProd = 30000;
function getProdCost(id) {
  var myId = {prodId : id};
  $.ajax({
    type: "GET",
    url: "http://localhost:3000/api/graph/graph/prodCosts",
    contentType: "application/json",
    datatype: "json",
    data: JSON.stringify(myId),
    success: function(d){
      //console.log(JSON.parse(d));
      dataset = JSON.parse(d);
      getSumPieceCost(id);

    }
  });
};
var listProds = '';
function getAllProds() {
  $.ajax({
    type: "GET",
    url: "http://localhost:3000/api/graph/graph/allProducts",
    contentType: "application/json",
    success: function(d){
      //console.log(JSON.parse(d));
      var data = JSON.parse(d);
      $.each(data, function(key, value){

     /* if(value.ProdNo == 1) {
          listProds += '<option value=' + value.ProdNo + ' selected="selected"> ' + value.ProdEngName + ' ' + value.EngModel + ' </option>';
      }
      else {*/
      if(value.EngModel != null) {
        listProds += '<option value=' + value.ProdNo + '>' + value.ProdEngName + ' ' + value.EngModel + '</option>';
      }
      else {
        listProds += '<option value=' + value.ProdNo + '>' + value.ProdEngName + '</option>';
      }
    //}
      });
      //console.log(listProds);
      $("#drop").append(listProds);
      $('#drop option[value=selectedProd]').prop('selected', true);
      var value = document.getElementById('drop').options[document.getElementById('drop').selectedIndex].value;
      getProdCost(value);



    }
  });
};

function getSumPieceCost(id) {
  var myId = {prodId : id};
  $.ajax({
    type: "GET",
    url: "http://localhost:3000/api/graph/graph/sumPieceCost",
    contentType: "application/json",
    datatype: "json",
    data: JSON.stringify(myId),
    success: function(d){
      //console.log(JSON.parse(d));
      prodCost = JSON.parse(d);
      getRetailPrice(id);
    }
  });
};
function getRetailPrice(id) {
  var myId = {prodId : id};
  $.ajax({
    type: "GET",
    url: "http://localhost:3000/api/graph/graph/retailPrice",
    contentType: "application/json",
    datatype: "json",
    data: JSON.stringify(myId),
    success: function(d){
      //console.log(JSON.parse(d));
      productPrice = JSON.parse(d);
      init();
    }
  });
};
//getProdCost();
getAllProds();
//getSumPieceCost();
//getRetailPrice();

function deleteGraphAndInit() {
  document.getElementById("xAxis").remove();
  document.getElementById("yAxis").remove();
     document.getElementById("variableLine").remove();
     document.getElementById("fixedLine").remove();
     document.getElementById("productLine").remove();
     init();
}

function deleteGraph() {
  document.getElementById("xAxis").remove();
  document.getElementById("yAxis").remove();

     document.getElementById("variableLine").remove();
     document.getElementById("fixedLine").remove();
     document.getElementById("productLine").remove();
}


function init() {

  var numProd = document.getElementById("numForm").value;
  var drop = document.getElementById("drop");
  var value = drop.options[drop.selectedIndex].value;
var text = drop.options[drop.selectedIndex].text;
//console.log(value);
//console.log(text);
//console.log(drop.selectedIndex);
console.log(dataset);



var fixedDataSet = new Array();
var variableDataSet = new Array();

    for(i = 0; i < dataset.length;i++) {
     if(dataset[i].CostSuperType == "Variable Costs") {
        variableDataSet.push(dataset[i]);

      }
      else {
        fixedDataSet.push(dataset[i]);
      }
    }

console.log(fixedDataSet);
console.log(variableDataSet);
var svg = d3.select("svg"),
    margin = {top: 20, right: 20, bottom: 30, left: 60},
    width = +svg.attr("width") - margin.left - margin.right,
    height = +svg.attr("height") - margin.top - margin.bottom,
    g = svg.append("g").attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var sumVariable = 0;
for(i = 0; i < variableDataSet.length; i++) {

   sumVariable += variableDataSet[i].CostYear;
}

console.log(sumVariable);

    var sumFixed = 0

for(i = 0; i < fixedDataSet.length; i++) {

   sumFixed += fixedDataSet[i].CostYear;
}
//console.log(sumFixed);
//console.log((sumFixed + sumVariable) * 10);
var y = d3.scaleLinear()
    y.domain([0, (sumFixed + sumVariable)*5])
    .rangeRound([height, 0]);




var variableRange = new Array();

var fixedLine = d3.line()
    .x(function (d) {return d.x;})
    .y(function (d) {return d.y;});

var productLine = d3.line()
    .x(function (d) {return d.x;})
    .y(function (d) {return d.y;});
//var x = d3.scaleLinear();

  console.log("here");
  //x.domain(d3.extent(percent, function(d) { return d.Max;}));
  /*var axisScale = d3.scaleLinear()
                         .domain([0,100])
                         .range([0,width]);*/
var x = d3.scaleLinear()
    .domain([0,numProd])
    .rangeRound([0, width]);

    var variableRange = new Array();
    var productRange = new Array();
    var fixedRange = new Array();
for(i = 0; i < numProd; i++) {
        var set = new Object();
        set.x = x(i);
        set.y = y(prodCost[0].sumpiececost*i + sumFixed);
        variableRange.push(set);
        var set = new Object();
        set.x = x(i);
        set.y = y(productPrice[0].PriceRetail*i);
       // console.log(i);
        //console.log(productPrice[0].PriceRetail*i);
        //console.log(set);
        productRange.push(set);
        var set = new Object();
        set.x = x(i);
        set.y = y(sumFixed);
        //console.log(set);
        //num+=1;

        fixedRange.push(set);
    }
    console.log(fixedRange);

var variableLine = d3.line()
    .x(function (d) {return d.x;})
    .y(function (d) {return d.y;});





  console.log("downhere");
  g.append("g")
      .attr("id", "xAxis")
      .attr("transform", "translate(0," + height + ")")
      .call(d3.axisBottom(x))
    .append("text")
      .attr("fill", "#000")
      .attr("x", width)
      .attr("dy", "-0.71em")
      .attr("text-anchor", "end")
      .text("% Production");
    //.select(".domain")
      //.remove();

  g.append("g")
  .attr("id", "yAxis")
      .call(d3.axisLeft(y))
    .append("text")
      .attr("fill", "#000")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", "0.71em")
      .attr("text-anchor", "end")
      .text("Money (Baht)");

  g.append("path")
      .attr("id", "fixedLine")
      .datum(fixedRange)
      .attr("fill", "none")
      .attr("stroke", "red")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", fixedLine);

    g.append("path")
      .attr("id", "productLine")
      .datum(productRange)
      .attr("fill", "none")
      .attr("stroke", "green")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", productLine);

  g.append("path")
      .attr("id", "variableLine")
      .datum(variableRange)
      .attr("fill", "none")
      .attr("stroke", "red")
      .attr("stroke-linejoin", "round")
      .attr("stroke-linecap", "round")
      .attr("stroke-width", 1.5)
      .attr("d", variableLine);

      console.log("submit");

}
