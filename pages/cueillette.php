<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/saisie.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <title>Tea-rapy: Saisie de cueillette</title>
</head>
<body>

    <div class="container-fluid">
        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">
            <button class="close-btn" id="closeBtn">&times;</button>
            <h1>Tea-rapy</h1>
            <ul>
                <li><a href="acceuilUser.html">Accueil</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div>
        <!-- SIDEBAR -->

        <!-- HEADER -->
        <header class="header">
            <div class="col-md-10">
                <button class="open-btn" id="openBtn">&#9776;</button>
            </div>
            <div class="col-md-2">
                <div class="user-icon">
                    <img src="../assets/images/user-icon.png" alt="User Icon">
                </div>
                <div class="user-info">
                    <p>Nom de l'utilisateur</p>
                </div>
            </div>
        </header>    
        <!-- HEADER -->

        <!-- CONTENT -->
        <div class="row" id="formulaire">
            <div class="col-md-12">
                    <form class="form-horizontal center-block" action="traitementCRUD.php">
                        <input type="hidden" name="action" value="a"> <br>
                        <input type="hidden" name="tool" value="saisi_cueillette">
                        <div class="form-group">
                            <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                            <div class="col-sm-8">
                            <p>Date</p>
                            <input type="date" name="theDate" id="theDate" class="form-control" id="inputEmail3" placeholder="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                            <div class="col-sm-8">
                            <p>Cueilleur</p>
                                <select class="form-control" name="idPicker" id="idPicker">
                                    <?php  include "../inc/crudFunctions.php";
                                    $allPicker = getAllPicker();
                                    for ($i=0; $i < count($allPicker)  ; $i++) { ?>
                                                <option value="<?php echo $allPicker[$i]['id'] ?>"><?php echo $allPicker[$i]['name'] ?></option>
                                    <?php } ?>
                                </select>                
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                            <div class="col-sm-8">
                            <p>Parcelle</p>
                            <select class="form-control" name="idParcel" id="idParcel">
                                <?php
                                    $allParcel = getAllParcel();
                                    for ($i=0; $i < count($allParcel)  ; $i++) { ?>
                                        <option value="<?php echo $allParcel[$i]['id'] ?>" id="parcel<?php echo $allParcel[$i]['id'] ?>"><?php echo $allParcel[$i]['id'] ?></option>
                                <?php } ?>
                            </select>                
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                            <div class="col-sm-8">
                            <p>Poids</p>
                            <div id="erreur"></div>
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Poids" name="poidsCueilli" id="poidsCueilli">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default">insert</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>






        <script>
        window.addEventListener ("load",function(){
            var poidsCueilli = document.getElementById('poidsCueilli');
            var erreur = document.getElementById('erreur');
            
            poidsCueilli.addEventListener('input', function() {
                var select = document.getElementById('idParcel');
                var valeurSelectionnee = select.value;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "getRestInParcel.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                        var response = JSON.parse(xhr.responseText);
                        if (parseFloat(poidsCueilli.value) > parseFloat(response)) {
                            poidsCueilli.value = parseFloat(response);
                            erreur.innerHTML = "<p>La valeur que vous avez tentée est incorrecte</p>";
                            setTimeout(function() {
                                erreur.innerHTML = "";
                            }, 5000);
                        }
                    }
                };
                var date = document.getElementById('theDate').value ;
                var sending="date="+ date +"&idParcel=" + valeurSelectionnee;
                xhr.send(sending);

            });
        });
    </script>
        <!-- CONTENT -->
        
        <!-- FOOTER -->
        <footer>ETU002369 - ETU002405 - ETU002601</footer>
        <!-- FOOTER -->
    <script src="../assets/js/sidebar.js"></script>
    </div>
</body>
</html>