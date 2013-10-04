google.load('visualization', '1', {packages: ['corechart']});

$(document).ready(function(){

  // Turn tooltips on
  //$('.tooltip').tooltip(); 
  console.log('document ready'); 
  google.setOnLoadCallback(getData);

});

function getData(){
  console.log('google loaded'); 

  $.getJSON('factsfigures/data.json',{}).done(function(data) {
    console.log('data loaded'); 
    drawCharts(data);
  });
}

function drawCharts(data) {
  console.log('starting drawcharts');
  console.log(data);

  // for each node in data
  // Create a chart
    // process data
    // make the chart
    // add info to DOM (title, desc, url etc)
    // add to DOM object

  var d = new google.visualization.DataTable();
  console.log(d);
  //var datatable = new google.visualization.dataTable();


  /*
  var dt = new localGoogle.visualization.DataTable({
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
*/
  //console.log(d);

  // Set chart options
  var options = {'width':300, 'height':250};

  console.log('starting drawcharts');
  console.log(data);

  var options = {'width':300, 'height':250};

  // for each node in data
  // Create a chart
    // process data
    // make the chart
    // add info to DOM (title, desc, url etc)
    // add to DOM object

  var d = new google.visualization.DataTable();
  //var datatable = new google.visualization.dataTable();


  
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

  console.log(dt);

  // Set chart options
  var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
  chart.draw(dt, options);

}