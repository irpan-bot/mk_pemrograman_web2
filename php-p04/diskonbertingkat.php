<?php
$subtotal = 100000;
if ($subtotal >= 100000) { 
    $diskonPersen = 10;
} elseif ($subtotal >= 50000) { 
    $diskonPersen = 5;
} else {
    $diskonPersen = 0; 
}
echo 'Diskon: ' . $diskonPersen . '%';
// Diskon: 10%