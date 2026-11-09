<?php
    $harga = 12500;
    echo '<table border="1">';
    echo '<tr><th>Jumlah</th><th>Subtotal</th></tr>'; 
    for ($jumlah = 1; $jumlah <= 5; $jumlah++) {
        $subtotal = $harga * $jumlah;
        $rupiah = number_format($subtotal, 0, ',', '.'); 
        echo '<tr><td>' . $jumlah . '</td>';
        echo '<td>Rp' . $rupiah . '</td></tr>'; 
    }
    echo '</table>';