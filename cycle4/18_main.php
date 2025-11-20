<?php
session_start();
include('18_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <h2>Login Page</h2>
    <form action="18_check.php" method="post">
        Username: <input type="text" name="uname" required><br><br>
        Password: <input type="password" name="pword" required><br><br>
        <input type="submit" name="submit" value="Login"><br>
    </form>

    <?php
    if (isset($_GET['msg'])) {
        echo "<br><b style='color:red'>" . htmlspecialchars($_GET['msg']) . "</b><br>";
    }
    ?>
</center>
</body>
</html>

