<?php
include("CONNECT.PHP");
session_start();
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$sql = "SELECT * FROM `multi_user` WHERE `Email`='$email' AND `Password`='$password'";
$data = mysqli_query($conn, $sql);
if (mysqli_num_rows($data) > 0) {
    $result = mysqli_fetch_assoc($data);
    if ($result['User_type'] === 'CLIENT') 
    {
        if($result['Auth']=='1')
        {
            echo "<script>alert('You are blocked by the admin....')</script>";
            echo "<script>window.location.href='login.php'</script>";

        }
        else
        {
            header("location:client.php");
            $_SESSION['id'] = $result['UID'];


        }
    } else if ($result['User_type'] === 'ADMIN') {
        header("location:admin.php");
        $_SESSION['id'] = $result['UID'];
    }
} else {
    echo "not logged in";
}
