<?php
$dbconnect = new mysqli('localhost','root','','vm_migration');
echo $dbconnect->connect_error;
//cluster1
$query = "SELECT sum(max_cpu) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =1)";
$query1 = "SELECT sum(storage) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =1)";
$query2 = "SELECT sum(vm_memory) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =1)";
$w1 =  "SELECT storage from cluster_table where cluster_id =1 ";
$w2  = "SELECT total_memory from cluster_table where cluster_id =1 ";

//$res = $dbconnect-> query($query);
$res = mysqli_query($dbconnect,$query);
$res1 = mysqli_query($dbconnect,$query1);
$res2 = mysqli_query($dbconnect,$query2);
$rw1 = mysqli_query($dbconnect,$w1);
$rw2 = mysqli_query($dbconnect,$w2);



$row = mysqli_fetch_assoc($res);
 $row1 = mysqli_fetch_assoc($res1);
  $row2 = mysqli_fetch_assoc($res2);
  $rs1 =  mysqli_fetch_assoc($rw1);
  $rs2 =  mysqli_fetch_assoc($rw2);
  

 //echo $row["vm_id"];

 //cluster2
 $query3 = "SELECT sum(max_cpu) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =2)";
$query4 = "SELECT sum(storage) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =2)";
$query5 = "SELECT sum(vm_memory) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =2)";
$w3 =  "SELECT storage from cluster_table where cluster_id =2 ";
$w4  = "SELECT total_memory from cluster_table where cluster_id =2 ";

//$res = $dbconnect-> query($query);
$res3 = mysqli_query($dbconnect,$query3);
$res4 = mysqli_query($dbconnect,$query4);
$res5 = mysqli_query($dbconnect,$query5);
$rw3 = mysqli_query($dbconnect,$w3);
$rw4 = mysqli_query($dbconnect,$w4);




$row3 = mysqli_fetch_assoc($res3);
 $row4 = mysqli_fetch_assoc($res4);
  $row5 = mysqli_fetch_assoc($res5);
   $rs3 =  mysqli_fetch_assoc($rw3);
  $rs4 =  mysqli_fetch_assoc($rw4);

  //cluster3
 $query6 = "SELECT sum(max_cpu) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =3)";
$query7 = "SELECT sum(storage) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =3)";
$query8 = "SELECT sum(vm_memory) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =3)";
$w5 =  "SELECT storage from cluster_table where cluster_id =3";
$w6  = "SELECT total_memory from cluster_table where cluster_id =3 ";
//cluster4
$query9 = "SELECT sum(max_cpu) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =4)";
$query10 = "SELECT sum(storage) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =4)";
$query11 = "SELECT sum(vm_memory) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =4)";
$w7 =  "SELECT storage from cluster_table where cluster_id =4";
$w8  = "SELECT total_memory from cluster_table where cluster_id =4 ";


//$res = $dbconnect-> query($query);
$res6 = mysqli_query($dbconnect,$query6);
$res7 = mysqli_query($dbconnect,$query7);
$res8 = mysqli_query($dbconnect,$query8);
$rw5 = mysqli_query($dbconnect,$w5);
$rw6 = mysqli_query($dbconnect,$w6);





$res9 = mysqli_query($dbconnect,$query9);
$res10 = mysqli_query($dbconnect,$query10);
$res11 = mysqli_query($dbconnect,$query11);
$rw7 = mysqli_query($dbconnect,$w7);
$rw8 = mysqli_query($dbconnect,$w8);



$row6 = mysqli_fetch_assoc($res6);
$row7 = mysqli_fetch_assoc($res7);
$row8 = mysqli_fetch_assoc($res8);
 $rs5 =  mysqli_fetch_assoc($rw5);
  $rs6 =  mysqli_fetch_assoc($rw6);



$row9 = mysqli_fetch_assoc($res9);
$row10 = mysqli_fetch_assoc($res10);
$row11 = mysqli_fetch_assoc($res11);
 $rs7 =  mysqli_fetch_assoc($rw7);
  $rs8 =  mysqli_fetch_assoc($rw8);


?>


<html>
  <head>
	<style>
	body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(images1.jpg) no-repeat;
  background-size: cover;
}
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
h2{
	color:white;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart1);

      google.charts.setOnLoadCallback(drawChart2);

      google.charts.setOnLoadCallback(drawChart3);

      google.charts.setOnLoadCallback(drawChart4);
 
      google.charts.setOnLoadCallback(drawChart5);



	  //cluster1
     
      function drawChart1() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
        data.addRows([
         ['CPU', <?php echo $row["sum(max_cpu)"] ?>],
          ['MEMORY',<?php echo $row2["sum(vm_memory)"] ?>],
		  ['STORAGE',<?php echo $row1["sum(storage)"] ?>],
		  ['MEMORY AVAILABLE',<?php echo  $rs2["total_memory"]-$row2["sum(vm_memory)"] ?>], 
		  ['STORAGE AVAILABLE ',<?php echo $rs1["storage"]-$row1["sum(storage)"] ?>]
        ]);

        var options = {title:'',
                        width:600,
                       height:400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
	var barchart_options1 = {title:'',
                       width:600,
                       height:400,
                       legend: 'none'};
        var barchart1 = new google.visualization.BarChart(document.getElementById('barchart1'));
        barchart1.draw(data, barchart_options1);
      }
	  //cluster2
      function drawChart2() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
      data.addRows([
         ['CPU', <?php echo $row3["sum(max_cpu)"] ?>],
          ['MEMORY', <?php echo $row5["sum(vm_memory)"] ?>],
		  ['STORAGE',<?php echo $row4["sum(storage)"] ?>],
		  ['MEMORY AVAILABLE ',<?php echo   $rs4["total_memory"]-$row5["sum(vm_memory)"] ?>],
		  ['STORAGE AVAILABLE',<?php echo $rs3["storage"]-$row4["sum(storage)"] ?>]
        ]);

        var options = {title:'',
                      width:600,
                       height:400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
	var barchart_options2 = {title:'',
                       width:600,
                       height:400,
                       legend: 'none'};
        var barchart2 = new google.visualization.BarChart(document.getElementById('barchart2'));
        barchart2.draw(data, barchart_options2);
      }
	  //cluster3
	function drawChart3() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
    data.addRows([
         ['CPU', <?php echo $row6["sum(max_cpu)"] ?>],
          ['MEMORY', <?php echo $row8["sum(vm_memory)"] ?>],
		  ['STORAGE',<?php echo $row7["sum(storage)"] ?>],
		  ['MEMORY AVAILABLE',<?php echo  $rs6["total_memory"]-$row8["sum(vm_memory)"] ?>],
		  ['STORAGE AVAILABLE',<?php echo $rs5["storage"]-$row7["sum(storage)"] ?>]
        ]);

        var options = {title:'',
                        width:600,
                       height:400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
	var barchart_options3 = {title:'',
                        width:600,
                       height:400,
                       legend: 'none'};
        var barchart3 = new google.visualization.BarChart(document.getElementById('barchart3'));
        barchart3.draw(data, barchart_options3);
      }
	function drawChart4() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
         data.addRows([
         ['CPU', <?php echo $row9["sum(max_cpu)"] ?>],
          ['MEMORY', <?php echo $row10["sum(storage)"] ?>],
		  ['STORAGE',<?php echo $row11["sum(vm_memory)"] ?>],
		  ['MEMORY AVAILABLE', <?php echo $rs8["total_memory"]-$row10["sum(storage)"] ?>],
		  ['STORAGE AVAILABLE',<?php echo $rs7["storage"]- $row11["sum(vm_memory)"] ?>]

        ]);

        var options = {title:'',
                        width:600,
                       height:400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
        chart.draw(data, options);
	var barchart_options4 = {title:'',
                        width:600,
                       height:400,
                       legend: 'none'};
        var barchart4 = new google.visualization.BarChart(document.getElementById('barchart4'));
        barchart4.draw(data, barchart_options4);
      }

	function drawChart5() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
        data.addRows([
         ['a', 2],
          ['b', 2],
          ['c', 2],
          ['d', 0],
          ['e', 3]
        ]);

        var options = {title:'',
                       width:600,
                       height:400};
        var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
        chart.draw(data, options);
	var barchart_options5 = {title:'',
                       width:600,
                       height:400,
                       legend: 'none'};
        var barchart5 = new google.visualization.BarChart(document.getElementById('barchart5'));
        barchart5.draw(data, barchart_options5);
      }

    </script>
  </head>
  <body>
   <ul>
   <li><a href="">CLUSTER MIGRATION TOOL</a></li>
  <li style="float:right"><a class="active" href="project.php">Log Out</a></li>
</ul>
   <table>
	<table class="columns">
	<h2>Resource Consumed by Cluster 1<h2>
      		<tr>
        <td><div id="piechart1" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart1" style="border: 1px solid #ccc"></div></td>
      		</tr>
	</table>
	<table class="columns">
	<h2>Resource Consumed by Cluster 2<h2>
      		<tr>
        <td><div id="piechart2" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart2" style="border: 1px solid #ccc"></div></td>
      		</tr>
	</table>
	<table class="columns">
	<h2>Resource Consumed by Cluster 3 <h2>
      		<tr>
        <td><div id="piechart3" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart3" style="border: 1px solid #ccc"></div></td>
      		</tr>
	<table class="columns">
	<h2>Resource Consumed by Cluster 4 <h2>
      		<tr>
        <td><div id="piechart4" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart4" style="border: 1px solid #ccc"></div></td>
      		</tr>

	</table>
    </table>
  </body>
</html>
