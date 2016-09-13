<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.36
 */




namespace LabQueue;

include "Queue.php";
include "Person.php";

use LabQueue\Person;
use LabQueue\Queue;

if (!file_exists("Queue.txt")) {
    $queue = new Queue();
} else {
    $file_contents = file_get_contents("Queue.txt");
    $queue = unserialize($file_contents);
}

$user = new Person($_POST["name"]);
$queue->addPerson($user);
file_put_contents("Queue.txt", serialize($queue));