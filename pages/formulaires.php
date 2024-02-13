<?php
 include "../inc/crudFunctions.php";
 $tool=$_GET['tool'];
?>
<?php 
if ($tool=="tea") { ?>
    <h1>tea</h1>
    <form action="traitementCRUD.php">
        <?php
        if ($_GET['action']=="a") { ?>
            <input type="hidden" name="action" value="a">
        <?php }

        if ($_GET['action']=="u") { ?>
            <input type="hidden" name="action" value="u">
        <?php }

        $id=0;
        $name="";
        $output=10;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $name= getById("teaCategory", $id)[0] ['name'] ;
            $output= getById("teaCategory", $id)[0] ['output'] ;
        }
        ?>
        <input type="hidden" name="tool" value="tea">
        <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
        <input type="text" name="name" value="<?php echo $name ?>"> <br>
        <input type="hidden" name="output" value="<?php echo $output ?>"> <br>
        <input type="submit" name="valider" id="Valider">  
    </form>
<?php } 
if ($tool=="parcel") { ?>
        <h1>parcel</h1>
        <form action="traitementCRUD.php">
        <?php
            if ($_GET['action']=="a") { ?>
                <input type="hidden" name="action" value="a">
            <?php }
        
            if ($_GET['action']=="u") { ?>
                <input type="hidden" name="action" value="u">
            <?php }
        
            $id=0;
            $size=0;
            $idTeaCategory=0;
            $startDate=date("Y-m-d");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $size= getById("parcel", $id)[0] ['size'] ;
                $idTeaCategory= getById("parcel", $id)[0] ['idTeaCategory'] ;
                $startDate= getById("parcel", $id)[0] ['startDate'] ;
            }
            ?>
            <input type="hidden" name="tool" value="parcel">
            <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
            <input type="number" name="size" value="<?php echo $size ?>"> <br>
            <select name="idTeaCategory">
                <?php 
                $all=getAllTeaCateg();

                for ($i=0; $i < count($all)  ; $i++) { 
                    if ($all[$i]['id']==$idTeaCategory) { ?>
                        <option value="<?php echo $idTeaCategory ?>" selected><?php echo $all[$i]['name'] ?></option>
                        <?php } else{ ?>
                            <option value="<?php echo $idTeaCategory ?>"><?php echo $all[$i]['name'] ?></option>
                    <?php }
                }
                 ?>
            </select> <br>
            <input type="date" name="startDate" value="<?php echo $startDate ?>"> <br>
            <input type="submit" name="valider" id="Valider">
        </form>
        
<?php } 
if ($tool=="picker") { ?>
    <h1>picker</h1>
    <form action="traitementCRUD.php">
        <?php
        if ($_GET['action']=="a") { ?>
            <input type="hidden" name="action" value="a">
        <?php }

        if ($_GET['action']=="u") { ?>
            <input type="hidden" name="action" value="u">
        <?php }

        $id=0;
        $name="";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $name= getById("picker", $id)[0] ['name'] ;
        }
        ?>
        <input type="hidden" name="tool" value="picker">
        <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
        <input type="text" name="name" value="<?php echo $name ?>"> <br>
        <input type="submit" name="valider" id="Valider">  
    </form>   
<?php } 
if ($tool=="categSpent") { ?>
    <h1>categSpent</h1>
    <form action="traitementCRUD.php">
        <?php
        if ($_GET['action']=="a") { ?>
            <input type="hidden" name="action" value="a">
        <?php }

        if ($_GET['action']=="u") { ?>
            <input type="hidden" name="action" value="u">
        <?php }

        $id=0;
        $name="";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $name= getById("categSpent", $id)[0] ['name'] ;
        }
        ?>
        <input type="hidden" name="tool" value="categSpent">
        <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
        <input type="text" name="name" value="<?php echo $name ?>"> <br>
        <input type="submit" name="valider" id="Valider">  
    </form>  
<?php }
 if ($tool=="spent") { ?>
    <h1>spent</h1>
    <form action="traitementCRUD.php">
        <?php
        if ($_GET['action']=="a") { ?>
            <input type="hidden" name="action" value="a">
        <?php }

        if ($_GET['action']=="u") { ?>
            <input type="hidden" name="action" value="u">
        <?php }

        $id=0;
        $name="";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $idcategSpent= getById("spent", $id)[0] ['idcategSpent'] ;
            $spent= getById("spent", $id)[0] ['spent'] ;
            $theDate= getById("spent", $id)[0] ['theDate'] ;
        }
        ?>
        <input type="hidden" name="tool" value="spent">
        <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
        <select name="idcategSpent">
                <?php 
                $all=getAllCategSpent();

                for ($i=0; $i < count($all)  ; $i++) { 
                    if ($all[$i]['id']==$idcategorie) { ?>
                        <option value="<?php echo $idcategorie ?>" selected><?php echo $all[$i]['name'] ?></option>
                        <?php } else{ ?>
                            <option value="<?php echo $idcategorie ?>"><?php echo $all[$i]['name'] ?></option>
                    <?php }
                }
                 ?>
            </select> <br>
        <input type="number" name="spent" value="<?php echo $spent ?>"> <br>
        <input type="date" name="theDate" value="<?php echo $theDate ?>"> <br>
        <input type="submit" name="valider" id="Valider">  
    </form>  
<?php }
 ?>