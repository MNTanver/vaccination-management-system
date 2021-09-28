<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/dbconfig.php';

$student_query = "SELECT student_vaccination_dose , COUNT(*) number FROM student_registration GROUP BY student_vaccination_dose";
$student_query_run = mysqli_query($connection, $student_query);

$stuff_query = "SELECT stuff_vaccination_dose , COUNT(*) number FROM stuff_registration GROUP BY stuff_vaccination_dose";
$stuff_query_run = mysqli_query($connection, $stuff_query);

$teacher_query = "SELECT teacher_vaccination_dose , COUNT(*) number FROM teacher_registration GROUP BY teacher_vaccination_dose";
$teacher_query_run = mysqli_query($connection, $teacher_query);
?>

<body>
  <div class="card">
   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 <!--
<script type="text/javascript" src="assets/js/loader.js"></script>  -->
    <script type="text/javascript">
      google.charts.load("current", {
        packages: ["corechart"]
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {


        var data = google.visualization.arrayToDataTable([
          ['student_vaccination_dose', 'number'],
          <?php
          while ($row = mysqli_fetch_array($student_query_run)) {
            echo "['" . $row["student_vaccination_dose"] . "', " . $row["number"] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'Total Vaccinated Student list',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('student_piechart_3d'));
        chart.draw(data, options);
        

      /**************stuff pie chart start******************** */

      var stuff_data = google.visualization.arrayToDataTable([
          ['stuff_vaccination_dose', 'number'],
          <?php
          while ($row = mysqli_fetch_array($stuff_query_run)) {
            echo "['" . $row["stuff_vaccination_dose"] . "', " . $row["number"] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'Total Vaccinated Stuff list',
          is3D: true,
        };

        var stuff_chart = new google.visualization.PieChart(document.getElementById('stuff_piechart_3d'));
        stuff_chart.draw(stuff_data, options);

        /**************stuff pie chart end******************** */

        /**************teacher pie chart start******************** */

      
      var teacher_data = google.visualization.arrayToDataTable([
          ['teacher_vaccination_dose', 'number'],
          <?php
          while ($row = mysqli_fetch_array($teacher_query_run)) {
            echo "['" . $row["teacher_vaccination_dose"] . "', " . $row["number"] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'Total Vaccinated teacher list',
          is3D: true,
        };

        var teacher_chart = new google.visualization.PieChart(document.getElementById('teacher_piechart_3d'));
        teacher_chart.draw(teacher_data, options);

        /**************teacher pie chart end******************** */
        
    }
    </script>
    </head>
      <div class="row">
          <div id="student_piechart_3d" class="col-sm-4"style="width: 900px; height: 500px;"></div>
          
          <div id="stuff_piechart_3d" class="col-sm-4" style="width: 900px; height: 500px;"></div>

          <div id="teacher_piechart_3d" class="col-sm-4" style="width: 900px; height: 500px;"></div>
      </div>
      
<?php include 'includes/footer.php';  ?>