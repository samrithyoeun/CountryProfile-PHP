<?php
/**
 * Created by PhpStorm.
 * User: samrith
 * Date: 9/1/18
 * Time: 12:05 AM
 */

$link = mysqli_connect("localhost", "root", "", "countryDB");

if (!$link) {
    echo "Error: Unable to connect to MySQL."."<br/>";
    echo "Debugging errno: " . mysqli_connect_errno()."<br/>";
    echo "Debugging error: " . mysqli_connect_error()."<br/>";
    exit;
}

echo "Success" . PHP_EOL;




?>