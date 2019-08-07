<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select *from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>View Book Record</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
<style type="text/css">
h1{
	color:green;
	text-decoration:underline;
}
iframe
{
	width:100%;
	height:250px;
}
img
{
width:600px;
height:400px;	
}

</style>
</head>
<body bgcolor="lightblue">
<h1>Book Record Management</h1>
<iframe src="http://freecomputerbooks.com/compscCategory.html"></iframe>
<img src="books.jpg" alt="image" align="right"/>
<table id="view_table">
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<tr>
<td><?php echo $row['bid'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['author']; ?></td>
</tr>
	<?php
}
?>
</table>
</body>
</html>