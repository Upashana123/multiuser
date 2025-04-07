<?php
include("CONNECT.PHP");
$block_id=$_REQUEST['blk_id'];
$sql= "UPDATE `multi_user` SET `Auth`='1' WHERE `UID`='$block_id'";
$data=mysqli_query($conn,$sql);
if($data)
{
    echo"<script>alert('User blocked....')</script>";
    echo"<script>window.location.href='admin.php'</script>";
}
else
{
    echo "Error";

}
?>