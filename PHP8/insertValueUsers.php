<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=testdb',"root","");
    $username="admin";
    $tempPass="admin";
    $password=password_hash($tempPass,PASSWORD_DEFAULT);
    $sql="INSERT INTO users(username,pass) VALUES('$username','$password')";
    $pdo->exec($sql);
    echo "New record created successfully";
    $lastId=$pdo->lastInsertId();
    echo "Last inserted user id is $lastId";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>