<?php
session_start();
$conn = new mysqli('remotemysql.com', 'WK1eggxcgK', 'z9HcRqhc5i', 'WK1eggxcgK');
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql="update techbin set points=".$_SESSION["points"]." where email='".$_SESSION['user']."'";
$conn->query($sql);
?>
