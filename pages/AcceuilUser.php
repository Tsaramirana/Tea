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
                    <option value="<?php echo $allParcel[$i]['id'] ?>"><?php echo $allParcel[$i]['id'] ?></option>
            <?php } ?>
            </select> <br>
            <div id="erreur"></div>
            <label for="poidsCueilli">poids cueilli</label> <br>
            <input type="number" name="poidsCueilli" id="poidsCueilli"> <br>
            <input type="date" name="theDate"> <br>
            <p id="maxValue" style="display:none;">10</p>
            <input type="submit" name="Valider">
        </form>
    </div>
    <script>
        window.addEventListener ("load",function(){
            var poidsCueilli = document.getElementById('poidsCueilli');
            var maxValue = document.getElementById('maxValue').innerHTML;
            var erreur = document.getElementById('erreur');
            
            poidsCueilli.addEventListener('input', function() {
                if (parseFloat(this.value) > parseFloat(maxValue)) {
                    this.value = maxValue;
                    erreur.innerHTML = "<p>La valeur que vous avez tentée est incorrecte</p>";
                    setTimeout(function() {
                        erreur.innerHTML = "";
                    }, 5000);
                }
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