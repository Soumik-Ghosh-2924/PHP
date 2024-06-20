<?php
$a=array(array(1,2,3), array(4,5,6));
$b=array(array(7,8), array(9,10), array(11,12));

$Ra=count($a);
$Ca=count($a[0]);

$Rb=count($b);
$Cb=count($b[0]);

$X=array();

if($Ca!=$Rb)
{
echo ' Multiplication is not possible . ' . "<br>";
}
else
{
echo ' Multiplication possible .'. "<br>";
}
 echo  "<br>";
for($x=0; $x<$Ra; $x++)
{
for($y=0; $y<$Cb; $y++)
{
$X[$x][$y]=0;
for($k=0; $k<$Ca; $k++)
{
$X[$x][$y]=$X[$x][$y] +($a[$x][$k] * $b[$k][$y]);
}
}
}

$Xr=count($X);
$Xc=count($X[0]);

echo "The multiplication of matrices a and b, result in : ". "<br>";
echo "<br>";

for($m=0; $m<$Xr; $m++)
{
echo "<br>";
for($n=0; $n<$Xc; $n++)
{
echo $X[$m][$n] . '           ';
}
}

?>
  