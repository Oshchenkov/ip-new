<!doctype html>
<html lang="en">
  <head>
    <?php include('inc/head-common.php'); //Common head elements ?>

    <title>iPlanner - Home</title>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Risk Profile', 'Data'],
          ['Balanced',     50],
          ['Adventurous',      5],
          ['Progressive',  20],
          ['Cautious', 20],
          ['Conservative',    10]
        ]);

        var options = {
          'backgroundColor':'FAFAFA',
          'chartArea':{width:'90%',height:'90%'},
          'colors':['A6D2E9','#BCCDD4','A19548','2F5F75','53595A'],
          'legend':'none',
          'pieSliceText':'none',
          pieHole: 0.7
        };

        var chart = new google.visualization.PieChart(document.getElementById('riskprofile'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Account Type', 'Data'],
          ['Multi Assets',     40],
          ['Passive',      15],
          ['Individual Equity',  5],
          ['Absolute Return', 20],
          ['Traditional Equity &amp; Bond',    20]
        ]);

        var options = {
          'backgroundColor':'FAFAFA',
          'chartArea':{width:'90%',height:'90%'},
          'colors':['A6D2E9','#BCCDD4','A19548','2F5F75','53595A'],
          'legend':'none',
          'pieSliceText':'none',
          pieHole: 0.7
        };

        var chart = new google.visualization.PieChart(document.getElementById('accounttype'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Risk Profile', 'Data'],
          ['Balanced',     10],
          ['Adventurous',      25],
          ['Progressive',  5],
          ['Cautious', 30],
          ['Conservative',    30]
        ]);

        var options = {
          'backgroundColor':'FAFAFA',
          'chartArea':{width:'90%',height:'90%'},
          'colors':['A6D2E9','#BCCDD4','A19548','2F5F75','53595A'],
          'legend':'none',
          'pieSliceText':'none',
          pieHole: 0.7
        };

        var chart = new google.visualization.PieChart(document.getElementById('portfoliostrategy'));
        chart.draw(data, options);
      }
    </script>

    <!-- Custom styles for this page -->
    <link href="css/limelight.css?ver=<?php echo rand(); ?>" rel="stylesheet">
  </head>

  <body>
    <?php include('inc/header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row">
        <article id="content" class="col-md-9">
          <div class="summary row mb-5">
            <div class="col pr-1">
              <div class="card">
                <div class="card-header text-center small">
                  Current No.<br> of Clients
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center py-5">
                    <div class="data mb-1">58</div>
                    <div class="info small">Completed</div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col px-1">
              <div class="card">
                <div class="card-header text-center small">
                  Investors<br> Due Review
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center py-5">
                    <div class="data mb-1">11</div>
                    <div class="info small">Within week</div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col px-1">
              <div class="card">
                <div class="card-header text-center small">
                  Av. Client<br> Risk Score
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center py-5">
                    <div class="data mb-1">65</div>
                    <div class="info small">Balanced</div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col pl-1">
              <div class="card">
                <div class="card-header text-center small">
                  By<br> Objective
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center py-5">
                    <div class="data mb-1">31/69%</div>
                    <div class="info small">Income/Growth</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="heading">Client Distribution</div>
            </div>
          </div>
          <div class="graphs row mb-4">
            <div class="col pr-1">
              <div class="graph card p-4">
                <div class="title small mb-3">
                  By Risk Profile:
                </div>
                <div class="graph mb-3">
                  <div id="riskprofile"></div>
                </div>
                <div class="legend small">
                  <div class="legend-item small">
                    <span class="key sky"></span>
                    <span class="value">Balanced-50%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smog"></span>
                    <span class="value">Adventurous-5%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key clay"></span>
                    <span class="value">Progressive-15%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key teal"></span>
                    <span class="value">Cautious-20%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smoke"></span>
                    <span class="value">Conservative-10%</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col px-1">
              <div class="graph card p-4">
                <div class="title small mb-3">
                  By Account Type:
                </div>
                <div class="graph mb-3">
                  <div id="accounttype"></div>
                </div>
                <div class="legend small">
                  <div class="legend-item small">
                    <span class="key sky"></span>
                    <span class="value">Multi Assets-40%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smog"></span>
                    <span class="value">Passive-15%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key clay"></span>
                    <span class="value">Individual Equity-5%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key teal"></span>
                    <span class="value">Absolute Return-20%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smoke"></span>
                    <span class="value">Traditional Equity &amp; Bond-20%</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col pl-1">
              <div class="graph card p-4">
                <div class="title small mb-3">
                  By Portfolio Strategy:
                </div>
                <div class="graph mb-3">
                  <div id="portfoliostrategy"></div>
                </div>
                <div class="legend small">
                  <div class="legend-item small">
                    <span class="key sky"></span>
                    <span class="value">Balanced-10%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smog"></span>
                    <span class="value">Adventurous-25%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key clay"></span>
                    <span class="value">Progressive-5%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key teal"></span>
                    <span class="value">Cautious-30%</span>
                  </div>
                  <div class="legend-item small">
                    <span class="key smoke"></span>
                    <span class="value">Conservative-30%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <?php include('inc/sb/limelight.php'); ?>

      </div>
    </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>
  </body>
</html>
