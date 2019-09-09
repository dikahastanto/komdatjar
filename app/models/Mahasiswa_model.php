<?php

class Mahasiswa_model {

  private $table = 'tb_mhs';
  private $db;
  private $ip;

  public function __construct(){

    $this->db = new Database;

  }

  public function updateip($npm)
  {

    if ($npm % 2 == 0) {

      $d1 = range(1,127);
      shuffle($d1);

      $d2 = range(1,127);
      shuffle($d2);

      $d3 = range(1,127);
      shuffle($d3);

    }else {

      $d1 = range(128,191);
      shuffle($d1);

      $d2 = range(128,191);
      shuffle($d2);

      $d3 = range(128,191);
      shuffle($d3);

    }

    $this->ip = $d1[0] . "." . $d2[0] . "." . $d3[0] . ".1";


    $this->db->query('UPDATE tb_mhs SET ip_adrress=:ip_adrress , status =:status WHERE npm=:npm');
    $this->db->bind('ip_adrress' , $this->ip);
    $this->db->bind('status' , 'y');
    $this->db->bind('npm' , $npm);
    $this->db->execute();
  }

  public function get_all_mahasiswa(){

    // $data_per_page = 3;
    //
    // $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    // $posisi = ($page > 1) ? ($page * $data_per_page) - $data_per_page :0;
    //
    // if (isset($_GET['hal'])) {
    //   $nopage = $_GET['hal'];
    // }else {
    //   $nopage = 1;
    // }
    //
    // $offset = ($nopage-1)*$data_per_page;
    //
    // $this->db->query('SELECT * FROM '. $this->table . ' LIMIT ' . $offset . ',' . $data_per_page);
    //
    // $no = 0;
    // $i = $offset+1;
    // $jml_kolom = 2;
    // $cnt=0;
    // return $this->db->resultSet();


  }

  public function get_mahasiswa_by_id($id){

    $this->db->query('SELECT * FROM '. $this->table .' WHERE npm=:id');
    $this->db->bind('id' , $id);
    return $this->db->single();

  }

  public function get_paginate(){

    // $this->db->query('SELECT * FROM '. $this->table);
    // $this->jumlah_data = $this->db->query('SELECT COUNT(*) AS jumlah FROM '. $this->table);
    // return $this->jumlah_data->execute();

    // $query2 = mysqli_query ($konek, "SELECT * FROM tb_resep");
    // $jumlahdata = mysqli_num_rows($query2);
    // $jumlahhlmn = ceil ($jumlahdata/$data_per_page);
    //
    // for ($i=1; $i <= $jumlahhlmn ; $i++) {
    //   if ($i !=$page) {
    //     echo "<li><a href='home.php?page=tampil_data_resep&hal=$i\'>$i</a><li>";
    //   }else {
    //     echo "<li><a href='home.php?page=tampil_data_resep&hal=$i\'>$i</a><li>";
    //   }
    // }

  }

}
