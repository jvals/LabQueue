<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.36
 */
$TESTING = false;
session_start();

if($TESTING){
    // Need to generate random id if you want to add multiple users to queue from same session
    $id = md5(rand());
}else{
    $id = session_id();
}

$name = $_POST["name"];
if(isset($name) && strlen($name) > 0){
    if (!file_exists("Queue.txt")) {
        $queue = array();
    } else {
        $file_contents = file_get_contents("Queue.txt");
        $queue = unserialize($file_contents);
    }

    // Don't add person if session id is already in list
    if(!key_exists($id, $queue)){
        $queue[$id] = $name;
        file_put_contents("Queue.txt", serialize($queue));
    }
}
