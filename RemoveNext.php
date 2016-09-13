<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.28
 */

session_start();
$id = session_id();

$file_content = file_get_contents("Queue.txt");
$queue = unserialize($file_content);
array_shift($queue);
file_put_contents("Queue.txt", serialize($queue));
