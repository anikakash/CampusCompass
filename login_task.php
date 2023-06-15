<?php include("dbcon.php");

session_start();

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        if ($username && $password) {
            $query   = "SELECT * FROM `admin` WHERE username='$username' AND password='" . $password . "'";
            $result = mysqli_query($connection, $query);
            include_once './login_success.php';
        }
    }
}
?>