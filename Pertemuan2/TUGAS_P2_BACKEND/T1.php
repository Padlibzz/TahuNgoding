<?php
//Buat program yang menampilkan bilangan genap 1–20.
echo "Bilangan Bulat 1-20 : ";
for ($i = 1; $i <= 20; $i++) {
  echo "$i ";
}
echo "<br>";
echo "Bilangan genap 1-20 : ";
for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 == 0) {
    echo "$i ";
  }
}
echo "<br>";
echo "Bilangan ganjil 1-20 : ";
for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 != 0) {
    echo "$i ";
  }
}
