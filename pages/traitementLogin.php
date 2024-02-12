<?php
    include "../inc/fonction.php";
    $email= $_POST['email'];
    $mdp= $_POST['mdp'];
    $status= $_POST['mode'];
    $user= authentication($email, $mdp, $status);
    if ($user !=null) {
        $_SESSION ['user'] = $user;
        header ('Location:AcceuilUser.php');
    }else {
        header ("Location:formulaire.php?erreur=verifiez vos informations&mode=".$status);
    }
?>