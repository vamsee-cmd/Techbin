<?php
session_start(); 
$conn = new mysqli('remotemysql.com', 'WK1eggxcgK', 'Q7gkaeCv2k', 'WK1eggxcgK');
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$_SESSION['points']=$_SESSION['points']-$_POST['rpoint'];
$sql="update techbin set points=".$_SESSION['points']." where email='".$_SESSION['user']."'";
$conn->query($sql);
?>