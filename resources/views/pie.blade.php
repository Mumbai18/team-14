<!DOCTYPE html>
<html>
  <head>
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
      <style type="text/css">
      	html, body, #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
      </style>
  </head>
  <body>
    <div id="container" style="width: 30%; height: 30%"></div>
    <script>
        <!-- chart code will be here -->
        var data = [
    {x: "Science", value: 223553265},
    {x: "Commerce", value: 38929319},
    {x: "Others", value: 29322480},
    
];
var data1 = [
    {x: "Male", value: 223553265},
    {x: "Female", value: 38929319},
    
];


anychart.onDocumentReady(function() {

  // set the data
  var data = [
      {x: "Science", value: 223553265},
      {x: "Commerce", value: 38929319},
      {x: "Others", value: 29322480},
      
  ];

var data1 = [
      {x: "Male", value: 223553265},
      {x: "Female", value: 38929319},
      
  ];

  // create the chart
  var chart = anychart.pie();
  var chart1 = anychart.pie();

  // set the chart title
  chart.title("Category wise donation disbursement");
  chart1.title("Gender wise donation disbursement");

  // add the data
  chart.data(data);
  chart1.data(data1);

  // display the chart in the container
  chart.container('container');
  chart.draw();
  chart1.container('container');
  chart1.draw();

});
    </script>
  </body>
</html>