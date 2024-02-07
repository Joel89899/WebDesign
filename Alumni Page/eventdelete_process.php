<?php
include("dp.php");

if (!isset($_GET['eid'])) {
    die();
}
$event_id = $_GET['eid'];
$delete = "DELETE from events WHERE ID=$event_id";
mysqli_query($link, $delete);
header('location:admin.php');