<!DOCTYPE html>
<html>
  <head>
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/releases/8.3.0/js/anychart-bundle.min.js"></script>
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
  var data2 = anychart.data.set([
      ["Year1", 3.8, 5.5, 6.9],
      ["Year2", 5.5, 7.0, 9.6],
      ["Year3", 9.9, 9.7, 8.3],
      ["Year4", 5.7, 7.6, 9.7]
    ]);

    // map the data
    var seriesData_1 = data2.mapAs({x: 0, value: 1});
    var seriesData_2 = data2.mapAs({x: 0, value: 2});
    var seriesData_3 = data2.mapAs({x: 0, value: 3});

    // create a chart
    var chart2 = anychart.column();

    /* enable the value stacking mode
    on the default primary value scale*/
    chart2.yScale().stackMode("value");

    // create column series
    chart2.column(seriesData_1);
    chart2.column(seriesData_2);
    chart2.column(seriesData_3);

    // set the chart title
    


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
  chart2.title("Stacked Chart: Value Mode");

    // set the container id
    chart2.container("container");

    // initiate drawing the chart
    chart2.draw();
});
    </script>
  </body>
</html>