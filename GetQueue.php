<?php
/**
 * Created by PhpStorm.
 * User: jorgenvalstad
 * Date: 12.09.2016
 * Time: 17.28
 */

namespace LabQueue;

include "Queue.php";
include "Person.php";

use LabQueue\Person;
use LabQueue\Queue;


$file_content = file_get_contents("Queue.txt");
$queue = unserialize($file_content);
echo "Du er nr: ";
//$user = $queue->
echo json_encode($queue->getPosition($queue->getCurrentUser()));
echo " I køen";