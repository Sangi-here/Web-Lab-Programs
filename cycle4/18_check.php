<?php
session_start();
include('18_connect.php');

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    // Verify user in DB
    $sql = mysqli_query($conn, "SELECT * FROM userlogin WHERE uname='$uname' AND pword='$pword'");
    $row = mysqli_fetch_assoc($sql);

    if ($row) {
        $_SESSION['login_user'] = $uname;
        header("Location: 18_welcome.php");
        exit; // important: stops script execution
    } else {
        header("Location: 18_main.php?msg=Invalid Username or Password");
        exit;
    }
} else {
    // If someone opens check.php directly without submitting form
    header("Location: 18_main.php?msg=Please login first");
    exit;
}
?>

