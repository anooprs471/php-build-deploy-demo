<?php
#$host = getenv("MYSQL_HOST");
#$user = getenv("MYSQL_USER");
#$pass = getenv("MYSQL_PASS");
#$db = getenv("MYSQL_DB");
$conn = mysqli_connect(getenv("MYSQL_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASS"), getenv("MYSQL_DB"));

if (! $conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
