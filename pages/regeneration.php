<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/regeneration.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/crud.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <title>Tea-rapy</title>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header class="header">
            <div class="col-md-9">
                <button class="open-btn" id="openBtn">&#9776;</button>
            </div>
            <div class="col-md-3">
                <div class="user-icon">
                    <img src="../assets/images/user-icon.png" alt="User Icon">
                </div>
                <div class="user-info">
                    <p>Nom de l'utilisateur</p>
                </div>
            </div>
        </header>
        <!-- HEADER -->

        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">
        <button class="close-btn" id="closeBtn">&times;</button>
        <h1>Tea-rapy</h1>
        <ul>
            <li><a href="acceuilAdmin.html">Accueil</a></li>
            <li><a href="tea.php">Thé</a></li>
            <li><a href="parcelle.php">Parcelle</a></li>
            <li class="dropdown"> <!-- Ajouter la classe "dropdown" à l'élément parent -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cueillette <span class="caret"></span></a> <!-- Ajouter la classe "dropdown-toggle" et les attributs "data-toggle" et "aria-haspopup" -->
                <ul class="dropdown-menu"> <!-- Ajouter la classe "dropdown-menu" à la liste déroulante -->
                    <li><a href="cueilleur.php">Gestion cueillette</a></li> <!-- Ajouter les options du menu déroulant -->
                    <li><a href="poids_minimal.php">Poids minimal</a></li>
                </ul>
            </li>
            <li><a href="depense.php">Dépense</a></li>
            <li class="dropdown"> <!-- Ajouter la classe "dropdown" à l'élément parent -->
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Salaire <span class="caret"></span></a> <!-- Ajouter la classe "dropdown-toggle" et les attributs "data-toggle" et "aria-haspopup" -->
                <ul class="dropdown-menu"> <!-- Ajouter la classe "dropdown-menu" à la liste déroulante -->
                    <li><a href="salaire.php">Gestion de salaires</a></li> <!-- Ajouter les options du menu déroulant -->
                    <li><a href="#">Bonus et malus</a></li>
                </ul>
            </li>
        </ul>
        </div>
        <!-- SIDEBAR -->
        <div class="row">
            <h1>Regeneration</h1>
        </div>
        <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal">
                    <h1>Formulaire</h1>
                <div class="calendar">
                    <label for="january" class="month-checkbox"><input type="checkbox" id="january" name="month" value="1">Janv</label>
                    <label for="february" class="month-checkbox">Fév<input type="checkbox" id="february" name="month" value="2"></label>
                    <label for="march" class="month-checkbox">Mars<input type="checkbox" id="march" name="month" value="3"></label>
                    <label for="april" class="month-checkbox">Avr<input type="checkbox" id="april" name="month" value="4"></label>
                    <label for="may" class="month-checkbox">Mai<input type="checkbox" id="may" name="month" value="5"></label>
                    <label for="june" class="month-checkbox">Juin<input type="checkbox" id="june" name="month" value="6"></label>
                    <label for="july" class="month-checkbox">Juil<input type="checkbox" id="july" name="month" value="7"></label>
                    <label for="august" class="month-checkbox">Août<input type="checkbox" id="august" name="month" value="8"></label>
                    <label for="september" class="month-checkbox">Sept<input type="checkbox" id="september" name="month" value="9"></label>
                    <label for="october" class="month-checkbox">Oct<input type="checkbox" id="october" name="month" value="10"></label>
                    <label for="november" class="month-checkbox">Nov<input type="checkbox" id="november" name="month" value="11"></label>
                    <label for="december" class="month-checkbox">Déc<input type="checkbox" id="december" name="month" value="12"></label>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                </div>
                </form>     
            </div>
            <!-- FORMULAIRE -->
            <div class="col-md-1"></div>
            <!-- TABLE -->
            <div class="col-md-6" id="table">
                <table class="table table-condensed">
                    <thead>
                        <th>Mois</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                        </tr>
                </table>
                <center><nav><ul class="pagination pagination-lg"></ul></nav></center>
            </div>
            <!-- TABLE -->
        </div>
    <!-- FOOTER-->
    <footer>ETU002369 - ETU002405 - ETU002601</footer>
    <!-- FOOTER -->
    </div>
    <script src="../assets/js/checkbox.js"></script>
    <script src="../assets/js/sidebar.js"></script> 
    <script src="../assets/js/pagination.js"></script>
    <script src="../assets/js/userInfo.js"></script>
    <script src="../assets/js/sidebar.js"></script> 
    <script src="../assets/js/bootstrap.js"></script> 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>