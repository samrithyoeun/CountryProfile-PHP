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
    $flag=  $_FILES["fileToUpload"]["name"];

    switch(strtolower($_POST['action'])){
        case "add country":
                uploadImage();
                $sql = "INSERT INTO tblCountry VALUES ($id,'$name','$phone','$iso2','$iso3',$population,$area,'$gdp','$flag')";
                if (mysqli_query($link, $sql)) {
                    header('location:GetCountry.php?countryName='.$name);
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }


            break;
        case "update country":
            uploadImage();
            $sql = "UPDATE tblCountry SET name = '$name', iso ='$iso2', iso3 ='$iso3', code ='$phone',population =$population,area =$area,gdp ='$gdp', flag ='$flag' WHERE id= $id" ;
            if (mysqli_query($link, $sql)) {
                header('location:GetCountry.php?countryName='.$name);
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }



            break;
        case "delete country":
            $sql ="DELETE FROM tblCountry WHERE id =$id";
            if (mysqli_query($link, $sql)) {
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            break;

    }

    $link->close();
?>