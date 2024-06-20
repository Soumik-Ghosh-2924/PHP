<html>
<head>
<title>
	Login Page
</title>
</head>
<body>
<font face="Garamond" size=8>
<form action="login.php" method="get">
<br>
Enter user-id : <input type="text" size=10 name="t1">
<br>
Enter the password : <Input type="password" size=10 name="p1">
<br>
<input type="Submit" value="check">
</form>
</font>
</body>
</html>
<?php
echo "<font face='Algerian' size=10>";
$user = $_GET['t1'];
$pass = $_GET['p1'];
if(strcmp($user,"book")==0 && strcmp($pass, "Shopping")==0)
echo 'Congrats! you have logged in.'; 
else
echo 'Sorry! Try Again.';
?>