<?php
include_once('connection.php');

if (isset($_POST['convert'])) {
    $username = $_POST['username'];
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];
    $convert_value = $_POST['convertedAmount'];

    $sql = "INSERT INTO `conversiontable`( `username`, 'from_currency',`to_currency`,'converted_value') VALUES ('$username''$from_currency','$to_currency','$convert_value')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:cindex.php');
        echo "<script>alert('New User Register Success');</script>";
    } else {
        die(mysqli_error($conn));
    }
}
