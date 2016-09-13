<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.28
 */
require_once 'Password.php';
session_start();
$id = session_id();

$isAdmin = isset($_COOKIE['pw']) && $_COOKIE['pw'] = $PASSWORD;

if(file_exists("Queue.txt") && $isAdmin){
    $file_content = file_get_contents("Queue.txt");
    $queue = unserialize($file_content);
    array_shift($queue);
    file_put_contents("Queue.txt", serialize($queue));
}
