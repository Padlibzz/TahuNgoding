<?php
//Buat program yang menampilkan bilangan genap 1–20.
function BBUlat()
{
  echo "Bilangan Bulat 1-20 : ";
  for ($i = 1; $i <= 20; $i++) {
    echo "$i ";
  }
}

function BGenap()
{
  echo "Bilangan genap 1-20 : ";
  for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
      echo "$i ";
    }
  }
}
function BGanjil()
{
  echo "Bilangan ganjil 1-20 : ";
  for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
      echo "$i ";
    }
  }
}

echo BBUlat() . "<br>";
echo BGenap() . "<br>";
echo BGanjil() . "<br>";
