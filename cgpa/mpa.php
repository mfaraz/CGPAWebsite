<?php

require_once("classes/Start.php");
require_once("classes/MPA.class.php");

$MyClass = new MPA($MessageLog, false);
$MyClass->GetRecordByID($MessageLog, $db);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CGPA - Legislator's Performance Check</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="libs/font-awesome/4.5.0/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="libs/ionicons/2.0.1/css/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="skin-cgpa layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><b>CGPA</b> Website</a>
        </div>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="fa messages-menu">
              <!-- Menu toggle button -->
              <a href="#">
                <i class="fa fa-home"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-widget widget-page">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-page-header bg-gray-light">
              <h3 class="widget-page-title">Legislator's Performance Check</h3>
              <h5 class="widget-page-desc">See how the legislator has done during the tenure</h5>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <h3 class="widget-user-username"><?php echo $MyClass->m_txtName ?></h3>
              <h5 class="widget-user-desc"><?php echo $MyClass->m_txtDescription ?></h5>
            </div>
            <div class="widget-user-image">
              <img src="img/defaults/profile_image_none.png" alt="<?php echo $MyClass->m_txtName ?>">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <img src="img/party/pti.png" alt="<?php echo $MyClass->m_txtPartyLongName ?>">
                    <span class="description-text"><?php echo $MyClass->m_txtPartyLongName ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <span class="description-text"><?php echo $MyClass->m_txtConstituencyID ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <span class="description-text">SOMETHING HERE</span>
                    <br />
                    <span class="description-text">DATE HERE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>

        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-8 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Attendance Record</span>
              <span class="info-box-number">
<?php
                echo ($MyClass->m_txtTotalPresents + $MyClass->m_txtTotalApplications)
                      . "/"
                      . ($MyClass->m_txtTotalPresents + $MyClass->m_txtTotalApplications + $MyClass->m_txtTotalAbsents)
?>
              </span>
              <div class="progress">
                <div class="progress-bar" style="width: 62%"></div>
              </div>
                  <span class="progress-description">
                    62% Percent
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box">
              <canvas id="pieChart">
              </canvas>
            <!-- /.box-body -->
          </div>
          <div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Committee Memberships</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Member Since</th>
                  <th>Committee</th>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-8 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Resolution Participation</span>
              <span class="info-box-number">17/232</span>

              <div class="progress">
                <div class="progress-bar" style="width: 7%"></div>
              </div>
                  <span class="progress-description">
                    7% Percent
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <!-- /.info-box -->
          <div class="info-box">
            <canvas id="barChart">
            <canvas>
            <!-- /.box-body -->
          </div>

          <div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Key Resolutions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Resolution</th>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-8 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Question Participation</span>
              <span class="info-box-number">19/83</span>

              <div class="progress">
                <div class="progress-bar" style="width: 23%"></div>
              </div>
                  <span class="progress-description">
                    23% Percent
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <!-- /.info-box -->
          <div class="info-box">
            <canvas id="barChart2">
            <canvas>
            <!-- /.box-body -->
          </div>
          <div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Key Questions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Date</th>
                  <th>Question</th>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>11&nbsp;Jul&nbsp;2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        All rights reserved.
      </div>
      Copyright &copy; 2014-2016 CGPA.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="libs/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="libs/chartjs/Chart.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     */

    //-------------
    //- GLOBALS -
    //-------------
    // Common settings for all graphs on this page
    var GRAPH_HEIGHT = 170;

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    pieChartCanvas.canvas.height = GRAPH_HEIGHT;

<?php echo ($MyClass->m_txtTotalPresents + $MyClass->m_txtTotalApplications)
                      . "/"
                      . ($MyClass->m_txtTotalPresents + $MyClass->m_txtTotalApplications + $MyClass->m_txtTotalAbsents)
?>

    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: <?php echo ($MyClass->m_txtTotalAbsents) ?>,
        color: "#e34040",
        highlight: "#e34040",
        label: "Absent"
      },
      {
        value: <?php echo ($MyClass->m_txtTotalPresents) ?>,
        color: "#0099c1",
        highlight: "#0099c1",
        label: "Present",
      },
      {
        value: <?php echo ($MyClass->m_txtTotalApplications) ?>,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "Applications"
      }
    ];

  

    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",

      onAnimationComplete: function()
      {
          this.showTooltip(this.segments, true);
      },
  
      tooltipEvents: [],
  
      showTooltips: true,
      tooltipFillColor: "rgba(0,0,0,0.6)",
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);


    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Resolutions",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Participation",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 23, 27, 30]
        }
      ]
    };


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    barChartCanvas.canvas.height = GRAPH_HEIGHT;

    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);


    //-------------
    //- BAR2 CHART -
    //-------------
    var barChartCanvas2 = $("#barChart2").get(0).getContext("2d");
    barChartCanvas2.canvas.height = GRAPH_HEIGHT;

    var barChart2 = new Chart(barChartCanvas2);
    var barChartData2 = areaChartData;
    barChartData.datasets[1].fillColor = "#f39c12";
    barChartData.datasets[1].strokeColor = "#f39c12";
    barChartData.datasets[1].pointColor = "#f39c12";

    barChartOptions.datasetFill = false;
    barChart2.Bar(barChartData2, barChartOptions);
  });
</script>
</body>
</html>