<?php 
    try {
        $host = "localhost";
        $dbname = "web_ban_dienthoai";
        $username = "root";
        $password = "";
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8;",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die ("Lỗi: " .$e ->getMessage());
    } 

?>