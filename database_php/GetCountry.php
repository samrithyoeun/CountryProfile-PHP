<?php
/**
 * Created by PhpStorm.
 * User: samrith
 * Date: 9/1/18
 * Time: 8:54 PM
 */

include_once "connection.php";
$name  = $_GET['countryName'];
$sql = "SELECT * FROM tblCountry Where LOWER(name) = LOWER('$name')";
$result = $link->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $link->error);
}

if ($result->num_rows > 0) {
    session_start();

    $row = $result->fetch_assoc();
    $link->close();
    $_SESSION['country']= $row ;
    header('location:../result.php');

} else {
    header("location:../result-null.php");
    $link->close();
}



?>

