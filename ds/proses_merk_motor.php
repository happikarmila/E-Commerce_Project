<?php 
require_once 'db_toko_motor.php';
?>
<?php 
   $_merk = $_POST['merk'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_merk; // ? 1

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (merk) VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET merk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $db->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: merk.php');
?>