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


$book_name= $_POST['book_name'] ;




 
$connection = odbc_connect("XE", "system", "anshul");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql="select d.ISBN,d.book_name,d.author,d.publisher,d.qty,b.book_id from book_details d,book b where b.ISBN=d.ISBN and d.book_name='$book_name'";
 $resultset=odbc_exec($connection, $sql);
 
    echo '<div style="position:absolute;top:120%;left:50%;transform:translate(-50%,-50%);background-color:white">';
odbc_result_all($resultset,"border=1");
echo '</div>';

}
}

echo '<div style="position:absolute;width:500px;height:200px ;top:20%;  left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter book name</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="check_book.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Book Name</div> <input class="form-control type="text" name="book_name" style="width:300px;"required></div></div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Check" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;


?>
</body>
</html>