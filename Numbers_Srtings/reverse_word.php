<html>
<head>
<title> reverse </title>
</head>
<body>
<form action="reverse_word.php" method="get">
<br>
Enter the string u want to reverse : <input type="text" name="n1" size=8>
<br>
<br>
<input type="submit"  value ="click">
</form>
</body>
</html>
<?php
$word=$_GET['n1'];
$le=strlen($word);
$rev="";
for($r=$le-1;$r>=0;$r--)
{
$rev=$rev.$word[$r];
}
echo 'Reverse of the number : '.$rev;
?>