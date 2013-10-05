google.load('visualization', '1', {packages: ['corechart']});

$(document).ready(function(){

  // Turn tooltips on
  //$('.tooltip').tooltip(); 
  
  google.setOnLoadCallback(getData);

  $('.rij.facts').click(function(e){
    $('.rij.facts').show(); 
    $('.rij.figures').hide(); 
  }); 
  $('.rij.figures').click(function(e){
    $('.rij.figures').hide(); 
    $('.rij.figures').show(); 
  })

});

function getData(){
  
  $.getJSON('factsfigures/data.json',{}).done(function(data) {
    console.log('data loaded');
    drawCharts(data);
  }).fail(function () { console.log("failure.")});
}

var chartDiv;
var drawChartDiv;

function drawCharts(data) {
  // for each node in data create a chart
  $.each(data.graphs, function( key, value ) {

    var chartData = new google.visualization.DataTable(value.data);
    // make the chart
    var options = {'width':300, 'height':250};

    // add info to DOM (title, desc, url etc)

    chartDiv = $("#chart-" + (key+1));
    //Update title information
    chartDiv.find("h4").html(value.title);
    //Update description information
    chartDiv.find("p").html(value.description);

    //Find the link and set to url if exists (hide otherwise)
    var tooltips = chartDiv.find(".tooltip");
    var link = tooltips.first();
    if(value.url === undefined)
    {
        link.hide();
    }
    else
    {   
        link.attr("href",value.url);
    }
    //Hide the 'more information' link
    tooltips.eq(1).hide();

    var chartType = value['chart-type'];
    var chart;

    drawChartDiv = $(chartDiv).find(".graph");

    if(chartType == 'BarChart')
      chart = new google.visualization.BarChart(drawChartDiv[0]);
    else if(chartType == 'linechart')
      chart = new google.visualization.LineChart(drawChartDiv[0]);
    else if(chartType == 'piechart')
      chart = new google.visualization.PieChart(drawChartDiv[0]);
    else 
      console.log("error: unrecognized chart type " + chartType);
    chart.draw(chartData, {width: 400, height: 240});
    // add to DOM object

  });
  

  // test
  /*
  var dt = new google.visualization.DataTable({
    cols: [
      {id: 'task', label: 'Task', type: 'string'},
      {id: 'hours', label: 'Hours per Day', type: 'number'}],
    rows: [
      {c:[
        {v: 'Work'}, {v: 11}]},
        {c:[{v: 'Eat'}, {v: 2}]},
        {c:[{v: 'Commute'}, {v: 2}]},
        {c:[{v: 'Watch TV'}, {v:2}]},
        {c:[{v: 'Sleep'}, {v:7, f:'7.000'}]}
      ]
  },0.6);
  // Set chart options
  var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
  chart.draw(dt, options);
  */
}