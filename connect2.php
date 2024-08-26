<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];  
    $password = $_POST['password'];  

    $sql = "SELECT * FROM `admin_login` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: admin.php");
        exit();  // Important to stop further script execution
    } else {
        echo '<script>
        window.location.href = "login.php";
        alert("Login failed. Invalid username or password!!!");
        </script>';
    }

}
?>