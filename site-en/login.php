<!-- modal connexion form -->
<?php
require 'db.php';
session_start();
if (!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {

    $req = $pdo->prepare('SELECT * FROM membres WHERE (pseudo = :pseudo OR email = :pseudo) AND password= :password');
    $req->execute(['pseudo' => $_POST['pseudo'],'password' => $_POST['password']]);
    $user = $req->fetch();

    if ($user) {
        $_SESSION['auth'] = $user;
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    } else {
        $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }
}
?>