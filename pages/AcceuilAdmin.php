<?php
 session_start();
 ?>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div>
        <p><a href="#">tea</a></p>
        <p><a href="#">parcel</a></p>
        <p><a href="#">picker</a></p>
        <p><a href="#">depense</a></p>
    </div>
    <div>
    <?php
    include "../inc/crudFunctions.php";
    ?>
    <div id="tea">
        <h1>Tea</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>rendement</th>
            </tr>
            <?php
                $teaCateg = getAllTeaCateg();
                for ($i=0; $i < count($teaCateg)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($teaCateg[$i]['id']) ?></td>
                        <td><?php echo ($teaCateg[$i]['name']) ?></td>
                        <td><?php echo ($teaCateg[$i]['output']) ?></td>
                        <td><a href="formulaires.php?tool=tea&id=<?php echo ($teaCateg[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=tea&id=<?php echo ($teaCateg[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php }
            ?>  
        </table> <br>
        <a href="formulaires.php?tool=tea&action=a">add more</a>
    </div>
    <div id="parcel">
        <h1>Parcel</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>size</th>
                <th>idTeaCategory</th>
                <th>start date</th>
            </tr>
            <?php
                $parcels = getAllParcel();
                for ($i=0; $i < count($parcels)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($parcels[$i]['id']) ?></td>
                        <td><?php echo ($parcels[$i]['size']) ?></td>
                        <td><?php echo ($parcels[$i]['idTeaCategory']) ?></td>
                        <td><?php echo ($parcels[$i]['startDate']) ?></td>
                        <td><a href="formulaires.php?tool=parcel&id=<?php echo ($parcels[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=parcel&id=<?php echo ($parcels[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php }
            ?>
        </table> <br>
        <a href="formulaires.php?tool=parcel&action=a">add more</a>
    </div>
    <div id="cueilleur">
        <h1>Picker</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php
                $cueilleur = getAllPicker();
                for ($i=0; $i < count($cueilleur)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($cueilleur[$i]['id']) ?></td>
                        <td><?php echo ($cueilleur[$i]['name']) ?></td>
                        <td><a href="formulaires.php?tool=picker&id=<?php echo ($cueilleur[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=picker&id=<?php echo ($cueilleur[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php }
            ?>  
        </table> <br>
        <a href="formulaires.php?tool=picker&action=a">add more</a>
    </div>
    <div id="depense">
        <h1>Spent</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>idcategSpent</th>
                <th>spent</th>
                <th>date</th>
            </tr>
            <?php
                $spent = getAllCategSpent();
                for ($i=0; $i < count($spent)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($spent[$i]['id']) ?></td>
                        <td><?php echo ($spent[$i]['name']) ?></td>
                        <td><a href="formulaires.php?tool=categSpent&id=<?php echo ($spent[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=categSpent&id=<?php echo ($spent[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php }
            ?>  
        </table> <br>
        <a href="formulaires.php?tool=categSpent&action=a">add more</a>
    </div>
    
    </div>
 </body>
 </html>