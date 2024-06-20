<?php

function changeCase($str)
{
$changed='';

for($i=0; $i<strlen($str) ; $i++)
{
$ch=$str[$i];
if(ctype_upper($ch))
{
$changed.=strtolower($ch);
}
else if (ctype_lower($ch))
{
$changed.=strtoupper($ch);
}
else
{
$changed.=$ch;
}
}

return $changed;
}

$s="My Name IS souMIK.";
$ans= changeCase($s);

echo ' The updated sentence is : '. "<br>";
echo $ans;
?>