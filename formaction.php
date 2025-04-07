<?php
include("CONNECT.PHP");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$language =  implode(", ", $_POST['language']);
$fileName = $_FILES['file']['name'];
$fileTmp = $_FILES['file']['tmp_name'];
$folder = "uploads/" . $fileName;
move_uploaded_file($fileTmp, $folder);
$User_type = 'CLIENT';
$auth = 0;
$sql = "INSERT INTO `multi_user`(`NAME`, `Email`, `Phone`, `Password`, `Gender`, `Degree`, `Language`, `Image`, `User_type`, `Auth`) VALUES ('$name','$email','$phone','$password','$gender','$degree','$language','$folder','$User_type','$auth')";
$data = mysqli_query($conn, $sql);
if ($data) {
    echo "data inserted";
    header("location:login.php");
} else {
    echo "not inserted";
}
