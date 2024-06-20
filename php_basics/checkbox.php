<html>
<head>
<title>checkbox</title>
</head>
<body>
<form action="checkbox.php" method="get">
<br>
Tick the things you posses : <br>
<input type='checkbox' name='c1' value=1>Refrigerator<br>  !!name is the object created & value is (the actual value) the object holds.
<input type='checkbox' name = 'c2'  value =2>Car<br>
<input type='checkbox' name = 'c3'  value =3>Bicycle<br>

<input type='submit'value ='click'><br>
</form>
</body>
</html>

<?php
$p=(int)$_GET['c1'];
$q=(int)$_GET['c2'];
$r=(int)$_GET['c3'];


if($p==1)
echo 'You are a middle class person as you own a refrigerator only.';
if($q==2)
echo 'You are a rich person as you own a car.';
if($r==3)
echo 'You are an ordinary person as u just a bicycle.';
?>
