<?php
#include db
include("dp.php");

#delete code
if (!isset($_GET['uid'])) {
    die();
}
$user_id = $_GET['uid'];
$delete = "DELETE from user WHERE ID=$user_id";
mysqli_query($link, $delete);
header('location:members_admin.php');
?>