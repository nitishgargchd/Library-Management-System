<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">



</style>
</head>
<body style="background-color:#888;">

<div id='title'>

</div> 

<a href="searchpage.php"><input type="submit" class="btn btn-default" value="HOME" name="Home" style="float:right;background-color:white;"></a>

<?php





if (isset($_POST['Login'])) { 


$emp_id= $_POST['emp_id'] ;
$name= $_POST['name'] ;

$school= $_POST['school'] ;
$seniority= $_POST['seniority'] ;
 
$connection = odbc_connect("XE", "system", "anshul");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "insert into faculty values('$emp_id','$name','$school','$seniority')";
	$rs=odbc_exec($connection,$sql);
	 


}
}
echo '<div style="position:absolute;width:500px;height:600px ;top:50%;left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter faculty details</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="add_faculty.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Employee ID</div> <input class="form-control type="text" name="emp_id" style="width:345px;"required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Faculty Name</div> <input class="form-control" type="text" name="name" style="width:340px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">School</div> <input class="form-control" type="text" name="school" style="width:385px;"required></div> </div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Seniority</div> <input class="form-control" type="text" name="seniority" style="width:375px;"required></div> </div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Add" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;



?>
</body>
</html>