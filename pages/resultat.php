<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/resultat.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <title>Tea-rapy : Résultats</title>
</head>
<body>
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
    <div class="container">
    <div class="row" id="content">
        <div class="row" id="top-div">
            <div class="col-md-10"></div>
            <div class="col-md-2"><h1>Bonjour!</h1></div>
        </div>
        <div class="row" id="filter-date">
            <div class="col-sm-6">
            <p>Date de début</p>
            <input type="date" class="form-control" id="inputEmail3" placeholder="Date Début">
            </div>
            <div class="col-sm-6">
            <p>Date de fin</p>
            <input type="date" class="form-control" id="inputEmail3" placeholder="Date Fin">
            </div>
        </div>
        <div class="row" id="statistics">
            <div class="col-md-4" id="statistics-simple">
                <div class="row" id="st1">
                    <h2>150 kg</h2>
                    <h5>Poids total de la cueillette</h5>
                </div>

                <div class="row">
                    <h2>150 Millions</h2>
                    <h5>Coût de revient/kg</h5>
                </div>
            </div>
            <div class="col-md-8">
                <canvas id="histogramme"></canvas>
            </div>
        </div>
    </div>
    </div>
    <!-- CONTENT -->

    <!-- FOOTER -->
    <footer>ETU002369 - ETU002405 - ETU002601</footer>
    <!-- FOOTER -->
    <script src="../assets/js/sidebar.js"></script>
    <script src="../assets/js/chart.umd.js"></script>
    <script src="../assets/js/resultat.js"></script>
</body>
</html>