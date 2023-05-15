<?php include_once("layout/header.php"); ?>
<?php include_once("layout/menu.php"); ?>
<?php include_once("db_toko_motor.php"); ?>

<div class="container">
  <form method="POST" action="proses_motor.php">
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Nama Motor</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <input id="nama_motor" name="nama_motor" placeholder="" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text1" class="col-4 col-form-label">CC</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <input id="cc" name="cc" placeholder="" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="select" class="col-4 col-form-label">Harga</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <input id="harga" name="harga" placeholder="" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text2" class="col-4 col-form-label">Merk ID</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <!-- <input id="merk_id" name="merk_id" placeholder="" type="text" class="form-control"> -->
          <?php
          $sqljenis = "SELECT * FROM merk";
          $rsjenis = $db->query($sqljenis);
          ?>
          <select id="merk_id" name="merk_id" class="custom-select">
            <option value="">--pilih jenis merk--</option>
            <?php
            foreach ($rsjenis as $rowjenis) {
            ?>
              <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['merk'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text2" class="col-4 col-form-label">Stok</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-angle-double-right"></i><br>
            </div>
          </div>
          <input id="stok" name="stok" placeholder="" type="text" class="form-control">
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