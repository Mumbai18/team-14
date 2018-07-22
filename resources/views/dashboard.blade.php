<!DOCTYPE html>
<html>
  <head>
      <title>JavaScript Pie Chart</title>
      
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>

    <div class="container" style="background: #eee; margin: 0; margin-right: -20px">
      <div class="row">
        <div class="panel col-md-6" style="margin-left: 15px">
          <canvas class="col-md-12" id="canvas"></canvas>      
        </div>
        <div class="panel col-md-6">
          <div class="col-md-12" id="chart_div"></div>
        </div>
      </div>
      <div class="row">
        <div class="panel col-md-6">
          <img id="myImg" class="col-md-12" src="/images/x.png" />
        </div>
        <div class="panel col-md-6">
          <img id="myImg1" class="col-md-12" src="/images/a.png"/>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="Chart.bundle.js"></script>
  <script src="utils.js"></script>
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

        var chart8 = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart8.draw(data, options);
      }
    </script>

    <script>
      


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

 google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Donors');

     
      data.addRows([
        [0, 0],   [1, 40],  [2, 60],  [3, 73],  [4, 80],  [5, 98]
      ]);

      var options = {
        hAxis: {
          title: 'Years'
        },
        vAxis: {
          title: 'Number of donors'
        }
      };

      var chart7 = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart7.draw(data, options);
    }


    var color7 = Chart.helpers.color;
    Chart.scaleService.updateScaleDefaults('linear', {
    ticks: {
        min: 0
    }
    });
    var scatterChartData = {
      datasets: [{
        label: 'Average Family Income Over The Years',
        borderColor: window.chartColors.red,
        backgroundColor: color7(window.chartColors.red).alpha(0.2).rgbString(),
        data: [{
          x: 5,
          y: 20,
        }, {
          x: 7,
          y: 16,
        }, {
          x: 23,
          y: 27,
        }, {
          x: 27,
          y: 22,
        }, {
          x: 36,
          y: 29,
        }, {
          x: 46,
          y: 33,
        }, {
          x: 66,
          y: 36,
        }]
      }]
    };

    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myScatter = Chart.Scatter(ctx, {
        data: scatterChartData,
        options: {
          title: {
            display: true,
            text: 'Scatter Chart (values in 100s)'
          },
        }
      });
    };

    var barChartData = {
      labels: ['5', '10', '15', '20', '25', '30', '35'],
      datasets: [{
        label: 'Finance',
        backgroundColor: window.chartColors.red,
        data: [
          2,
          3,
          1,
          6,
          8,
          3,
          1
        ]
      }, {
        label: 'Academic',
        backgroundColor: window.chartColors.blue,
        data: [
          2,
          5,
          1,
          6,
          0,
          3,
          1
        ]
      }, {
        label: 'Extra curricular',
        backgroundColor: window.chartColors.green,
        data: [
         2,
          3,
          2,
          6,
          3,
          6,
          1
        ]
      },
      {
        label: 'Caste',
        backgroundColor: window.chartColors.yellow,
        data: [
          2,
          5,
          1,
          6,
          4,
          3,
          1
        ]
      }]

    };
    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          title: {
            display: true,
            text: 'Funds raised by donor types'
          },
          tooltips: {
            mode: 'index',
            intersect: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              stacked: true,
            }],
            yAxes: [{
              stacked: true
            }]
          }
        }
      });
    };

    
    </script>
      </body>
  
</html>