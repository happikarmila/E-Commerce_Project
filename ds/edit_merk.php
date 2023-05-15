<?php include_once("layout/header.php"); ?>
<?php include_once("layout/menu.php"); ?>
<?php include_once("db_toko_motor.php"); ?>

<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  // edit
  $sql = "SELECT * FROM merk WHERE id=?";
  $st = $db->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  // new data
  $row = [];
}
?>
<div class="container">
  <form method="POST" action="proses_merk_motor.php">
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Merk Motor</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <input id="merk" name="merk" type="text" class="form-control" value="<?= $row['merk']; ?>">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8"><br>
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        <input type="hidden" name="idedit" value="<?= $_idedit; ?>">
      </div>
    </div>
  </form>
</div>

<?php require_once "layout/footer.php"; ?>