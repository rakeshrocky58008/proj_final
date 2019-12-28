<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(images1.jpg) no-repeat;
  background-size: cover;
}
.btn{
	text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  background-color: #999999;
  color: #2B1B17 ;
  border-radius: 25%;
}
.container {
	 text-align: center;
	 color: blue;
}
.collapsible0 {
 opacity: 0.75;
  margin: 0 auto;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 20%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 20px;

}
.active, .collapsible0:hover {
  opacity: 0.75;
  background-color:#2B1B17;
}

.collapsible {
 opacity: 0.75;
  margin: 0 auto;
  color: red;
  cursor: pointer;
  padding: 18px;
  width: 20%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 20px;

}

.active, .collapsible:hover {
  opacity: 0.75;
  background-color:#2B1B17;
}

.content {
   opacity: 0.75;
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
    text-align: Center;

}
.collapsible2 {
  opacity: 1;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 15%;
  border: none;
  text-align: Center;
  outline: none;
  font-size: 15px;
  display: inline-block;
}

.active, .collapsible2:hover {
  opacity: 1;
  background-color: #25383C;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.collapsible3 {
  opacity: 1;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 10%;
  border: none;
  text-align: centre;
  outline: none;
  font-size: 15px;
  display:inline-block;
}

.active, .collapsible3:hover {
 opacity: 1;
  background-color: #2B3856;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
h1{
	text-decoration: underline;
	text-align: center;
	color: black;
}
h3{
	color: black;
	text-align: left;
	font-style: italic;
}
h2{
	text-decoration: underline;
	color: black ;
	text-align: center;
} 
</style>
</head>
<body>

<ul>
   <li><a href="">CLUSTER MIGRATION TOOL</a></li>
  <li style="float:right"><a class="active" href="project.php">Logout</a></li>
</ul>
<h1>Instructions To use the Migration Tool : </h1>
<br>
<br>
<h3>1. All The Clusters present MUST share the same VLAN    </h3>
<h3>2. All shared storage should be available throughout the datacenter   </h3>
<h3>3. All Configuration should be shared between clusters (i.e backup and the target cluster)   </h3>
<h3>4  The Resource pool is shared across clusters   </h3>
<h3>5. Data Centre contains the resources used by all the clusters  </h3>
<h3>6. cluster(id) contains the resources by different hypervisors  </h3>
<h3>7. esxi(id) contains resouces by different Virtual Machines   </h3>
<h3>8. Select the Migrate VM present in different hypervisors to migrate the Data  </h3>
<h3>9. Migrate Buttons is available only for  Fault Tolerence enabled  Virtual Machines </h3>



<br>
<h2>Migration Tool   : </h2>
<div class= "container">
<button class="collapsible0">  <input type="button" onclick="window.location.href = 'cluster.php';" class="btn" value="Data Centre">  
</button>
<p></p>
<div class= "container1">
<button class="collapsible">  <input type="button" onclick="window.location.href = 'cluster1.php';" class="btn" value="Cluster1">  
</button>
<div class="content">
  <button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor1.php';" class="btn" value="ESXI1">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration1.php';" class="btn" value="Migrate VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href ='migration2.php';" class="btn" value="Migrate VM3">  
</button>
	</div>
	<button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor2.php';" class="btn" value="ESXI2">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration3.php';" class="btn" value="Migrate VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM3">  
</button>
	</div>
</div>
<p></p>
<button class="collapsible">  <input type="button" onclick="window.location.href = 'cluster2.php';" class="btn" value="Cluster2">  
</button>
<div class="content">
  <button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor3.php';" class="btn" value="ESXI1">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration4.php';" class="btn" value="Migrate VM3">  
</button>
	</div>
	<button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor4.php';" class="btn" value="ESXI2">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href ='migration5.php';" class="btn" value="Migrate VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration6.php';" class="btn" value="Migrate VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM3">  
</button>
	</div>
</div>
<p></p>
<button class="collapsible">  <input type="button" onclick="window.location.href = 'cluster3.php';" class="btn" value="Cluster3">  
</button>
<div class="content">
  <button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor5.php';" class="btn" value="ESXI1">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration7.php';" class="btn" value="Migrate VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration8.php';" class="btn" value="Migrate VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM3">  
</button>
	</div>
	<button class="collapsible2">  <input type="button" onclick="window.location.href = 'hypervisor6.php';" class="btn" value="ESXI2">  
</button>
	<div class="content">
 	<button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value=" VM1">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration9.php';" class="btn" value="Migrate VM2">  
</button>
    <button class="collapsible3">  <input type="button" onclick="window.location.href = 'migration.php';" class="btn" value="  VM3">  
</button>
</div>
</div>
<p></p>
<button class="collapsible">  <input type="button" onclick="window.location.href = 'cluster4.php';" class="btn" value="Cluster4(Backup)">  
</button>
<div class="content">
  <button class="collapsible2">  <input type="button" onclick="window.location.href = 'clusterbackup1.php';" class="btn" value="ESXI1">  
</button>
	<button class="collapsible2">  <input type="button" onclick="window.location.href = 'clusterbackup2.php';" class="btn" value="ESXI2">  
</button>
<button class="collapsible2">  <input type="button" onclick="window.location.href = 'clusterbackup3.php';" class="btn" value="ESXI3">  
</button>
</div>
</div>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
var coll = document.getElementsByClassName("collapsible2");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
var coll = document.getElementsByClassName("collapsible3");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>

</body>
</html>
