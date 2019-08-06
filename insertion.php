<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="insert into book (title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Insertion</title>
</head>
<body>
<h1>Book Record Management</h1>
<?php if($status==1) echo "Record Inserted"; else echo "insertion failed"; ?></p>
Do u wanna insert more record? <a href="insertionform.php">click here</a>
</body>
</html>