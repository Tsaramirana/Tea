<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/payement.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <title>Tea-rapy</title>
</head>
<body>
    <div class="container-fluid">
        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">
            <button class="close-btn" id="closeBtn">&times;</button>
            <h1>Tea-rapy</h1>
            <ul>
                <li><a href="acceuilUser.html">Accueil</a></li>
                <li><a href="#" class="active">Payement</a></li>
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

        <center><h1>Liste des payements effectuées</h1></center>
        <div class="col-md-7" id="content-payement">
            <div class="row" id="filter-date">
                <div class="col-sm-5">
                <p>Date de début</p>
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date Début">
                </div>
                <div class="col-sm-5">
                <p>Date de fin</p>
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date Fin">
                </div>
                <div class="col-sm-2">
                    <p>.</p>
                    <input type="submit" class="form-control" value="Valider">
                </div>
            </div>
        <div class="row" id="table">
            <table class="table table-condensed">
                <thead>
                    <th>Date</th>
                    <th>Nom cueilleur</th>
                    <th>Poids</th>
                    <th>Bonus (%)</th>
                    <th>Malus (%)</th>
                    <th>Montant payé</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Date 1</td>
                        <td>Nom 1</td>
                        <td>Poids 1</td>
                        <td>%</td>
                        <td>%</td>
                        <td>50000Ar</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <script src="../assets/js/pagination.js"></script>
    <script src="../assets/js/sidebar.js"></script> 
</body>
</html>