<?php
    include "../inc/fonction.php";
    $email= $_POST['email'];
    $mdp= $_POST['mdp'];
    $status= $_POST['mode'];
    $user= authentication($email, $mdp, $status);
    if ($user !=null) {
        session_start ();
        $_SESSION ['user'] = $user;
        if ($status==0) {
            header ('Location:AcceuilAdmin.php?tool=tea&action=a');
        }else{
            header ('Location:AcceuilUser.php?action=a');
        }
    }else {
        header ("Location:login.php?erreur=verifiez vos informations&mode=".$status);
    }
?>