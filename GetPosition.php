<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.28
 */

session_start();
$id = session_id();

if(file_exists("Queue.txt")){
    $file_content = file_get_contents("Queue.txt");
    $queue = unserialize($file_content);
    $position = array_search($id, array_keys($queue));
    echo json_encode($position);
}else{
    echo json_encode(-1);
}
