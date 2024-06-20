<?php
function fibonacci($n)
{
if($n==0 || $n==1)
{
echo $n;
}

$a=0;
$b=1;
for($i=3;$i<=$n; $i++)
{
$c=$a+$b;
$a=$b;
$b=$c;
}

echo " The nth fibonacci term is : " . "<br>";
echo $b;
}

echo 'From the fibonacci series : ' . "<br>";
fibonacci(4);
?>