<?php
session_start();
$brg_array = array(
                    'Beras 1kg'            => 12000,
                    'Telur 1 butir'        => 2000,
                    'Minyak Goreng 500 ml' => 18000,
                    'Gula Pasir 1kg'       => 12000
                  );
$pengirim_array = array(
                          'JNE'         => 9000,
                          'TIKI'        => 7000,
                          'Indah Cargo' => 5000
                  );
if (isset($_POST['submit'])) {
  $barang = $_POST['barang'];
  $pengiriman = $_POST['pengiriman'];
  $alamat = $_POST['alamat'];
  $_SESSION['barang'] = $barang;
  $_SESSION['pengiriman'] = $pengiriman;
  $_SESSION['totalpembayaran'] = totalpembayaran($barang);
  $_SESSION['biaya_pengiriman'] = $pengirim_array[$pengiriman];
  foreach ($barang as $value) {
    echo $brg_array[$value];
    echo "<br>";
  }
  foreach ($pengirim_array as $key => $value) {
    echo $pengirim_array[$key];
    echo "<br>";
  }
}
  function totalpembayaran($barang){
    global $brg_array;
      $total_byr = 0;
      foreach ($barang as $value) {
        $total_byr = $total_byr + $brg_array[$value]+$_SESSION['biaya_pengiriman'];
      }
      return $total_byr;
  }
  header("location: struk_belanja.php");
?>
