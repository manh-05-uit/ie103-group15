<?php
    $dsn="odbc:dkhp";
    try{
        $conn = new PDO($dsn);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Không thể kết nối database".$e->getMessage();
    }
?>