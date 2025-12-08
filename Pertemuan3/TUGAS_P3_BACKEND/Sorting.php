<?php
$mahasiswa = ["padli", "zamzami", "asep", "danil"];

echo "sebelum di sort : ";
foreach ($mahasiswa as $daftar) {
  echo $daftar . " , ";
}

echo "<br>";
echo "setelah di sort : ";
sort($mahasiswa);
foreach ($mahasiswa as $daftar) {
  echo $daftar . " , ";
}
echo "<br>";
echo "setelah di rsort : ";
rsort($mahasiswa);
foreach ($mahasiswa as $daftar) {
  echo $daftar . " , ";
}
