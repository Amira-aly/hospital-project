<?php 
    $host = "localhost";
    $user = "root";
    $password = '';
    $dbName = "hospital";
    $conn = mysqli_connect($host,$user,$password,$dbName);
    
    $select = "select * from `theem`";
    $s = mysqli_query($conn , $select);
    $row = mysqli_fetch_assoc($s);
    $numberofColor =  $row['color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- link css -->
    <?php if ($numberofColor == '2') : ?>
        <link rel="stylesheet" href="/hospital/css/light.css">
    <?php else : ?>
        <link rel="stylesheet" href="/hospital/css/dark.css">
    <?php endif; ?>
</head>
<body>