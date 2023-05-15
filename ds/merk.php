<?php require_once "layout/header.php"; ?>
<?php require_once "layout/menu.php"; ?>
<?php require_once "db_toko_motor.php"; ?>

<div class="container"><br>
    <a href="form_merk.php" class="btn btn-primary btn-xs">Create Merk Motor</a>
    <div class="container">
        <table class="table table-bordered">
            <thead><br>
                <tr class="table-primary text-uppercase">
                    <th scope="col">No</th>
                    <th scope="col">Nama Merk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $nomor = 1;
                $data = $db->query("SELECT * FROM merk");
                foreach ($data as $row) :
                ?>

                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row['merk'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit_merk.php?idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="delete_merk.php?iddel=<?= $row['id'] ?>">Delete</a>
                        </td>
                    </tr>

                    <?php
                    $nomor++;
                    ?>

                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once "layout/footer.php"; ?>