<!DOCTYPE html>
<html>
  <head>
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="Chart.bundle.js"></script>
  <script src="utils.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

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

      <style>
      body { padding-top:20px; }
      .panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
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

        var chart8 = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart8.draw(data, options);
      }
    </script>
  </head>
  <body>



  <div style="width: 75%">
    <canvas id="canvas"></canvas>
  </div>
    <div align="center" id="container" style="width: 30%; height: 30%"></div>

    <br>
    <br>

    <br>
    <br>

    <br>
    <br>

    <br>
    <br>
    <br>
    <br>



    <h3 align="center">Line graph describing the increase in the number of donors</h3>

  <div id="chart_div"></div>

    <img id="myImg" src="/images/x.png" style="width:60%;  !important; height:60% !important;">
        <img id="myImg1" src="/images/a.png" style="width:40%;  !important; height:50% !important;">

  <!-- snippet -->
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Quick Shortcuts</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Apps</a>
                          <a href="#" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Bookmarks</a>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Reports</a>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Comments</a>
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
                          <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Notes</a>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Photos</a>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a>
                        </div>
                    </div>
                    <a href="http://www.jquery2dotnet.com/" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>
                </div>
            </div>
        </div>
    </div>
</div>

      </body>
    <script>
        <!-- chart code will be here -->
       


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
  
</html>