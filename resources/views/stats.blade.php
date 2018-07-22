<!DOCTYPE html>
<html>
   <head>
      
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/releases/8.3.0/js/anychart-bundle.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-base.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
      
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="Chart.bundle.js"></script>
      
      <script src="utils.js"></script>
      <style>
         canvas {
         -moz-user-select: none;
         -webkit-user-select: none;
         -ms-user-select: none;
         }
      </style>
      <style type="text/css">
         html, body, #container {
         width: 100%;
         height: 100%;
         margin: 0;
         padding: 0;
         }
      </style>
      <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
         
         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ['Age', 'Weight'],
             [ 8,      12],
             [ 4,      5.5],
             [ 11,     14],
             [ 4,      5],
             [ 3,      3.5],
             [ 6.5,    7]
           ]);
         
           var options = {
             title: 'Age vs. Weight comparison',
             hAxis: {title: 'Age', minValue: 0, maxValue: 15},
             vAxis: {title: 'Weight', minValue: 0, maxValue: 15},
             legend: 'none'
           };
         
           var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
         
           chart.draw(data, options);
         }
      </script>
   </head>
   <body>
      <div style="width: 75%">
         <canvas id="canvas"></canvas>
      </div>
      <div align="center" id="container" style="width: 30%; height: 30%"></div>
      
      <h3 align="center">Line graph describing the increase in the number of donors</h3>
      <div id="chart_div"></div>
      </head>
      <body>
         <div style="width:75%">
            <canvas id="canvas"></canvas>
         </div>
         <div align="center" id="chart_div" style="width: 900px; height: 500px;"></div>
   </body>
   <script>
      <!-- chart code will be here -->
      var data1 = [
      {x: "Science", value: 223553265},
      {x: "Commerce", value: 38929319},
      {x: "Others", value: 29322480},
      
      ];
      var data2 = [
      {x: "Male", value: 223553265},
      {x: "Female", value: 38929319},
      
      ];
      
      
      anychart.onDocumentReady(function() {
      
      // set the data
      var data1 = [
      {x: "Science", value: 223553265},
      {x: "Commerce", value: 38929319},
      {x: "Others", value: 29322480},
      
      ];
      
      var data2 = [
      {x: "Male", value: 223553265},
      {x: "Female", value: 38929319},
      
      ];
      var data3 = anychart.data.set([
      ["Year1", 3.8, 5.5, 6.9],
      ["Year2", 5.5, 7.0, 9.6],
      ["Year3", 9.9, 9.7, 8.3],
      ["Year4", 5.7, 7.6, 9.7]
      ]);
      
      // map the data
      var seriesData_1 = data3.mapAs({x: 0, value: 1});
      var seriesData_2 = data3.mapAs({x: 0, value: 2});
      var seriesData_3 = data3.mapAs({x: 0, value: 3});
      
      // create a chart
      var chart2 = anychart.column();
      
      /* enable the value stacking mode
      on the default primary value scale*/
      chart2.yScale().stackMode("value");
      
      // create column series
      chart2.column(seriesData_1);
      chart2.column(seriesData_2);
      chart2.column(seriesData_3);
      
      // create the chart
      var chart = anychart.pie();
      var chart1 = anychart.pie();
      
      // set the chart title
      chart.title("Category wise donation disbursement");
      chart1.title("Gender wise donation disbursement");
      
      // add the data
      chart.data(data1);
      chart1.data(data2);
      
      // display the chart in the container
      chart.container('container');
      chart.draw();
      chart1.container('container');
      chart1.draw();
      chart2.title("Stacked Chart: Value Mode");
      chart2.container("container");
      chart2.draw();
      
      });
      
      
      
      
      
   </script>
</html>