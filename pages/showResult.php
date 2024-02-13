<?
include "../inc/crudFunctions.php";
    $mois1=$_GET['mois1'];
    $annee1=$_GET['annee1'];
    $mois2=$_GET['mois2'];
    $annee2=$_GET['annee2'];
    $totalPicking= getTotalPicking ($moi1,$annee1,$mois2,$annee2);
    $poidsRestant= getWeigthPerParcel ($moi1,$annee1,$mois2,$annee2);
    $coutRevientKg= getCostPrice ($moi1,$annee1,$mois2,$annee2);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>total picking: <?php echo $totalPicking  ?></p>
    <table>
        <tr>
            <th>parcel</th>
            <th>poids restants</th>
        </tr>
        <?php 
        for ($i=0; $i < count($poidsRestant) ; $i++) { ?>
            <tr>
                <td><?php echo $poidsRestant[$i]['parcel']  ?></td>
                <td><?php echo $poidsRestant[$i]['restant']  ?></td>
            </tr>
        <?php } ?>    
    </table>
    <p>cout de revient /kg: <?php echo $coutRevientKg  ?></p>
</body>
</html>