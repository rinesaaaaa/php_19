<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Day 8</title>
</head>
<body>
    <?php
    $host="localhost";
    $user="root";
    $pass="";
    try{
        $con=new PDO("mysql:host=$host",$user,$pass);
        echo "Connected";
    }catch(Exception $e){
        echo "Not connected";
    }
    ?>
</body>
</html>