<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.28
 */

if(file_exists("Queue.txt")){
    $file_content = file_get_contents("Queue.txt");
    $queue = unserialize($file_content);
    echo json_encode(array_values($queue));
}else{
    echo json_encode([]);
}
