<?php
$subtotal = 50000;
if ($subtotal >= 50000) { 
    $diskonPersen = 5; 
} else {
    $diskonPersen = 0; 
}

$potongan = (int) round($subtotal * $diskonPersen / 100); 
//  potongan = 50000 * 5 / 100 = 2500

$total = $subtotal - $potongan;
// total = 50000 - 2500 = 47500

echo 'Total bayar: Rp' . number_format($total, 0, ',', '.');
// Total bayar: Rp47.500