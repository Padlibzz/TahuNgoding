<?php

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];

if (empty($nama) || empty($jurusan) || empty($umur)) {
  echo "Tolong isi dulu <br>";
  echo '<a href="javascript:history.back()">Kembali</a>';
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Biodata</title>
</head>

<body>
  <?php
  echo "Nama : $nama <br>";
  echo "Jurusan : $jurusan <br>";
  echo "Umur : $umur <br>";
  ?>
</body>

</html>
