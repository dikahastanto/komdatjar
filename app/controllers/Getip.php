<?php

class Getip extends Controller{
// private $db;
  public function index()  {

    $this->view('templates/header');
    $this->view('getip/index');
    $this->view('templates/footer');

  }

  public function cekip(){

    // $this->db = new Database;

    $data['mhs'] = $this->model('Mahasiswa_model')->get_mahasiswa_by_id($_POST['npm']);

    if ($data['mhs']==NULL) {

      // $data['result'] = "NPM SALAH";
      echo "<script type=text/Javascript> alert('NPM Yang Anda Masukan Salah !')
              window.location = '" . BASEURL ."getip';
            </script>";

    }else{

      if ($data['mhs']['status']==='n') {
        //belump dapet ip
        //kita kasih ip
        $this->model('Mahasiswa_model')->updateip($_POST['npm']);
        $data['result'] = "Berhasil Mendapatkan IP";

        $data['mhs'] = $this->model('Mahasiswa_model')->get_mahasiswa_by_id($_POST['npm']);

      }else {
        //sudah dapat ip
        $data['result'] = "Anda Sudah Mendapatkan IP";
      }

    }

    $this->view('templates/header');
    $this->view('getip/resultcek',$data);
    $this->view('templates/footer');

  }

}
