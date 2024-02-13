<div class="row">
        <h1>Gestion des variétés de thé</h1>
    </div>
    <?php  include "./formulaires.php"; ?>
        <!-- FORMULAIRE -->
        <div class="col-md-1"></div>
        <!-- TABLE -->
        <div class="col-md-6" id="table">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>rendement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $teaCateg = getAllTeaCateg();
                        for ($i=0; $i < count($teaCateg)  ; $i++) { ?>
                            <tr>
                                <td><?php echo ($teaCateg[$i]['id']) ?></td>
                                <td><?php echo ($teaCateg[$i]['name']) ?></td>
                                <td><?php echo ($teaCateg[$i]['output']) ?></td>
                                <td><a href="ForUpdate.php?tool=tea&id=<?php echo ($teaCateg[$i]['id']) ?>&action=u">update</a></td>
                                <td><a href="traitementCRUD.php?tool=tea&id=<?php echo ($teaCateg[$i]['id']) ?>&action=d">delete</a></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
            <center><nav><ul class="pagination pagination-lg"></ul></nav></center>
        </div>
        <!-- TABLE -->
    </div>