<?php include_once("layout/header.php"); ?>
<?php include_once("layout/menu.php"); ?>
<?php include_once("db_toko_motor.php"); ?>

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
          <input id="merk" name="merk" placeholder="" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8"><br>
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
      </div>
    </div>
  </form>
</div>

<?php require_once "layout/footer.php"; ?>