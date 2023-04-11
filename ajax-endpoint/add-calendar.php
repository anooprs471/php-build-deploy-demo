<?php
require_once "../config/db.php";

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$statement = $conn->prepare('INSERT INTO tbl_events (title,start,end) VALUES (?,?,?)');
$statement->bind_param('sss', $title, $start, $end);
$rowResult = $statement->execute();
if (! $rowResult) {
    $result = mysqli_error($conn);
}
?>