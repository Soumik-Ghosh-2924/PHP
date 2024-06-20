<html>
<head>
<title> bin_to_dec </title>
</head>
<body>
<form action="bin_dec.php" method="get">
<br>
<br>
Enter the number as per your choice : <br>
<input type="text" name="n1" size=8>
<br><br>
Convert :
<input type="submit" value="click"> 
<br>
<br>
</form>                                                                                                                                                                                                                                                        
</body>
</html>
<?php
if(isset($_GET['n1']) && $_GET['n1']!=='')
{
$n=(int)$_GET['n1'];
$a=array();
$y=0;
while($n>0)
{
$a[$y]=$n%2;
$y++;
$n=(int)($n/2);
}

echo 'The binary form after conversion is : '."<br>";
$l=count($a);

for($x=$l - 1; $x >= 0; $x--)
{
echo $a[$x].'  ';
}
}
?>
