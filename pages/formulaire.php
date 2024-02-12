<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitementLogin.php" method="post">
        <?php
        if (isset($_GET['erreur'])) { ?>
            <p><?php echo $_GET['erreur'] ?></p>    
        <?php }
        if (isset($_GET['mode'])) {?>
            <input type="hidden" name="mode" value="<?php echo $_GET['mode'] ?>"> <br>
        <?php } ?>
        <input type="email" name="email" value="jean@gmail.com"> <br>
        <input type="password" name="mdp"  value="jean" > <br>
        <input type="submit" name="valider"> <br>
    </form>
</body>
</html>