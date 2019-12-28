<?php
$dbconnect = new mysqli('localhost','root','','vm_migration');
echo $dbconnect->connect_error;
//vm1
$cpu =0;
//$ftquery="SEL  count(ft) from vm_table where esxi_id=6 and ft=0";
$query = "SELECT max_cpu FROM vm_table where vm_id=14";
$query1 = "SELECT vm_memory FROM vm_table where vm_id=14";
$query2 = "SELECT storage FROM vm_table where vm_id=14";

$total_s = "SELECT storage FROM cluster_table WHERE cluster_id = 3";
$total_m = "SELECT total_memory FROM cluster_table WHERE cluster_id = 3";
//$res = $dbconnect-> query($query);
//$ftres=mysqli_query($dbconnect,$ftquery);
//$ftres1=mysqli_query($dbconnect,$ftquery1);
$res = mysqli_query($dbconnect,$query);
$res1 = mysqli_query($dbconnect,$query1);
$res2 = mysqli_query($dbconnect,$query2);
/*$ftrow =mysqli_fetch_assoc($ftres);
$ftrow1 =mysqli_fetch_assoc($ftres1);
//$row1 = mysqli_fetch_assoc($res);
$row2 = mysqli_fetch_assoc($res1);
$row3 = mysqli_fetch_assoc($res2);
*/


$tot_s = mysqli_query($dbconnect,$total_s);


$tot_m = mysqli_query($dbconnect,$total_m);


$sum = "SELECT sum(storage) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =3)";
$sum1 = mysqli_query($dbconnect,$sum);
$sum2 = mysqli_fetch_assoc($sum1);
$value_av = $sum2["sum(storage)"];


$sum_mem = "SELECT sum(vm_memory) from vm_table where esxi_id in ( select esxi_id from esxi_table where cluster_id =3)";
$sum_mem1 = mysqli_query($dbconnect,$sum_mem);
$sum_mem2 = mysqli_fetch_assoc($sum_mem1);
$value_mem = $sum_mem2["sum(vm_memory)"];




// copying 

$row = mysqli_fetch_assoc($res);
$cpu = $row["max_cpu"];

$row1 = mysqli_fetch_assoc($res1);
$memory = $row1["vm_memory"];

$row2 = mysqli_fetch_assoc($res2);
$storage = $row2["storage"];

$t_s = mysqli_fetch_assoc($tot_s);
$storage_c = $t_s["storage"];



$t_m = mysqli_fetch_assoc($tot_m);
$memory_c = $t_m["total_memory"];



$sub = $storage_c-$value_av ;
$sub1 = $memory_c-$value_mem;






if( $storage*2 <=  $sub)
{
	if($memory*2<= $sub1)
	{
$update_s = "UPDATE vm_table SET max_cpu = $cpu , vm_memory = $memory*2, storage = $storage*2 WHERE vm_id = 14 ";
$r_s = mysqli_query($dbconnect,$update_s);
}
else{
$queryupdate = "UPDATE vm_table SET max_cpu = $cpu , vm_memory = $memory , storage = $storage WHERE vm_id = 26 ";
$r = mysqli_query($dbconnect,$queryupdate);
}
}
else {


	

	$queryupdate = "UPDATE vm_table SET max_cpu = $cpu , vm_memory = $memory , storage = $storage WHERE vm_id = 26 ";
$r = mysqli_query($dbconnect,$queryupdate);

}




   //echo $row["vm_id"];
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"
	<title></title>
	<link rel="stylesheet" href="animation.css">
	<script>
  function showBuyNow() { 
    document.getElementById("continue").style.display = "inline"; 
}

//this calls the function above, 3000 milliseconds is 3 seconds, adjust here to make it a longer interval
setTimeout("showBuyNow()", 10000);
</script>
	</head>
	<style>
	*{
	font-family:sans-serif;
	list-style:none;
	padding 0;
}

body{
	background: url(images1.jpg) no-repeat;
	 background-size: cover;
}

.skills{
width: 1600px;
margin: 60px auto;
color: white;
}

.skills li{
margin: 30px 0%;
}

.bar{
	background: #353b48;
	display: block;
	height: 2px;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 3px;
	overflow: hidden;
	box-shadow: 0 0 10px #2187e7b3;
}

.bar span{
	height: 2px;
	float: left;
	background: #C35817;

}
.data1{
	width: 0%;
	animation: data1 2s;

}

.data2{
		width:0%;
		animation: data2 4s;
}

.data3{
	width:0%;
	animation: data3 6s;
}

.data4{
	width:0%;
	animation: data4 8s;

}
.data5{
	width:0%;
	animation: data5 10s;
	}
.data6{
	width: 0%;
	animation: data6 1s;

}

.data7{
		width:0%;
		animation: data7 2s;
}

.data8{
	width:0%;
	animation: data8 5s;
}

.data9{
	width:0%;
	animation: data9 7s;

}
.data10{
	width:0%;
	animation: data10 7s;
	}
	.data5{
	width:0%;
	animation: data5 7s;
	}
.data11{
	width: 0%;
	animation: data11 10s;

}

.data12{
		width:0%;
		animation: data12 2s;
}

.data13{
	width:0%;
	animation: data13 5s;
}

.data14{
	width:0%;
	animation: data14 7s;

}
.data15{
	width:0%;
	animation: data15 7s;
	}
.data16{
	width:0%;
	animation: data16 7s;
}

@keyframes data1 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data2 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data3 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data4 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data5 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data6 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data7 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data8 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data9 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data10 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data11 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data12 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data13 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data14 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data15 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data16 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
.continue{
  display: none;
  color: #ffffff;
  background-color: #ff0000;
  width: 8em;
  padding: 10px;
  text-align: center;
  border-radius: 10px;
}
</style>
	<body>
	<div class="skills">
		<h3>Please wait while the data is being migrated<h3>
		<li>
		<h3></h3><span class="bar"><span class="data1"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data2"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data3"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data4"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data5"></span></span>
		</li>
		<h3></h3><span class="bar"><span class="data6"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data7"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data8"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data9"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data10"></span></span>
		<h3></h3><span class="bar"><span class="data11"></span></span>
		</li>
		<h3></h3><span class="bar"><span class="data12"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data13"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data14"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data15"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data16"></span></span>
		</li>
	</div>
	<div id="continue" style="display:none">
    <a href="main.php"><p style="text-decoration: none; text-align:center; font-size:40px ; color:#4863A0 ">Continue</p></a>
</div>
	</body>
</html><?php
$dbconnect = new mysqli('localhost','root','','vm_migration');
echo $dbconnect->connect_error;
//vm1
$cpu =0;
//$ftquery="SEL  count(ft) from vm_table where esxi_id=6 and ft=0";
$query = "SELECT max_cpu FROM vm_table where vm_id=14";
$query1 = "SELECT vm_memory FROM vm_table where vm_id=14";
$query2 = "SELECT storage FROM vm_table where vm_id=14";
//$res = $dbconnect-> query($query);
//$ftres=mysqli_query($dbconnect,$ftquery);
//$ftres1=mysqli_query($dbconnect,$ftquery1);
$res = mysqli_query($dbconnect,$query);
$res1 = mysqli_query($dbconnect,$query1);
$res2 = mysqli_query($dbconnect,$query2);
/*$ftrow =mysqli_fetch_assoc($ftres);
$ftrow1 =mysqli_fetch_assoc($ftres1);
//$row1 = mysqli_fetch_assoc($res);
$row2 = mysqli_fetch_assoc($res1);
$row3 = mysqli_fetch_assoc($res2);
*/
// copying 
$row = mysqli_fetch_assoc($res);
$cpu = $row["max_cpu"];

$row1 = mysqli_fetch_assoc($res1);
$memory = $row1["vm_memory"];

$row2 = mysqli_fetch_assoc($res2);
$storage = $row2["storage"];


$queryupdate = "UPDATE vm_table SET max_cpu = $cpu , vm_memory = $memory , storage = $storage WHERE vm_id = 26 ";
$r = mysqli_query($dbconnect,$queryupdate);


   //echo $row["vm_id"];
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"
	<title></title>
	<link rel="stylesheet" href="animation.css">
	<script>
  function showBuyNow() { 
    document.getElementById("continue").style.display = "inline"; 
}

//this calls the function above, 3000 milliseconds is 3 seconds, adjust here to make it a longer interval
setTimeout("showBuyNow()", 10000);
</script>
	</head>
		<style>
	*{
	font-family:sans-serif;
	list-style:none;
	padding 0;
}

body{
	background: url(images1.jpg) no-repeat;
	 background-size: cover;
}

.continue{
  display: none;
  color: #ffffff;
  background-color: #ff0000;
  width: 8em;
  padding: 10px;
  text-align: center;
  border-radius: 10px;
}

.skills{
width: 1600px;
margin: 60px auto;
color: white;
}

.skills li{
margin: 30px 0%;
}

.bar{
	background: #353b48;
	display: block;
	height: 2px;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 3px;
	overflow: hidden;
	box-shadow: 0 0 10px #2187e7b3;
}

.bar span{
	height: 2px;
	float: left;
	background: #2187e7;

}
.data1{
	width: 0%;
	animation: data1 2s;

}

.data2{
		width:0%;
		animation: data2 4s;
}

.data3{
	width:0%;
	animation: data3 6s;
}

.data4{
	width:0%;
	animation: data4 8s;

}
.data5{
	width:0%;
	animation: data5 10s;
	}
.data6{
	width: 0%;
	animation: data6 1s;

}

.data7{
		width:0%;
		animation: data7 2s;
}

.data8{
	width:0%;
	animation: data8 5s;
}

.data9{
	width:0%;
	animation: data9 7s;

}
.data10{
	width:0%;
	animation: data10 7s;
	}
	.data5{
	width:0%;
	animation: data5 7s;
	}
.data11{
	width: 0%;
	animation: data11 10s;

}

.data12{
		width:0%;
		animation: data12 2s;
}

.data13{
	width:0%;
	animation: data13 5s;
}

.data14{
	width:0%;
	animation: data14 7s;

}
.data15{
	width:0%;
	animation: data15 7s;
	}
.data16{
	width:0%;
	animation: data16 7s;
}

@keyframes data1 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data2 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data3 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data4 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data5 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data6 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data7 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data8 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data9 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data10 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data11 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data12 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data13 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data14 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data15 {
	0%{
		width0%;
	}
	100%{
		width:100%;
	}

}
@keyframes data16 {
	0%{
		width:0%;
	}
	100%{
		width:100%;
	}

}
.continue{
  display: none;
  color: #ffffff;
  background-color: #ff0000;
  width: 8em;
  padding: 10px;
  text-align: center;
  border-radius: 10px;
}
</style>
	<body>
	<div class="skills">
		<h3>Please wait while the data is being migrated<h3>
		<li>
		<h3></h3><span class="bar"><span class="data1"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data2"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data3"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data4"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data5"></span></span>
		</li>
		<h3></h3><span class="bar"><span class="data6"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data7"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data8"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data9"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data10"></span></span>
		<h3></h3><span class="bar"><span class="data11"></span></span>
		</li>
		<h3></h3><span class="bar"><span class="data12"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data13"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data14"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data15"></span></span>
		</li>
		<li>
		<h3></h3><span class="bar"><span class="data16"></span></span>
		</li>
	</div>
	<div id="continue" style="display:none">
    <a href="main.php"><p style="text-decoration: none; text-align:center; font-size:50px;   ">Continue</p></a>
</div>
	</body>
</html>