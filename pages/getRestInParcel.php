<?php
    include '../inc/crudFunctions.php';
    $idParcel= $_POST['idParcel'];
    $dateInput = $_POST['date'];
    $mois = date('m', strtotime($dateInput));
    $annee = date('Y', strtotime($dateInput));

    echo json_encode (getWeightParcel($mois, $annee, $mois, $annee,$idParcel));
?>