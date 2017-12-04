<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 09.11.2017
 * Time: 19:55
 */
session_start();
ini_set('display_errors', 1);

include_once "config.php";

$db = [ PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,];
$dbconect = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $db);



require_once 'load.php';