<html>
<head>
<style type="text/css">



</style>
</head>
<body style="background-color:#888;text-align:center">

<div id='title'>

</div> 

<a href="home.php"><input type="submit" class="btn btn-default" value="HOME" name="Home" style="float:right;background-color:white;"></a> 
<?php




if (isset($_POST['Login'])) { 

$username= $_POST['username'] ;
$password= $_POST['password'] ;

 
$connection = odbc_connect("Oracle", "nitish1", "password");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "select * from admin where admin_username = '$username' and password = '$password'";
	$rs=odbc_exec($connection,$sql);
	
odbc_result($rs,1);
	$count = odbc_num_rows($rs);
 
if ($count == 1) {
     $_SESSION['loggedIn'] = "true";
	 header("Location: searchpage.php");
} else {
     $_SESSION['loggedIn'] = "false";
    header("Location: index.php"); 

}
 


}
}

echo '<div style="position:absolute;width:500px;height:200px ;top:50%;  left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter book name</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="admin_login.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Userame</div> <input class="form-control type="text" name="username" style="width:300px;"required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Password</div> <input class="form-control" type="password" name="password" style="width:300px;"required></div></div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Login" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;



?>
</body>
</html>