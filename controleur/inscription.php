<?php
session_start();
$_SESSION['error'] =[];

function verify($var, $msg) {
    if (!empty($var)) {
        echo "$msg : $var";
        $_SESSION[$msg] = $var;
        unset($_SESSION['error'][$msg]);
    }
    else {
        $_SESSION['error'][$msg] = "<span style='font-size: 8px;padding-left: 5px;color: red;'>Le $msg est invalide</span>";
    }
}

//Recuperation des données
$name = $_POST["nom"];
$last_name = $_POST['post-nom'];
$first_name = $_POST['prenom'];
$matricule = $_POST['matricule'];
$gender = $_POST['genre'];
$promotion = $_POST['promotion'];
$email = $_POST['email'];

//Vérifications des données envoyées et affichage
verify($name, 'nom');
verify($last_name, 'post-nom');
verify($first_name, 'prenom');
verify($matricule, 'matricule');
verify($gender, 'genre');
verify($promotion, 'promotion');
verify($email, 'email');

if (!empty($_SESSION['error'])) header("Location: ../index.php");