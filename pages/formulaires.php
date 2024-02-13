<?php
 include "../inc/crudFunctions.php";
 $tool=$_GET['tool'];
?>
<?php 
if ($tool=="tea") { ?>
    <div class="row">
        <h1>tea</h1>
    </div>
    <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal"  action="traitementCRUD.php" method="get">
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
                    <input type="hidden" name="output" value="<?php echo $output ?>"> <br>
                    <div class="form-group">
                        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                        <div class="col-sm-8">
                        <p>Nom</p>
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo $name ?>" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>
                </form>     
        </div>
<?php } 
if ($tool=="parcel") { ?>
    <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal"  action="traitementCRUD.php" method="get">
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

                    <div class="form-group">
                        <div class="col-sm-8">
                        <p>size</p>
                        <input type="number" class="form-control" id="inputEmail3" name="size" value="<?php echo $size ?>" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <p>date</p>
                        <input type="date" class="form-control" id="inputEmail3" name="startDate" value="<?php echo $startDate ?>" placeholder="Nom">
                        </div>
                    </div>
                    <div  class="form-group">
                        <div class="col-sm-8">
                        <p>size</p>
                        <select name="idTeaCategory" class="form-control">
                            <?php 
                            $all=getAllTeaCateg();

                            for ($i=0; $i < count($all)  ; $i++) { 
                                if ($all[$i]['id']==$idTeaCategory) { ?>
                                    <option value="<?php echo $all[$i]['id'] ?>" selected><?php echo $all[$i]['name'] ?></option>
                                    <?php } else{ ?>
                                        <option value="<?php echo $all[$i]['id'] ?>"><?php echo $all[$i]['name'] ?></option>
                                <?php }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>
                </form>     
        </div>
        </div>
<?php } 
if ($tool=="picker") { ?>
    <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal"  action="traitementCRUD.php" method="get">
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
                    
                    <div class="form-group">
                        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                        <div class="col-sm-8">
                        <p>Nom</p>
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo $name ?>" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>
                </form>     
        </div>   
<?php } 
if ($tool=="categSpent") { ?>
    <div class="row" id="content">
            <!-- FORMULAIRE -->
            <div class="col-md-5"  id="formulaire">
                <form class="form-horizontal"  action="traitementCRUD.php" method="get">
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
                    
                    <div class="form-group">
                        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                        <div class="col-sm-8">
                        <p>Nom</p>
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo $name ?>" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>
                </form>     
        </div>
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