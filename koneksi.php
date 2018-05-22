<?php
class Koneksi{
  private $server="localhost";
  private $username="id4972924_dev";
  private $password = "akbar123";
  private $db = "id4972924_toko";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
