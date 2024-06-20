<html>
<head>
<title>
connectivity</title>
</head>
<body>
<?php
$user="root";
$pass="";
$host="localhost";
$dbname="snc";
$conn=mysqli_connect($host,$user, $pass, $dbname);
if($conn)
{
$sql="select name, course,from student";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
echo 'Name of student admitted :' .$row['name'].' and the course taken by student :' .$row['course']. "<BR>";
}
}
mysqli_close($conn);
?>
</body> 
</html>