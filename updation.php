<?php
$size=sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
	$index1="bid".$i;
	$bid[$i]=$_POST[$index1];
	$index2="price".$i;
	$title[$i]=$_POST[$index2];
	$index3="title".$i;
	$price[$i]=$_POST[$index3];
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($i=1;$i<=$records;$i++)
{
$q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]'
where bid=$bid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>updation</title>
</head>
<body>
<h1>Book Record Management</h1>
<?php  echo $size. "Records updated"; ?></p>
Go back to home page <a href="home.php">click here</a>
</body>
</html>