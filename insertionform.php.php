<!doctype html>
<html>
<head>
<title>Insertion Form</title>
<style type="text/css">
tr{
	background-color:pink;
}
img
{
width:600px;
height:400px;
color:lightblue;
border:solid;
	
}
</style>
</head>
<body bgcolor="lightblue">
<h1>Book Record Management</h1>
<img src="book2.jpg" alt="image" align="right"/>
<form action="insertion.php" method="post">
<table>
<tr>
<th>title</th>
<td><input type="text" name="title" required/></td>
</tr>
<tr>
<th>price</th>
<td><input type="text" name="price" required/></td>
</tr>
<tr>
<th>author</th>
<td><input type="text" name="author"/></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="insert"/></td>
</tr>
</table>
</form>
</body>
</html>