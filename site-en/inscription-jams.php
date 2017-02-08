<?php
session_start();
require 'db.php';

if(!empty($_POST)){

    $errors = array();

    if(empty($errors)){

        $req = $pdo->prepare("INSERT INTO jam SET morceau = ?, jour = ?, instrument = ?, prenom = ?");

        $req->execute([$_POST['morceau'], $_POST['jour'], $_POST['instrument'], $_POST['prenom']]);

        echo '<script type="text/javascript">window.location="Jam.php";</script>';
        exit();
    }


}
?>