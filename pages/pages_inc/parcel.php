<div class="row">
        <h1>les parcelles</h1>
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
                    <th>size</th>
                    <th>idTeaCategory</th>
                    <th>start date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $parcels = getAllParcel();
                    for ($i=0; $i < count($parcels)  ; $i++) { ?>
                        <tr>
                            <td><?php echo ($parcels[$i]['id']) ?></td>
                            <td><?php echo ($parcels[$i]['size']) ?></td>
                            <td><?php echo ($parcels[$i]['idTeaCategory']) ?></td>
                            <td><?php echo ($parcels[$i]['startDate']) ?></td>
                            <td><a href="ForUpdate.php?tool=parcel&id=<?php echo ($parcels[$i]['id']) ?>&action=u">update</a></td>
                            <td><a href="traitementCRUD.php?tool=parcel&id=<?php echo ($parcels[$i]['id']) ?>&action=d">delete</a></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <center><nav><ul class="pagination pagination-lg"></ul></nav></center>
        </div>
        <!-- TABLE -->
    </div>