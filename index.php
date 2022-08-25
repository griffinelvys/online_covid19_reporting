<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<?php include("connection.php"); ?>

        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
          <?php include ("connection.php");
          $result = mysqli_query($con,"SELECT * FROM  page_visits");

          while($row = mysqli_fetch_array($result)) {

              $Visitors = $row['homepage'];
              $product = $row['product'];
              $cart = $row['cart'];
              $payment = $row['payment'];
              $completed = $row['completed'];
            }
            $did_not_complete = $Visitors -$completed;
            ?>

      <div class="row">
      <h3 class="text-center text-info">Covid 19 Statistics</h3>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Total Number of People</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent"><?php echo $Visitors;?></span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>People who tested Positive</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent"><?php echo $completed;?></span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>People who tested Negative</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent"><?php echo $did_not_complete;?></span></div>
          </div>
        </div>
      </div>
    </div>


      <div>
            <canvas id="pieChart" style="max-width: 500px; margin:auto;" ></canvas>

            <script type="text/javascript">
                var ctxP = document.getElementById("pieChart").getContext('2d');
                    var myPieChart = new Chart(ctxP, {
                      type: 'line',
                      data: {
                        title: "COVID 19 STATISTICS",
                        labels: ["Positive", "Negative", "Not Tested"],
                        datasets: [{
                          data: [<?php echo $completed;?>, <?php echo $did_not_complete;?>, <?php echo $Visitors;?>],
                          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                        }]
                      },
                      options: {
                        responsive: true
                      }
                    });
            </script>
          </div>

 </div>

    <?php include("footer.php"); ?>
