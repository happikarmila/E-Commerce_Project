<?php 
require_once 'db_toko_motor.php';
?>
<?php 
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_harga = $_POST['harga'];
   $_merk_id = $_POST['merk_id'];
   $_stok = $_POST['stok'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_motor; // ? 1
   $ar_data[]=$_cc;
   $ar_data[]=$_harga;
   $ar_data[]=$_merk_id;
   $ar_data[]=$_stok;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,merk_id,stok) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,merk_id=?,stok=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $db->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: data_motor.php');
?>