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

//print_r ($_POST) ;



if (isset($_POST['Login'])) { 

//if(isset($_POST['username'])){
$ISBN= $_POST['ISBN'] ;
//}
//if(isset($_POST['password'])){
$book_name= $_POST['book_name'] ;
//}
$edition= $_POST['edition'] ;
$author= $_POST['author'] ;
$publisher= $_POST['publisher'] ;
$price= $_POST['price'] ;
$book_id= $_POST['book_id'] ;
$dop= $_POST['dop'] ;
/*$username  = null ;
$password  = null ;*/

 
$connection = odbc_connect("XE", "system", "anshul");
$qty=1; 
 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql = "select qty from book_details where ISBN='$ISBN'";
	$rs=odbc_exec($connection,$sql);
	$x = odbc_result($rs,1);
	//$a= odbc_execute($rs);
//echo $a;

//echo $rs;
  if($x!=0)
	{
		$sql2="update book_details set qty=qty+1 where ISBN='$ISBN'";
			
	$rs2=odbc_exec($connection,$sql2);


 	$sql3 = "insert into book values('$book_id','$ISBN',TO_DATE('$dop','YYYY-MM-DD'))";
	$rs3=odbc_exec($connection,$sql3);
	}

else{
		$sql2 = "insert into book_details values('$ISBN','$book_name','$edition','$publisher','$author',$price,$qty)";
			$rs2=odbc_exec($connection,$sql2);

//if($rs2==1)
//{
 	$sql4 = "insert into book values('$book_id','$ISBN',TO_DATE('$dop','YYYY-MM-DD'))";
	$rs4=odbc_exec($connection,$sql4);
	//}
} 
	
	

//odbc_result_all($rs,"border=1");

//echo $x;
}
//}
}
echo '<div style="position:absolute;width:500px;height:600px ;top:50%;
  left:50%;transform: translate(-50%,-50%);background-color:white;border-radius:10px;">' ;
echo '<h2 align="center">Please enter new book details</h2><br>';
echo '<div style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"><form class="form-horizontal" role="form" action="add_book.php" method="post">';
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">ISBN</div> <input class="form-control type="text" name="ISBN" style="width:300px;"required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Book Name</div> <input class="form-control" type="text" name="book_name" style="width:260px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Edition</div> <input class="form-control" type="text" name="edition" style="width:290px;"required></div> </div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Author</div> <input class="form-control" type="text" name="author" style="width:290px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Publisher</div> <input class="form-control" type="text" name="publisher" style="width:275px;" required></div></div> ' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Price</div> <input class="form-control" type="number" name="price"  style="width:300px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Book ID</div> <input  class="form-control" type="text" name="book_id" style="width:280px;" required></div></div>' ;
echo '<div class="form-group"><div class="input-group"><div class="input-group-addon">Date of Purchase</div> <input class="form-control" type="date" name="dop" style="width:220px;" required></div></div> ';
echo '<br><input type="submit" class="btn btn-default" value="Add" name="Login" style="float:right;background-color:#2d88ff;color:#eee;">';

echo "</form></div>" ;




?>


</body>
</html>