<?php
    include_once "connection.php";
    include_once "uploadImage.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $iso2 = $_POST['iso2'];
    $iso3 = $_POST['iso3'];
    $phone = $_POST['phone'];
    $population = $_POST['population'];
    $area = $_POST['area'];
    $gdp = $_POST['gdp'];

    switch(strtolower($_POST['action'])){
        case "add country":
            echo "add country";

            break;
        case "update country":
            echo "update country";
            break;
        case "delete country":
            echo "delete country";
            break;

    }

?>