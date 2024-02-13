<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/acceuilUser.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <title>Tea-rapy: Accueil utilisateur</title>
</head>
<body>
    <div class="container-fluid">
        <div class="sidebar" id="sidebar">
            <button class="close-btn" id="closeBtn">&times;</button>
            <h1>Tea-rapy</h1>
            <ul>
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div>

        <!-- CONTENT -->
        <div class="row" id="picker-image">

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
            <div class="logo">
                <img src="../assets/images/logo/tea-rapy-white.png" alt="" width="400px">
            </div>    
        </div>
        <div class="row" id="option-menu">
            <a href="cueillette.php">
            <div class="col-md-4">
                <div class="image-option"><img src="../assets/images/feuille.png" alt="cueillette"></div>
                <h3>Cueillettes</h3>
            </div>
            </a>

            <a href="depense.php?tool=spent&action=a">
            <div class="col-md-4">
                <div class="image-option"><img src="../assets/images/de-largent.png" alt="dépenses"></div>
                <h3>D&eacute;penses</h3>
            </div>
            </a>

            <a href="resultat.php">
            <div class="col-md-4">
                <div class="image-option"><img src="../assets/images/statistique.png" alt="résultat"></div>
                <h3>R&eacute;sultats</h3>
            </div>
            </a>
        </div>
        <!-- CONTENT -->

        <!-- FOOTER -->
        <footer>ETU002369 - ETU002405 - ETU002601</footer>
        <!-- FOOTER -->
        <script src="../assets/js/sidebar.js"></script> 
    </div>
</body>
</html>
oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../inc/crudFunctions.php";
    ?>
    <div id="saisi_cueillette">
        <form action="traitementCRUD.php">
            <input type="hidden" name="action" value="a"> <br>
            <input type="hidden" name="tool" value="saisi_cueillette"> <br>
            <label for="idPicker">pickers</label><br>
            <select name="idPicker" id="idPicker">
                <?php 
                $allPicker = getAllPicker();
                for ($i=0; $i < count($allPicker)  ; $i++) { ?>
                            <option value="<?php echo $allPicker[$i]['id'] ?>"><?php echo $allPicker[$i]['name'] ?></option>
                <?php } ?>
            </select> <br>
            <label for="idParcel">parcels</label> <br>
            <select name="idParcel" id="idParcel">
            <?php 
                $allParcel = getAllParcel();
                for ($i=0; $i < count($allParcel)  ; $i++) { ?>
                    <option value="<?php echo $allParcel[$i]['id'] ?>" id="parcel<?php echo $allParcel[$i]['id'] ?>"><?php echo $allParcel[$i]['id'] ?></option>
            <?php } ?>
            </select> <br>
            <div id="erreur"></div>
            <label for="poidsCueilli">poids cueilli</label> <br>
            <input type="number" name="poidsCueilli" id="poidsCueilli"> <br>
            <input type="date" name="theDate" id="theDate"> <br>
            <input type="submit" name="Valider">
        </form>
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
    <div id="spent">
        <h1>spent</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>rendement</th>
            </tr>
            <?php
                $allspent = getAll("spent");
                for ($i=0; $i < count($allspent)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($allspent[$i]['id']) ?></td>
                        <td><?php echo ($allspent[$i]['idcategSpent']) ?></td>
                        <td><?php echo ($allspent[$i]['spent']) ?></td>
                        <td><?php echo ($allspent[$i]['theDate']) ?></td>
                        <td><a href="formulaires.php?tool=spent&id=<?php echo ($allspent[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=spent&id=<?php echo ($allspent[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php }
            ?>  
        </table> <br>
        <a href="formulaires.php?tool=spent&action=a">add more</a>
    </div>
</body>
</html>