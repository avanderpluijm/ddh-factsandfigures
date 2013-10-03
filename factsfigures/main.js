

$(document).ready(function(){

  // Turn tooltips on
  $('.tooltip').tooltip();

  $.getJSON('data.json', function(json) {
    data = this.json;

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});
    //google.setOnLoadCallback(drawCharts);
    
    //google.setOnLoadCallback(drawRegionsMap);
  });
});


// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawCharts(data) {
  
  //console.log(this.data[0].data);
  // Chart: Autobezit Den Haag
  //var d = new google.visualization.dataTable(this.data[0].data);

  var dt = new google.visualization.DataTable(
     {
       cols: [{id: 'task', label: 'Task', type: 'string'},
                {id: 'hours', label: 'Hours per Day', type: 'number'}],
       rows: [{c:[{v: 'Work'}, {v: 11}]},
              {c:[{v: 'Eat'}, {v: 2}]},
              {c:[{v: 'Commute'}, {v: 2}]},
              {c:[{v: 'Watch TV'}, {v:2}]},
              {c:[{v: 'Sleep'}, {v:7, f:'7.000'}]}
             ]
     },
   0.6
  );

  //console.log(d);

  // Set chart options
  var options = {'width':300, 'height':250};

  // Instantiate and draw our chart, passing in some options.
  //var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
  //console.log(this.data[0].data);
  //chart.draw(dt, options);

  
 /*
  var options2 = {'title': 'Vervoerskeuze Den Haag   2011', 'width':300, 'height':250};  
  var data2 = google.visualization.arrayToDataTable([
    ['Vervoerskeuze', 'Aandeel'],
    ['OV',  14],
    ['Fiets/bromfiets/snorfiets',  20],
    ['Auto',  36],
    ['Lopend',  30]
  ]);
  var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
  chart2.draw(data2, options2);

  
  



  

  var options2 = {
    title: 'Company Performance',
    hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
  };


var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
  chart.draw(data, options);
  var chart = new google.visualization.PieChart(document.getElementById('chart_div5'));
  chart.draw(data, options);
*/
  
}


        
     

function drawRegionsMap() {
  var data = google.visualization.arrayToDataTable([
    ['Country', 'Popularity'],
    ['Germany', 200],
    ['United States', 300],
    ['Brazil', 400],
    ['Canada', 500],
    ['France', 600],
    ['RU', 700]
  ]);

  var options = {};

  var chart = new google.visualization.GeoChart(document.getElementById('chart_div3'));
  chart.draw(data, options);
};
