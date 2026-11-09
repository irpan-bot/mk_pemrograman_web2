<?php
    const DISKON_PERSEN = 10;
    $nama = 'Nadia';
    $nim = '00260123';
    $barang = 'Buku tulis';
    $harga = 12500;
    $jumlah = 3;
    $subtotal = $harga * $jumlah;
    $potongan = $subtotal * DISKON_PERSEN / 100;
    $total = $subtotal - $potongan;
?>

<!doctype html>
<html lang="id">
<meta charset="utf-8">
<title>Struk Belanja</title>
<body>
    <h1>Struk Belanja</h1>
    <p><?php echo $nama . ' | NIM ' . $nim; ?></p>
    <p><?php echo $barang . ' × ' . $jumlah; ?></p>
    <p>Harga satuan: Rp<?php echo number_format($harga, 0, ',', '.'); ?></p>
    <p>Subtotal: Rp<?php echo number_format($subtotal, 0, ',', '.'); ?></p>
    <p>Diskon (<?php echo DISKON_PERSEN; ?>%): Rp<?php echo number_format($potongan, 0, ',', '.'); ?></p> 
    <p><strong>Total bayar: Rp<?php echo number_format($total, 0, ',', '.'); ?></strong></p> 
</body>
</html>