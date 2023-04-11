<?php
require_once "../config/db.php";

$json = array();
$sql = "SELECT * FROM tbl_events ORDER BY id";

$statement = $conn->prepare($sql);
$statement->execute();
$dbResult = $statement->get_result();

$eventArray = array();
while ($row = mysqli_fetch_assoc($dbResult)) {
    array_push($eventArray, $row);
}
mysqli_free_result($dbResult);

mysqli_close($conn);
echo json_encode($eventArray);
?>