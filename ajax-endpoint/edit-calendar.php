<?php
require_once "../config/db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$statement = $conn->prepare('UPDATE tbl_events SET title = ?, start= ?, end=? WHERE id = ?');
$statement->bind_param('sssi', $title, $start, $end, $id);
$rowResult = $statement->execute();
mysqli_close($conn);
?>