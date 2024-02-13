<div class="row">
        <h1>les cueilleurs</h1>
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
                    </tr>
                </thead>
                <tbody>
                <?php
                $cueilleur = getAllPicker();
                for ($i=0; $i < count($cueilleur)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($cueilleur[$i]['id']) ?></td>
                        <td><?php echo ($cueilleur[$i]['name']) ?></td>
                        <td><a href="ForUpdate.php?tool=picker&id=<?php echo ($cueilleur[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=picker&id=<?php echo ($cueilleur[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <center><nav><ul class="pagination pagination-lg"></ul></nav></center>
        </div>
        <!-- TABLE -->
    </div>