var data;

google.load('visualization', '1', {packages: ['corechart']});

$(document).ready(function(){

  $('.rij.facts').show();
  $('.rij.figures').hide();

  google.setOnLoadCallback(getData);

  $('ul.nav-tabs .facts').click(function(e){
    $('.rij.facts').show();
    $('.rij.figures').hide();
    $('ul li.figures').removeClass('active'); 
    $('ul li.facts').addClass('active');
  });
  $('ul.nav-tabs .figures').click(function(e){
    $('.rij.facts').hide();
    $('.rij.figures').show();
    $('ul li.facts').removeClass('active');
    $('ul li.figures').addClass('active');
  });

});

function getData(){
  var url = 'http://www.duurzaamdenhaag.nl/wp-content/uploads/data.json';
  url = 'factsfigures/data.json';
  $.getJSON(url,{}).done(function(d) {
    //console.log(data);
    data=d;
    drawCharts(data);
  });
}

var dataPart;
function showModal(i,element){
  //var e=data[i];
  //console.log(e);
  dataPart = data.graphs[i];

  //console.log(i); 
  //console.log(dataPart);
  //console.log(element);
  // console.log(dataPart["source"]);
  // console.log(dataPart["info"]);
  // change text in modal
  var infoModal = $("#infoModal");
  infoModal.find(".modal-header h3").html(element);
  infoModal.find(".modal-body").first().html(dataPart[element]);
  infoModal.modal();
}

function hideModal() {
    $('#infoModal').modal('hide');
}

function drawCharts(data) {
  // for each node in data create a chart
  $.each(data.graphs, function( key, value ) {

    var chartData = new google.visualization.DataTable(value.data);
    // make the chart
    var options = {'width':'100%', 'height':240};
    var options = { 
      'width':'100%', 
      'height':240,  
      series: [{color: 'blue', visibleInLegend: true}, {color: 'red', visibleInLegend: false}]
    };
    // add info to DOM (title, desc, url etc)

    chartDiv = $("#chart-" + (key+1));
    //Update title information
    chartDiv.find("h4").html(value.title);
    //Update description information
    chartDiv.find("p").html(value.description);

    //Find the link and set to url if exists (hide otherwise)
    var tooltips = chartDiv.find(".tooltip");
    var link = tooltips.first();

    var id=chartDiv.find('.source');
    id.attr("onclick","javascript:showModal(" + key + ",\"source\")");
    id.attr("href","#infoModal");

    //Set the 'more information' link
    var moreInfo = chartDiv.find('.info');
    moreInfo.attr("onclick","javascript:showModal(" + key + ",\"info\")");
    moreInfo.attr("href","#infoModal");

    var chartType = value['chart-type'];
    var chart;

    drawChartDiv = $(chartDiv).find(".graph");

    if(chartType == 'BarChart') {
      chart = new google.visualization.BarChart(drawChartDiv[0]);
    } else if(chartType == 'linechart') {
      chart = new google.visualization.LineChart(drawChartDiv[0]);
    } else if(chartType == 'piechart') {
      chart = new google.visualization.PieChart(drawChartDiv[0]);
    } else {
      //console.log("error: unrecognized chart type " + chartType);
    }
      //console.log("error: unrecognized chart type " + chartType);
    chart.draw(chartData, options);
    // add to DOM object

  });
}