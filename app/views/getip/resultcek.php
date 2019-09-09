<div class="container mt-5">
  <div class="card">
    <h5 class="card-header"><?= $data['result']; ?></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h5>
          Nama : <?= $data['mhs']['nama_lengkap']; ?><br>
          NPM  : <?= $data['mhs']['npm']; ?><br>
          IP Address  : <?= $data['mhs']['ip_adrress']; ?>
        </h5>
        <p>Silahkan gunakan ip address tersebut untuk mengerjakan tugas.</p>
        </div>
      </div>

    </div>
  </div>
</div>
