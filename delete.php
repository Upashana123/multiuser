<?php
include("CONNECT.PHP");
$deleteID = $_REQUEST['del_id'];
$sql = "DELETE FROM `multi_user`  WHERE `UID`='$deleteID'";
$data = mysqli_query($conn, $sql);
if ($data) {
    //echo "Deleted";
    echo "<script>alert('User deleted....')</script>";
    echo "<script>window.location.href='admin.php'</script>";
} else {
    echo "not";
}
