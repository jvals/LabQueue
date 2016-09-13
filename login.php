<?php

require_once 'Password.php';

if(isset($_POST["password"])){
    $pw = $_POST["password"];
    echo json_encode($pw === $PASSWORD);
}else{
    echo json_encode(false);
}
