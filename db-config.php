<?php
const DB_DSN = 'mysql:host=102.37.142.42;dbname=test';
const DB_USER = "projet";
const DB_PASS = "Ichrakzemzmi123456?";



$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // encodage utf-8
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // faire des vrais requêtes préparées et non une émulation
);
