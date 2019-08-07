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
<title>Update Book Record</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
<style type="text/css">
h1{
	color:green;
	text-decoration:underline;
}
img
{
width:500px;
height:300px;
color:lightblue;
border:solid;
	
}

</style>
</head>
<body bgcolor="lightblue">
<h1>Book Record Management</h1>
<img src="book2.jpg" alt="image" align="right"/>
<form action="updation.php" method="post">
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
<td><?php echo $row['bid'];?><input type="hidden" name="bid<?php echo $i; ?>" value="<?php echo $row['bid'];?>"</td>
<td><input type="text"name="title<?php echo $i; ?>" value="<?php echo $row['title'];?>" /></td>
<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>" /></td>
<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author']; ?>" /></td>
</tr>
	<?php
}
?>
</table>
<input type="submit" value="update" />
</form>
</body>
</html>