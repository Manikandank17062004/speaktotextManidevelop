<?php
// Dummy credentials
$valid_username = "admin";
$valid_password = "1234";

$uname = $_POST['uname'];
$upswd = $_POST['upswd'];

if ($uname === $valid_username && $upswd === $valid_password) {
    // Redirect to next page
    header("Location: sp.html");
    exit();
} else {
    // Redirect back to login with error
    echo "<script>alert('Invalid credentials'); window.location.href='sp.html';
    </script>";
}
?>
