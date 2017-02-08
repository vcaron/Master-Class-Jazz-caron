<?php
session_start();
unset($_SESSION['auth']);
$_SESSION['toast']['success'] = 'Vous êtes maintenant déconnecté';
header('Location: index.php');