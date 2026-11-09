<?php
    $stok = 5;
    while ($stok > 0) {
        echo '<p>Ambil 1 unit dari stok ' . $stok . '.</p>'; 
        $stok--;
    }
    echo '<p>Stok akhir: ' . $stok . '</p>';