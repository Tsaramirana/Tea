<?php 
$placeholder = array();

if($_GET['mode'] == 0) {
  $placeholder = array(
    "email" => "jean@gmail.com",
    "pswd" => "jean"
  );
}
else {
  $placeholder = array(
    "email" => "jean2@gmail.com",
    "pswd" => "jean2"
  );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <title>Pozy Tea'V</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="form">
        <!-- IMAGE -->
        <div class="col-md-6" id="tea-image"></div>
        <!-- IMAGE -->

        <!-- FORMULAIRE -->
        <div class="col-md-6" id="formulaire">
            <h1>Connexion</h1>
            <form class="form-horizontal" action="traitementLogin.php" method="post">
              <?php
                if (isset($_GET['erreur'])) { ?>
                  <p><?php echo $_GET['erreur'] ?></p>    
                <?php }
                if (isset($_GET['mode'])) {?>
                  <input type="hidden" name="mode" value="<?php echo $_GET['mode'] ?>"> <br>
              <?php } ?>
                <div class="form-group">
                    <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                    <div class="col-sm-8">
                    <p>Email</p>
                    <input type="email" name="email" value="<?php echo $placeholder["email"] ?>" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                    <div class="col-sm-8">
                    <p>Mot de passe</p>
                    <input type="password" name="mdp"  value="<?php echo $placeholder["pswd"] ?>" class="form-control" id="inputPassword3" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default">Se connecter</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- FORMULAIRE -->

        </div>
    </div>  
</body>
</html>