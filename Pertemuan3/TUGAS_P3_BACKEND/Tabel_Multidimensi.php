<!DOCTYPE html>
<html>

<head>
  <title>Tabel Daftar Produk</title>
  <style>
    table {
      border-collapse: collapse;
      text-align: center;
    }

    th {
      border: 1px solid black;
      background-color: blue;
    }

    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Nama Produk</th>
      <th>Jenis Produk</th>
      <th>Harga Produk</th>
    </tr>

    <?php
    $produk = [
      ["monitor", "electronik", 3000000],
      ["cpu", "electronik", 2000000],
      ["keyboard", "electronik", 500000]
    ];
    foreach ($produk as $row) {
      echo "<tr>";
      foreach ($row as $colum) {
        echo "<td> $colum </td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>
