<?php
include 'proses.php';
if (isset($_POST['kirim'])) {
  echo "Data User <br>";
  if (move_uploaded_file($sumber,$target)) {
    echo "Nama File :"." ".$nama_gbr."<br>"."<br>";
  }else {

    echo $_FILES['gbr']['error'] ;
  }
  }
?>
<form class="" action="formawal.html" method="post">
  <img src="<?php echo $target; ?>" width="400px">
  <br><br><br>
  <table>
    <tr>
      <td><h2>Hobi</h2> </td>
    </tr>
    <tr>
      <td><?php
            foreach ($hobi1 as $key => $value) {
              echo $value;
              echo "<br>";
            }
          ?></td>
          <td><a href="formawal.html">Hapus</td>
    </tr>
    <br>
    <tr>
      <td><h2>Genre Film</h2> </td>
    </tr>
    <tr>
      <td><?php foreach ($genrefilm as $key => $value) {
            echo $value;
            echo "<br>";
          }?></td>
      <td><a href="formawal.html"></a>hapus</td>
    </tr>
    <tr>
      <td><h2>Wisata</h2> </td>
    </tr>
    <tr>
      <td><?php foreach ($wisata as $key => $value) {
            echo $value;
            echo "<br>";
          }?></td>
      <td><a href="formawal.html">hapus</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><a href="login.php">logout</a></td>
    </tr>

  </table>
</form>
