<?php require_once("layout/header.php"); ?>
<?php require_once("layout/menu.php"); ?>
<?php require_once("db_toko_motor.php"); ?>


<div class="container"><br>
    <a href="form_motor.php" class="btn btn-primary btn-xs">Create Motor</a>
    <table class="table table-bordered">
        <thead><br>
            <tr class="table-primary text-uppercase"> <br>
                <th scope="col">No</th>
                <th scope="col">Nama motor</th>
                <th scope="col">CC</th>
                <th scope="col">Harga</th>
                <th scope="col">Merk ID</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $nomor = 1;
            $data = $db->query("SELECT * FROM motor");
            foreach ($data as $row) :
            ?>

                <tr>

                    <td><?= $nomor ?></td>
                    <td><?= $row['nama_motor'] ?></td>
                    <td><?= $row['cc'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['merk_id'] ?></td>
                    <td><?= $row['stok'] ?></td>

                    <td>


                        <a class="btn btn-primary" href="view_data_motor.php?id=<?= $row['id'] ?>">View</a>
                        <a class="btn btn-warning" href="edit_data_motor.php?idedit=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-danger" href="delete_data_motor.php?iddel=<?= $row['id'] ?>">Delete</a>
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

<?php require_once "layout/footer.php"; ?>