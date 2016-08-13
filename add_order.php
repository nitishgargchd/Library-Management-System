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

$ISBN= $_POST['ISBN'] ;
$book_name= $_POST['book_name'] ;

$author= $_POST['author'] ;
$publisher= $_POST['publisher'] ;
 $edition= $_POST['edition'] ;
 $price= $_POST['price'] ;
 $qty= $_POST['qty'] ;
$connection = odbc_connect("XE", "system", "anshul");
 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "insert into orders values('$ISBN','$book_name','$author','$publisher','$edition','$price','$qty')";
	$rs=odbc_exec($connection,$sql);
	


}
}
echo '<div style="position:absolute;width:500px;height:600px ;top:50%;  left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter book order details</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="add_order.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">ISBN</div> <input class="form-control type="text" name="ISBN" style="width:300px;"required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Book Name</div> <input class="form-control" type="text" name="book_name" style="width:260px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Edition</div> <input class="form-control" type="text" name="edition" style="width:290px;"required></div> </div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Author</div> <input class="form-control" type="text" name="author" style="width:290px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Publisher</div> <input class="form-control" type="text" name="publisher" style="width:275px;" required></div></div> ' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Price</div> <input class="form-control" type="number" name="price"  style="width:300px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Quantity</div> <input  class="form-control" type="number" name="qty" style="width:280px;" required></div></div>' ;
echo '<br><input type="submit" class="btn btn-default" value="Add" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;


?>
</body>
</html>