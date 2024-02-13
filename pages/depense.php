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
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Thé</a></li>
                <li><a href="#">Parcelle</a></li>
                <li><a href="#">Cueillette</a></li>
                <li><a href="#" class="active">D&eacute;pense</a></li>
                <li><a href="#">Salaire</a></li>
            </ul>
        </div>    
        <!-- SIDEBAR -->
        <div class="row">
            <h1>Gestion des dépenses</h1>
        </div>
        <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal" action="traitementCRUD.php">
                <?php include "../inc/crudFunctions.php";
                        if ($_GET['action']=="a") { ?>
                            <input type="hidden" name="action" value="a">
                        <?php }
                        $id=0;
                        $idcategSpent=0;
                        $spent=0;
                        $theDate= date('Y-m-d');
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $idcategSpent= getById("spent", $id)[0] ['idcategSpent'] ;
                            $spent= getById("spent", $id)[0] ['spent'] ;
                            $theDate= getById("spent", $id)[0] ['theDate'] ;
                        }

                        if ($_GET['action']=="u") { ?>
                            <input type="hidden" name="action" value="u">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        <?php }
                 ?>
        <input type="hidden" name="tool" value="spent">
        <p>category spent</p>
        <select class="form-control" name="idcategSpent">
                <?php 
                $all=getAllCategSpent();

                for ($i=0; $i < count($all)  ; $i++) { 
                    if ($all[$i]['id']==$idcategSpent) { ?>
                        <option value="<?php echo $idcategSpent ?>" selected><?php echo $all[$i]['name'] ?></option>
                        <?php } else{ ?>
                            <option value="<?php echo $idcategSpent ?>"><?php echo $all[$i]['name'] ?></option>
                    <?php }
                }
                ?>
            </select> <br>
        <p>depense</p>
        <input class="form-control" type="number" name="spent" value="<?php echo $spent ?>"> <br>
        <p>date</p>
        <input class="form-control" type="date" name="theDate" value="<?php echo $theDate ?>"> <br>
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
                    <th>id</th>
                    <th>name</th>
                    <th>rendement</th>
                    </thead>
                    <tbody>
                    <?php
                        $allspent = getAll("spent");
                        for ($i=0; $i < count($allspent)  ; $i++) { ?>
                            <tr>
                                <td><?php echo ($allspent[$i]['id']) ?></td>
                                <td><?php echo ($allspent[$i]['idcategSpent']) ?></td>
                                <td><?php echo ($allspent[$i]['spent']) ?></td>
                                <td><?php echo ($allspent[$i]['theDate']) ?></td>
                                <td><a href="ForUpdate.php?tool=spent&id=<?php echo ($allspent[$i]['id']) ?>&action=u">update</a></td>
                                <td><a href="traitementCRUD.php?tool=spent&id=<?php echo ($allspent[$i]['id']) ?>&action=d">delete</a></td>
                            </tr>
                    <?php } ?>  
                    </tbody>
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
</body>
</html>