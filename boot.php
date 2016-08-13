<html>
<head>
<style type="text/css">



</style>
</head>
<body style="text-align:center">

<div id='title'>

</div> 

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
	$sql = "select ISBN from book_details where ISBN='$ISBN'";
	$rs=odbc_exec($connection,$sql);
//echo "$rs";
/*  if($rs=='odbc_result_all($rs,"border=1")')
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
	*/
	

odbc_result_all($rs,"border=1");
}
//}
}
echo "<form action='boot.php' method='post'> \n" ;
echo "<br />";
echo" Please enter new book details. <br/> \n" ;
echo "<br />";

//echo "ISBN: <input type='text' name='ISBN' > \n " ;
//echo "<br />";
echo "Book Name: <input type='text' name='book_name' > \n" ;
echo "<br />";
echo "Edition: <input type='text' name='edition' > \n" ;
echo "<br />";
echo "Author: <input type='text' name='author' > \n" ;
echo "<br />";
echo "Publisher: <input type='text' name='publisher' > \n" ;
echo "<br />";
echo "Price: <input type='number' name='price' > \n" ;
echo "<br />";
echo "Book ID: <input type='text' name='book_id' > \n" ;
echo "<br />";
echo "Date of Purchase: <input type='date' name='dop' > \n" ;
echo "<br />";
echo "<input type='submit' value='Add' name='Login'> <br/> \n" ;

echo "</form>" ;



?>
<div class="container">
  <form>
  <?php
 echo "ISBN: <input type='text' name='ISBN' > \n " ;
 echo "<br />";
    
      ?></form>
</div> 

<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">Left</button>
  <button type="button" class="btn btn-default">Middle</button>
  <button type="button" class="btn btn-default">Right</button>
</div>
</body>
</html>