<!DOCTYPE html>
<html lang="en">
<head>
    <title>Countries code</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="decoration/cloud-background.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="decoration/style.css">
    <script src="decoration/validateTextField.js"/>
    <style>
        input[type="text"]{
            width: 66vw;
        }

        #btnSubmit{
            width: 8vw;
        }


        #clouds{
            position: absolute;
            left: 0;
            bottom: 0px;
            width: 100%;
            overflow-x: hidden;
            opacity: 0.7;
        }
        a:hover{
            color: white;
            background: rgba(0,0,0,0.7);
        }

        p{
            margin:30px;
            font-size: 25px;
            color: white;
        }

    </style>
</head>
<body>

<?php
    session_start();
    if($_SESSION['country'] == null) header('location:index.html');
?>

<div>
    <div class="container" style="padding-top: 30px">
        <form action="database_php/GetCountry.php" method="GET">
            <h1>Enter the country's name :</h1>
            <input type="text" name="countryName">
            <input type="submit" id="btnSubmit" value="SEARCH">

        </form>
    </div>

    <div class="content">
        <div>
            <div style="clear: both; margin: 25px;">
                <a href="index.html" style="float: left; margin-left: 35px" > &lt; Homepage</a>
                <a href="crud.html" style="float: left">CRUD Function&gt; </a>
            </div>
        <div class="top-content" style="clear: both; margin: 35px;">

           <p><?php echo $_GET['message']?></p>

            <div style="clear: both;margin:25px;">


            </div>
        </div>
        </div>

<div style="clear: both;"></div>

    </div>

    <div id="footer">
        <span>Lectured by: Pro. Radu Cretulescu</span><br>
        <span>Created &nbsp;by: Mr. Samrith Yoeun</span>
    </div>
</div>
<div id="clouds">
    <div id="cloud3"></div>
    <div id="cloud1"></div>
    <div id="cloud2"></div>
</div>
<?php //session_abort()?>

</body>
</html>