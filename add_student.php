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
$regno= $_POST['regno'] ;
$name= $_POST['name'] ;

$school= $_POST['school'] ;

 
$connection = odbc_connect("XE", "system", "anshul");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "insert into student values('$regno','$name','$school')";
	$rs=odbc_exec($connection,$sql);
	


}
}
echo '<div style="position:absolute;width:500px;height:600px ;top:50%;left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter student details</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="add_student.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Registration Number</div> <input class="form-control type="text" name="regno" style="width:300px;"required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Student Name</div> <input class="form-control" type="text" name="name" style="width:340px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">School</div> <input class="form-control" type="text" name="school" style="width:390px;"required></div> </div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Add" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;




?>
</body>
</html>