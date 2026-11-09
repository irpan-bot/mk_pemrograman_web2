<?php
    $barang = [
        ['nama' => 'Buku tulis', 'harga' => 12500, 'jumlah' => 3], 
        ['nama' => 'Pulpen', 'harga' => 4500, 'jumlah' => 2], 
        ['nama' => 'Penghapus', 'harga' => 3500, 'jumlah' => 1], 
    ];

    $subtotal = 0; 
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Struk Belanja Banyak Barang</title>
</head>
<body>
    <h1>Struk Belanja Banyak Barang</h1>

    <table border="1" cellpadding="6">
    <tr><th>Barang</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th></tr>
    <?php foreach ($barang as $item) {
        $subtotalItem = $item['harga'] * $item['jumlah']; 
        $subtotal += $subtotalItem;
    ?>
    <tr>
        <td><?= htmlspecialchars($item['nama']) ?></td>
        <td>Rp<?= number_format($item['harga'], 0, ',', '.') ?></td>
        <td><?= $item['jumlah'] ?></td>
        <td>Rp<?= number_format($subtotalItem, 0, ',', '.') ?></td>
    </tr>
<?php } ?>
</table>

<?php
    if ($subtotal >= 100000) { 
        $diskon = 10;
    } elseif ($subtotal >= 50000) { 
        $diskon = 5;
    } else {
        $diskon = 0; 
    }

    $potongan = (int) round($subtotal * $diskon / 100); 
    $total = $subtotal - $potongan;
?>

<p>Subtotal transaksi: Rp<?= number_format($subtotal, 0, ',', '.') ?></p>
<p>Diskon (<?= $diskon ?>%): Rp<?= number_format($potongan, 0, ',', '.') ?></p> 
<p><strong>Total bayar: Rp<?= number_format($total, 0, ',', '.') ?></strong></p> 
</body>
</html>