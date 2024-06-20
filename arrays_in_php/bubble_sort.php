<?php
echo  "<font face='algerian' size=10>";
$num=array(6,3,8,5,4);
echo "<br>" . 'Data in array :' ;
for($i=0;$i<5;$i++)
{
echo $num[$i].'  ';
}

for($i=0;$i<5;$i++)
{
for($j=$i+1;$j<5;$j++)
{
if($num[$i]>$num[$j])
{
$t=$num[$i];
$num[$i]=$num[$j];
$num[$j]=$t;
}
}
}

echo "<br>". 'Data in Sorted Array :' ;
for($i=0;$i<5;$i++)
{
echo $num[$i].'  ';
}
?>
