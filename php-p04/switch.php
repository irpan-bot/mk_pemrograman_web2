<?php
    $kodeBayar = 'COD';

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
echo $metode;