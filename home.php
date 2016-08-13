<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style>
.btn {
	width:200px;
	margin-bottom : -17px;
}
@font-face {
	font-family:"font";
	src:url('bootstrap/font.ttf');
}
body{
	background:url(bootstrap/hd.jpg) no-repeat center center fixed; 
	background-size: cover;
}
</style>
</head>
<body>
<h1 style="font-family:font;color:white;text-align:center;margin-top:40px;font-size:400%">Library  Management  System</h1>
<table style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);"  align="center">
<tr><td style="padding:40px;">
<FORM METHOD="LINK" ACTION="check_status.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="CHECK STATUS">
</FORM>
</td>
<td style="padding:40px;">
<FORM METHOD="LINK" ACTION="check_book.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="CHECK BOOK">
</FORM>
</td>
<td style="padding:40px;">
<FORM METHOD="LINK" ACTION="admin_login.php">
<INPUT TYPE="submit" class="btn btn-default" VALUE="ADMIN LOGIN">
</FORM>
</td></tr>

</body>
</html>