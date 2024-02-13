<?php 
    if ($_GET['tool']=="spent") {
        header ('Location: depense.php?tool='.$_GET['tool']."&action=u&id=".$_GET['id']);
    }else {
        header ('Location: AcceuilAdmin.php?tool='.$_GET['tool']."&action=u&id=".$_GET['id']);
    }
?>