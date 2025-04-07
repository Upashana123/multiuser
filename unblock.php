<?php
include("CONNECT.PHP");
$unblock_id = $_REQUEST['unblk_id'];
$sql = "UPDATE `multi_user` SET `Auth`='0' WHERE `UID`='$unblock_id'";
$data = mysqli_query($conn, $sql);
if ($data) {
    echo "<script>alert('User Unblocked....')</script>";
    echo "<script>window.location.href='admin.php'</script>";
} else {
    echo "Error";
}
