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
<title>Delete Book Record</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
<style type="text/css">
h1{
	color:green;
	text-decoration:underline;
}
</style>
</head>
<body bgcolor="lightblue">
<h1>Book Record Management</h1>
<form action="deletion.php" method="post">
<table id="view_table">
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
<th>select to delete</th>
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
<td><input type="checkbox" value="<?php echo $row['bid']; ?>" name="b<?php echo $i; ?>" /></td>
</tr>
	<?php
}
?>
<tr>
<td colspan="5"><input type="submit" value="Delete" /></td>
</tr>
</table>
</body>
</html>
