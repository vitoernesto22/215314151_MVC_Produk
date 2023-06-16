<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Produk</h3>

            <table border='1'>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>

                <ul class="list-group">
                    <?php foreach ($data['barang'] as $barang) : ?>

                            <?php
                            echo "<tr>";
                            echo "<td>" . $barang['ID'] . "</td>";
                            echo "<td>" . $barang['Nama_Produk'] . "</td>";
                            echo "<td>" . $barang['Harga'] . "</td>";
                            ?>
                            <td><a href="<?= BASEURL; ?>/produk/detail/<?= $barang['ID']; ?>" class="badge badge-primary">detail</a></td>
                        </li>
                    <?php endforeach; ?>
                </ul>

        </div>
    </div>
</div>