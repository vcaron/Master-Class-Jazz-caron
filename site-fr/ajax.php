<?php
require_once 'db.php';
session_start();

        $req = $pdo->query("SELECT * FROM jam ");
       //$events = $req->fetchAll("SELECT * FROM membres * where Instruments = ".$_POST["instruments"].");

$result = array();
foreach($events as $event){
    $result[]=$event;
}

echo json_encode($result);