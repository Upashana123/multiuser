<?php
include("CONNECT.PHP");
session_start();
$UID = $_SESSION['id'];
$sql = "SELECT * FROM `multi_user` WHERE `UID` = '$UID'";
$data = mysqli_query($conn, $sql);
?>
<table>
    <tr>
        <th>UID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Degree</th>
        <th>Language</th>
        <th>Image</th>
        <th>User Type</th>
    </tr>
    <?php
    $i = 3;
    while ($result = mysqli_fetch_assoc($data)) {
    ?>
        <tr>
            <td><?php echo $i;
                $i++; ?></td>
            <td><?php echo $result['NAME']; ?></td>
            <td><?php echo $result['Email']; ?></td>
            <td><?php echo $result['Phone']; ?></td>
            <td><?php echo $result['Gender']; ?></td>
            <td><?php echo $result['Degree']; ?></td>
            <td><?php echo $result['Language']; ?></td>
            <td><img src="<?php echo $result['Image']; ?>" height="100px" width="100px"></td>
            <td><?php echo $result['User_type']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>