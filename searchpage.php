<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style>
.btn {
	width:200px;
	margin-bottom : -17px;
}
</style>
</head>
<body style="background-color:#888;">

<a href="home.php"><input type="submit" class="btn btn-default" value="Logout" name="Home" style="float:right;background-color:white;"></a> 

<table style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);" align="center">
<tr><td>
<FORM METHOD="LINK" ACTION="add_book.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="ADD BOOK">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="add_student.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="ADD STUDENT">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="add_faculty.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="ADD FACULTY">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="issue_book.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="ISSUE BOOK">
</FORM
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="remove_student.php">
<INPUT TYPE="submit"  class="btn btn-default" VALUE="REMOVE STUDENT">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="remove_faculty.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="REMOVE FACULTY">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="return_book.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="RETURN BOOK">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="add_order.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="PLACE ORDER">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="view_order.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="VIEW ORDER">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="co_stat.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="CHECKOUT STATUS">
</FORM>
</td></tr>
<tr><td>
<FORM METHOD="LINK" ACTION="fine.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="RETURNED BOOKS">
</FORM>



</body>
</html>