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
$book_id= $_POST['book_id'] ;

 
$connection = odbc_connect("XE", "system", "anshul");
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "insert into checkin values('$book_id',sysdate,sysdate-(select due_date from checkout where book_id='$book_id'))";
	$rs=odbc_exec($connection,$sql);
	$sql1 = "update checkin set fine=0 where fine<0";
	$rs1=odbc_exec($connection,$sql1);
	$sql2 = "delete from checkout where book_id='$book_id'";
	$rs2=odbc_exec($connection,$sql2);
}
}
echo '<div style="position:absolute;width:500px;height:250px ;top:50%;left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter book detail</h2><br><br><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="return_book.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Book ID</div> <input class="form-control type="text" name="book_id" style="width:200px;"required></div></div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Return" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;



?>
</body>
</html>