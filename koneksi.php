<?php
class Koneksi{
  private $server="localhost";
  private $username="id4963142_ritamasfufah";
  private $password = "123holmes";
  private $db = "id4963142_ita";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
