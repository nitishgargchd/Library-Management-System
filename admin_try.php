<html>
<head>
<style type="text/css">



</style>
</head>
<body style="text-align:center">

<?php
echo "hi";
if (isset($_POST['Login'])) { 

if(isset($_POST['username'])){
$username= $_POST['username'] ;
}
if(isset($_POST['password'])){
$password= $_POST['password'] ;
}

$username  = null ;
$password  = null ;

$connection = odbc_connect('XE', 'system', 'anshul');
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "select * from admin where uname='$_POST[username]' and pwd='$_POST[password]'";
	$rs=odbc_exec($connection,$sql);
	
odbc_result($rs,1);
	$count = odbc_num_rows($rs);
 
if ($count == 1) {
     $_SESSION['loggedIn'] = "true";
     header("Location: searchpage.php");
} else {
     $_SESSION['loggedIn'] = "false";
    header("Location: index.php"); 
	echo "Login failed" ;
}
}
echo "hi";
echo "<form action='admin_try.php' method='post'> \n" ;
echo" Please enter your username and password if you wish. <br/> \n" ;
echo "Username: <input type='text' name='username' > \n " ;
echo "Password: <input type='text' name='password' > \n" ;
echo "<input type='submit' value='Login' name='Login'> <br/> \n" ;
echo "</form>" ;

}

?>
</body>
</html>