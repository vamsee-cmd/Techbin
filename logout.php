<?php
session_start(); 
$conn = new mysqli('remotemysql.com', 'WK1eggxcgK', 'Q7gkaeCv2k', 'WK1eggxcgK');
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql="update techbin set points=".$_SESSION['points']." where email='".$_SESSION['user']."'";
$conn->query($sql);
session_unset();

session_destroy();

header("Location: ./login.php");
exit;
?>