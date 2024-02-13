<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Bonus et Malus</h1>
        </div>
        <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal">
                    <div class="form-group">
                        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                        <div class="col-sm-8">
                        <p>Montant</p>
                        <input type="number" class="form-control" id="inputEmail3" placeholder="Montant" name="montant">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                        <div class="col-sm-8">
                        <p>Nature</p>
                        <select class="form-control" name="status">
                            <option value="0">Bonus</option>
                            <option value="1">Malus</option>
                        </select>                
                        </div>
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
                        <th>Montant</th>
                        <th>Nature</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Malus</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bonus</td>
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
    <script src="../assets/js/sidebar.js"></script> 
    <script src="../assets/js/pagination.js"></script>
    <script src="../assets/js/userInfo.js"></script>
    <script src="../assets/js/sidebar.js"></script> 
    <script src="../assets/js/bootstrap.js"></script> 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>