<?php
include("17_connect.php");
?>
<html>
<head>
<tile>Book Details</title>
</head>
<body>
<center>
<h2>Book Details</h2>
<form action="17_display.php" method="POST">
Book Number:<input type="number" name="bookno"><br><br>
Book Title:<input type="text" name="booktitle"><br><br>
Book Edition:<input type="text" name="booked"><br><br>
Book Publisher:<input type="text" name="bookpub"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>
