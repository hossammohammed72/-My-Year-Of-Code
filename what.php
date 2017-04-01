<?php 
if(isset($_REQUEST['name'])==="hossam")
{
	echo "<br>DONE<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>day 4</title>
</head>
<body>
<button onclick="getUpdate();">get some data</button>
<h1 id="done">hywsal ????</h1>
<script>
function getUpdate(){
var xhttp;
if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function (){
 	if(this.readyState==4 && this.status==200){
 		document.getElementById('done').innerHTML=this.responseText ; 
 	
 } }    
xhttp.open("GET", "response.php", true);
xhttp.send();
}
}	;
</script>
</body> 
</html>
