<html>
<head>
<title>Radio</title>
<body>
<form action="Radio.php" method="get">
<br>
<input type="radio" name="r1" value ="s"> Science
<br>
<input type="radio" name="r2" value ="c"> Commerce
<br>
<input type="submit" value ="click"> 
</form>
</body>
</html>
<?php
$k=$_GET['r1'];
if(strcmp($k,"s")==0)
echo 'You have chosen the Science Stream';
else
echo 'You have chosen the commerce Stream';
?>
