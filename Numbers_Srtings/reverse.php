<html>
<head>
<title> reverse </title>
</head>
<body>
<form action="reverse.php" method="get">
<br>
Enter the number u want to reverse : <input type="text" name="n1" size=8>
<br>
<br>
<input type="submit"  value ="click">
</form>
</body>
</html>
<?php
$x=(int)$_GET['n1'];
$rev=0;
while($x>0)
{
$rev=($rev*10)+(int)($x%10);
$x=(int)($x/10);
}

echo 'Reverse of the number : '.$rev;
?>