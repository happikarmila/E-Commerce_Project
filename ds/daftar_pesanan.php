<?php include_once("layout/header.php"); ?>
<?php include_once("layout/menu.php"); ?>
<?php include_once("db_toko_motor.php"); ?>


<div class="container">
    <table class="table table-bordered">
        <thead><br>
            <tr class="table-primary text-uppercase"> <br>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Motor ID</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $nomor = 1;
            $data = $db->query("SELECT * FROM pesanan");
            foreach ($data as $row) :
            ?>

                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $row['nama_pelanggan'] ?></td>
                    <td><?= $row['alamat_pelanggan'] ?></td>
                    <td><?= $row['motor_id'] ?></td>
                    <td><?= $row['quantity'] ?></td>

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