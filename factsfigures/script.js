google.load('visualization', '1', {packages: ['corechart']});

$(document).ready(function(){

  // Turn tooltips on
  //$('.tooltip').tooltip(); 
  
  google.setOnLoadCallback(getData);

});

function getData(){
  
  $.getJSON('http://www.duurzaamdenhaag.nl/wp-content/uploads/data.json',{}).done(function(data) {
    console.log('data loaded');
    drawCharts(data);
  });
}

function drawCharts(data) {
  // for each node in data create a chart
  $.each(data, function( key, value ) {
    console.log( key + ": " + JSON.stringify(value));
    // process data
    
    // make the chart
    var options = {'width':300, 'height':250};

    // add info to DOM (title, desc, url etc)
    
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