<?php
$connection = odbc_connect("HACKER", "nitish1", "password");

 
 if (!$connection)
	{exit("Conection Failed: " . $connection);}
else{
	$sql="select qty from book_details";
	$rs=odbc_prepare($connection,$sql);
$a= odbc_execute($rs);
echo $a;
	}
?>