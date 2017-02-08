<?php
$pdo = new PDO('mysql:dbname=etudiant;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);