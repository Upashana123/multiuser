<?php
include("CONNECT.PHP");
session_start();
$UID = $_SESSION['id'];
$sql = "SELECT * FROM `multi_user` WHERE `User_type`='CLIENT'";
$data = mysqli_query($conn, $sql);
?>
<table>
    <tr>
        <th>Sl. No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th> 
        <th>Gender</th>
        <th>Degree</th>
        <th>Language</th>
        <th>Image</th>
    </tr>
    <?php
    $i = 1;
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
            <!-- <td><?php echo $result['User_type']; ?></td> -->
            <td>
                <a href="delete.php?del_id=<?php echo $result['UID']; ?>" onclick="return confirm('Are you sure?')"><button>Delete</button></a>
                <?php
                if ($result['Auth'] == 0) 
                {
                ?><a href="block.php?blk_id=<?php echo $result['UID']; ?>"><button>Block</button></a><?php
                }
                else
                {
                    ?><a href="Unblock.php?unblk_id=<?php echo $result['UID']; ?>"><button>Unblock</button></a><?php

                }
                ?>
                                                                                                    
            </td>

        </tr>
    <?php
    }
    ?>
</table>