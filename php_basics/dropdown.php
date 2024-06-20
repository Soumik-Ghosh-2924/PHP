<html>
<head>
<title>dropdown</title>
<body>
<form action="dropdown.php" method="get">
<br>

Your ambition <select name="a">
<option value=1> Engineer </option>
<option value=2> Doctor </option>
<option value=3> Scientist </option>
<option value=4> Cricketer </option>
</select>

<br>
<input type="submit" value ="click"> 

</form>
</body>
</html>

<?php
$p=(int)$_GET['a'];
if($p==1)
echo 'You want to work in Corporate.';
if($p==2)
echo 'You want to serve patients.';
if($p==3)
echo 'You want to invent something new.';
if($p==4)
echo 'You want to score a century.';
?>
