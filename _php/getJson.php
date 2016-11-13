<?php

updateJson();

function updateJson(){

    include "config.php";

    //Attempting connection and query
    try{
        $conn = new PDO('mysql:dbname=' . DB_DATABASE . ';host=' . DB_HOST  . ';' ,DB_USERNAME , DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        $sql = "SELECT * FROM " . DB_TABLE;

        $query = $conn->prepare($sql);
        $query->execute();

        $result = $query->fetchAll();

        $memeJson = json_encode($result);

        echo $memeJson;
        //echo gettype($result);

        $conn = NULL; 

    } 
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }    
}
?>