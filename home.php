<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>View Book Record</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
<style type="text/css">
h1{
	color:green;
	text-decoration:underline;
}

</style>
</head>
<body>
<h2>Hello, <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>
<h1>Book Record Management</h1>
<a href="insertionform.php">Insert Book</a><br/>
<a href="view.php">View Book</a><br/>
<a href="deleteform.php">Delete Book Records</a><br/>
<a href="updateform.php">Update Book Record</a><br/>
</body>
</html>