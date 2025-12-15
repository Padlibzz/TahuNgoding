<?php
$panjang = $_GET['panjang'];
$lebar = $_GET['lebar'];
$hasil;
function luas($p, $l)
{
  return $p * $l;
}

if (empty($panjang) || empty($lebar)) {
  echo "tolong isi <br>";
  echo '<a href="javascript:history.back()">Kembali</a>';
  exit;
} else {
  $hasil = luas($panjang, $lebar);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>luas persegi</title>
</head>

<body>
  <?php
  echo "luas : $hasil";
  ?>
</body>

</html>
