'use strict';

$(document).ready(function(){

  // Turn tooltips on
  //$('.tooltip').tooltip();

  $.getJSON('http://www.duurzaamdenhaag.nl/wp-content/uploads/data.json',{}).done(function(data) {
    console.log(data);
    // Load the Visualization API and the piechart package.
    //google.load('visualization', '1.0', {'packages':['corechart']});
    //google.setOnLoadCallback(drawCharts);
    
    //google.setOnLoadCallback(drawRegionsMap);
  });
});

function drawCharts(data) {
  
  //console.log(this.data[0].data);
  // Chart: Autobezit Den Haag
  //var d = new google.visualization.dataTable(this.data[0].data);

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

  //console.log(d);

  // Set chart options
  var options = {'width':300, 'height':250};
}