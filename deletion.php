<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++)
{
$index="b".$i;
if(isset($_POST[$index]))
$b_id[$i]=$_POST[$index];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($k=1;$k<=$size;$k++)
{
$q="delete from book where bid=$b_id[$k]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<h1>Book Record Management</h1>
<?php  echo $size. "Records Deleted"; ?></p>
Go back to home page <a href="home.php">click here</a>
</body>
</html>