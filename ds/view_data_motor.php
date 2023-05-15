<?php include_once ("layout/header.php"); ?>
<?php include_once ("layout/menu.php"); ?>
<?php include_once ("db_toko_motor.php"); ?>

<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanngan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $db->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PELANGGAN ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>Nama Motor</td><td><?=$row['nama_motor']?></td></tr>
        <tr><td>CC</td><td><?=$row['cc']?></td></tr>
        <tr><td>Harga</td><td><?=$row['harga']?></td></tr>
        <tr><td>Merk ID</td><td><?=$row['merk_id']?></td></tr>
        <tr><td>Stok</td><td><?=$row['stok']?></td></tr>
    </tbody>
</table>

 <?php require_once "layout/footer.php";?>