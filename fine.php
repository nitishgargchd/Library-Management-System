<html>
<head>
<style type="text/css">



</style>
</head>
<body style="background-color:#888;text-align:center">

<div id='title'>

</div> 
<a href="searchpage.php"><input type="submit" class="btn btn-default" value="HOME" name="Home" style="float:right;background-color:white;"></a>

<?php




 
$connection = odbc_connect("XE", "system", "anshul");
$qty=1; 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "select * from checkin";
	$rs=odbc_exec($connection,$sql);
	echo '<div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);">';
    echo '<div style="background-color:white">';
odbc_result_all($rs,"border=1");
echo '</div>';
	
	$sql1 = "select sum(fine) as total from checkin";
	$rs1=odbc_exec($connection,$sql1);
	echo "<br>";
    
	echo '<div style="position:absolute;margin-top:30px;left:50%;transform:translate(-50%,-50%);background-color:white">';
odbc_result_all($rs1,"border=1");
echo '</div></div>';
	
	
}





?>
</body>
</html>