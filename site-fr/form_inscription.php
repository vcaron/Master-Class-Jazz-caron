<?php
session_start();
require 'db.php';

if(!empty($_POST )){

    $errors = array();

    if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])){
        $_SESSION['error'] = 'Votre pseudo n\'est pas valide (alphanumérique)';
    } else {
        $req = $pdo->prepare('SELECT id FROM membres WHERE Pseudo = ?');
        $req->execute([$_POST['pseudo']]);
        $user = $req->fetch();
        if($user){
            $_SESSION['error'] = 'Ce pseudo est déjà pris';
            $errors['pseudo'] = 'Ce pseudo est déjà pris';
            echo '<script type="text/javascript">window.location="index.php";</script>';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM membres WHERE Email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $_SESSION['error'] = 'Cet email est déjà utilisé pour un autre compte';
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
            echo '<script type="text/javascript">window.location="index.php";</script>';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['error'] = 'Vous devez rentrer un mot de passe valide';
        $errors['password'] = 'Vous devez rentrer un mot de passe valide';
        echo'les mots de passe ne correspondent pas';
       print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")',2000);</script>");

    }
    if(empty($errors)){

       $req = $pdo->prepare("INSERT INTO membres SET Pseudo = ?, Password = ?, Email = ?, Prenom = ?, Nom = ?, Navette = ?, Accompagné = ?, Cours = ?");
       $req->execute([$_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['prenom'], $_POST['nom'], $_POST['Navette'], $_POST['Accompagné'], $_POST['Cours']]);
       echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }
echo(lol2);

}
?>