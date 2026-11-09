<?php
    const DISKON_PERSEN = 10;
    $nama = 'Nadia';
    $nim = '00260123';
    $barang = 'Buku tulis';
    $harga = 12500;
    $jumlah = 8;  
    $kodeBayar = 'QRIS';
    $subtotal = $harga * $jumlah; // 12500 × 8 = 100000
    if ($subtotal >= 100000) { 
        $diskonPersen = 10;
    } elseif ($subtotal >= 50000) { 
        $diskonPersen = 5;
    } else {
        $diskonPersen = 0; 
    }

    switch ($kodeBayar) { 
        case 'TUNAI':
            $metode = 'Tunai'; 
            break;
        case 'QRIS':
            $metode = 'Pembayaran QRIS'; 
            break;
        case 'TRANSFER':
            $metode = 'Transfer bank'; 
            break;
        default:
            $metode = 'Metode tidak dikenal'; 
    }
    $potongan = (int) round($subtotal * $diskonPersen / 100); 
    $total = $subtotal - $potongan;
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Struk Belanja</title>
</head>
<body>
  <h1>Struk Belanja</h1>
  <p><?php echo $nama . ' | NIM ' . $nim; ?></p>
  <p><?php echo $barang . ' × ' . $jumlah; ?></p>
  <p>Subtotal: Rp<?php echo number_format($subtotal, 0, ',', '.'); ?></p>
  <p>Diskon (<?php echo $diskonPersen; ?>%):
     Rp<?php echo number_format($potongan, 0, ',', '.'); ?></p> 
  <p><strong>Total bayar:
     Rp<?php echo number_format($total, 0, ',', '.'); ?></strong></p> 
  <p>Metode: <?php echo $metode; ?></p>
</body> 
</html>