<?php
    include "../inc/crudFunctions.php";
    if ($_GET['action']=="a") { //add
        if ($_GET['tool']=="tea") {
            teaCategInsert($_GET['name'], $_GET['output']);     
        }elseif ($_GET['tool']=="parcel") {
            parcelInsert($_GET['size'],$_GET['idTeaCategory'] );
        }elseif ($_GET['tool']=="picker") {
            pickerInsert($_GET['name']) ;
        }elseif ($_GET['tool']=="categSpent") {
            categSpentInsert($_GET['name']) ;
        }elseif ($_GET['tool']=="spent") {
            $newSpent['idcategSpent']=$_GET['idcategSpent'];
            $newSpent['spent']=$_GET['spent'];
            $newSpent['theDate']=$_GET['theDate'];
            spentInsert($newSpent);
        }elseif ($_GET['tool']=="saisi_cueillette") {
            pickingInsert($_GET['idParcel'],$_GET['idPicker'], $_GET['poidsCueilli'],$_GET['theDate']);
        }
    }elseif ($_GET['action']=="u") { //update
        if ($_GET['tool']=="tea") {
            $newTea["name"]= $_GET['name'];
            $newTea["output"]= $_GET['output'];
            teaCategUpdate($_GET['id'], $newTea);
        }elseif ($_GET['tool']=="parcel") {
            $newParcel['size']=$_GET['size'];
            $newParcel['idTeaCategory']=$_GET['idTeaCategory'];
            $newParcel["startDate"]=$_GET['startDate'];
            parcelUpdate($_GET['id'], $newParcel);
        }elseif ($_GET['tool']=="picker") {
            $newPicker["name"] = $_GET['name'];
            pickerUpdate($_GET['id'], $newPicker);
        }elseif ($_GET['tool']=="categSpent") {
            $newCategSpent["name"] = $_GET['name'];
            pickerUpdate($_GET['id'], $newCategSpent);
        }elseif ($_GET['tool']=="spent") {
            $newSpent['idcategSpent']=$_GET['idcategSpent'];
            $newSpent['spent']=$_GET['spent'];
            $newSpent['theDate']=$_GET['theDate'];
            spentUpdate($_GET['id'], $newSpent);
        }
    }elseif ($_GET['action']=="d") { //delete
        if ($_GET['tool']=="tea") {
            delete("teaCategory", $_GET['id']);
        }elseif ($_GET['tool']=="parcel") {
            delete("parcel", $_GET['id']);
        }elseif ($_GET['tool']=="picker") {
            delete("picker", $_GET['id']);
        }elseif ($_GET['tool']=="categSpent") {
            delete("categSpent", $_GET['id']);
        }elseif ($_GET['tool']=="spent") {
            delete("spent", $_GET['id']);
        }
    }
    if ($_GET['tool']=="spent"||$_GET['tool']=="saisi_cueillette") {
        header ('Location:AcceuilUser.php');
    }else{
        header ('Location:AcceuilAdmin.php');
    }
?>