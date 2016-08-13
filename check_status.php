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


$bid= $_POST['bid'] ;




 
$connection = odbc_connect("XE", "system", "anshul");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql="select bid,BOOK_ID,to_char(issue_date,'DD-MON-YYYY') ISSUE_DATE,to_char(due_date,'DD-MON-YYYY') DUE_DATE from checkout where bid='$bid'";
 $resultset=odbc_exec($connection, $sql);
 
    echo '<div style="position:absolute;top:10%;left:50%;transform:translate(-50%,-50%);background-color:white">';
odbc_result_all($resultset,"border=1");
echo '</div>';


}
}

echo '<div style="position:absolute;width:500px;height:200px ;top:50%;  left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter borrower ID</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="check_status.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Borrower ID</div> <input class="form-control type="text" name="bid" style="width:300px;"required></div></div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Check" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;


?>
</body>
</html>