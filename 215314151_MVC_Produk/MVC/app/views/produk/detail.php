<?php

echo "<table>
<td><img src='" . BASEURL . "/image/" . $data['barang']['gambar'] . ".jpg' width='175'></td>
<td>Nama:".$data['barang']['Nama_Produk']."
<br>
Harga: ".$data['barang']['Harga']."
<br>
Exp: ".$data['barang']['Expired']."
<br>
Merk: ".$data['barang']['Merk']."
<br>
Distributor: ".$data['barang']['Distributor']."
<br>
</td>
<table>
<br>";
echo "<a href='" . BASEURL . "/home' class='card-link'>Kembali</a>";