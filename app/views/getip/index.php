<div class="container mt-5">
  <div class="card">
    <h5 class="card-header">GET IP Adress</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <form action="<?= BASEURL ?>getip/cekip" method="post">
            <h3><p>Masukan Npm Anda</p> </h3>
            <input type="text" name="npm" class="form-control" maxlength="8" required><br>
            <input type="submit" name="cek" value="Cek IP" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
