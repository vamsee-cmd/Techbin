<?php
session_start();
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);
    $photoname = $_SESSION['user'].uniqid().'.jpeg';
    $result = file_put_contents('uploadPhoto/'.$photoname, $binary_data);
    $_SESSION['points']=$_SESSION['points']+2250;
    if($result) {
        echo 'success';
    } else {
        echo die('Could not save image! check file permission.');
    }
}
?>