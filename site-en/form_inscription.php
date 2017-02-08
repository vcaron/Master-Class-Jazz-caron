<?php
session_start();
require 'db.php';

if(!empty($_POST)){

    $errors = array();

    if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])){
        $_SESSION['error'] = 'Your pseudo is not valid (alphanumérique)';
    } else {
        $req = $pdo->prepare('SELECT id FROM membres WHERE Pseudo = ?');
        $req->execute([$_POST['pseudo']]);
        $user = $req->fetch();
        if($user){
            $_SESSION['error'] = 'Pseudo already used';
            $errors['pseudo'] = 'Pseudo already used';
            echo '<script type="text/javascript">window.location="index.php";</script>';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Your email is not valid";
    } else {
        $req = $pdo->prepare('SELECT id FROM membres WHERE Email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $_SESSION['error'] = 'Email already use';
            $errors['email'] = 'Email already use';
            echo '<script type="text/javascript">window.location="index.php";</script>';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['error'] = 'Password invalid';
        $errors['password'] = 'Password invalid';
        echo'Passwords do not match';
       print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")',2000);</script>");

    }

    if(empty($errors)){

        var_dump($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['prenom'], $_POST['nom'], $_POST['Navette'], $_POST['Accompagné'], $_POST['Cours']);

        $req = $pdo->prepare("INSERT INTO membres SET Pseudo = ?, Password = ?, Email = ?, Prenom = ?, Nom = ?, Navette = ?, Accompagné = ?, Cours = ?");

        $req->execute([$_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['prenom'], $_POST['nom'], $_POST['Navette'], $_POST['Accompagné'], $_POST['Cours']]);

        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }


}
?>