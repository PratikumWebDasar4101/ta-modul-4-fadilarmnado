<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Struk Belanja</title>
  </head>
  <body>
    <center><h1>Struk Perbelanjaan</h1></center>
    <table>
      <tr>
        <td><b>Tanggal hari Ini &nbsp;&nbsp;&nbsp;:</b></td>
        <td><?php echo date("d/m/Y"); ?></td>
      </tr>
      <tr>
        <td><b>Pembeli &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> </td>
        <td><?php echo $_SESSION['username']; ?></td>
      </tr>
      <tr>
        <td><b>Barang yang dibeli :</b> </td>
        <td><?php echo implode(', ',$_SESSION['barang']); ?></td>
      </tr>
      <tr>
        <td><b>Biaya Pengiriman :</b></td>
        <td><?php echo $_SESSION['pengiriman']." "."biaya"." ".$_SESSION['biaya_pengiriman']; ?></td>
      </tr>
      <tr>
        <td><b>Total Pembayaran :</b></td>
        <td><?php echo $_SESSION['totalpembayaran']; ?></td>
      </tr>
    </table>
  </body>
</html>
