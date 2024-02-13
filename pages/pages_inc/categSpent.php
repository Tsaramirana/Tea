<div class="row">
        <h1>les categories de depenses</h1>
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
                        <th>idcategSpent</th>
                        <th>spent</th>
                        <th>date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $spent = getAllCategSpent();
                for ($i=0; $i < count($spent)  ; $i++) { ?>
                    <tr>
                        <td><?php echo ($spent[$i]['id']) ?></td>
                        <td><?php echo ($spent[$i]['name']) ?></td>
                        <td><a href="ForUpdate.php?tool=categSpent&id=<?php echo ($spent[$i]['id']) ?>&action=u">update</a></td>
                        <td><a href="traitementCRUD.php?tool=categSpent&id=<?php echo ($spent[$i]['id']) ?>&action=d">delete</a></td>
                    </tr>
            <?php } ?>
                </tbody>
            </table>
            <center><nav><ul class="pagination pagination-lg"></ul></nav></center>
        </div>
        <!-- TABLE -->
    </div>