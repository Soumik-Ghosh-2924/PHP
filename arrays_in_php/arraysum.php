<?php
function add_ele($k)
{
$sum=0;
$n=count($k);
for($i=0; $i<$n; $i++)
{
$sum=$sum+$k[$i];
}
echo 'Sum of all the array elements : '. "<br>";
echo " ".$sum;
} 

$p=array(6,3,1,7,9);
$l=count($p);
echo ' The data in the array is : ' . "<br>";

for($i=0; $i<$l ; $i++)
{
echo $p[$i]. "  ";
}
echo "<br>";

add_ele($p);
?>