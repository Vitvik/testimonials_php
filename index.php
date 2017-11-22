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

$dbconect = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

require_once 'load.php';