<?php
$dbconnect = new mysqli('localhost','root','','vm_migration');
echo $dbconnect->connect_error;
 //hypervisor 1
$query = "SELECT sum(max_cpu) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 7) ";
$query1 = "SELECT sum(vm_memory) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 7) ";
$query2 = "SELECT sum(storage) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 7) ";
//$res = $dbconnect-> query($query);
$res = mysqli_query($dbconnect,$query);
$res1 = mysqli_query($dbconnect,$query1);
$res2 = mysqli_query($dbconnect,$query2);
$row = mysqli_fetch_assoc($res);
$row1 = mysqli_fetch_assoc($res1);
$row2 = mysqli_fetch_assoc($res2);
   //echo $row["vm_id"];

   //hypervisor2
$query3 = "SELECT sum(max_cpu) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 8) ";
$query4 = "SELECT sum(vm_memory) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 8) ";
$query5 = "SELECT sum(storage) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 8) ";

//hypervisor3
$query6 = "SELECT sum(max_cpu) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 9) ";
$query7 = "SELECT sum(vm_memory) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 9) ";
$query8 = "SELECT sum(storage) FROM vm_table WHERE esxi_id IN (SELECT esxi_id FROM esxi_table e WHERE e.esxi_id = 9) ";
//$res = $dbconnect-> query($query);
$res3 = mysqli_query($dbconnect,$query3);
$res4 = mysqli_query($dbconnect,$query4);
$res5 = mysqli_query($dbconnect,$query5);
$res6 = mysqli_query($dbconnect,$query6);
$res7 = mysqli_query($dbconnect,$query7);
$res8 = mysqli_query($dbconnect,$query8);
$row3 = mysqli_fetch_assoc($res3);
$row4 = mysqli_fetch_assoc($res4);
$row5 = mysqli_fetch_assoc($res5);
$row6 = mysqli_fetch_assoc($res6);
$row7 = mysqli_fetch_assoc($res7);
$row8 = mysqli_fetch_assoc($res8);
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




     
      function drawChart1() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
        data.addRows([
          ['Idle', 2],
          ['Running', 1]
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
	// hypervisor1
      function drawChart2() {

        var data = new google.visualization.DataTable();
         data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
         data.addRows([
          ['cpu ', <?php echo $row["sum(max_cpu)"] ?>],
          ['memory', <?php echo $row1["sum(vm_memory)"] ?>],
          ['storage', <?php echo $row2["sum(storage)"] ?>]
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
	  //hypervisor2
	function drawChart3() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'resource');
        data.addColumn('number', 'consumption');
          data.addRows([
          ['cpu ', <?php echo $row3["sum(max_cpu)"] ?>],
          ['memory', <?php echo $row4["sum(vm_memory)"] ?>],
          ['storage', <?php echo $row5["sum(storage)"] ?>]
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
          ['cpu ', <?php echo $row6["sum(max_cpu)"] ?>],
          ['memory', <?php echo $row7["sum(vm_memory)"] ?>],
          ['storage', <?php echo $row8["sum(storage)"] ?>]
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
</ul>
   <table>
	<table class="columns">
	<h2>Hypervisor 1<h2>
      		<tr>
        <td><div id="piechart2" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart2" style="border: 1px solid #ccc"></div></td>
      		</tr>
			<table class="columns">
	<h2>Hypervisor 2<h2>
      		<tr>
        <td><div id="piechart3" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart3" style="border: 1px solid #ccc"></div></td>
      		</tr>
	</table>
	<table class="columns">
	<h2>Hypervisor 2<h2>
      		<tr>
        <td><div id="piechart4" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart4" style="border: 1px solid #ccc"></div></td>
      		</tr>
	</table>
    </table>
  </body>
</html>
