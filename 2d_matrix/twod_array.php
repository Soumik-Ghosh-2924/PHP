<?php
$fruit=array(array('apple', 'red'), array('guava', 'green'), array('banana', 'yellow'));
for($i=0,$j=1;$i<3;$i++)
{
echo 'The colour of fruit : '. $fruit[$i][0].' is : '.$fruit[$i][$j]."<br>";
}
?>