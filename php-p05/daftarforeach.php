<?php
    $daftar = ['Buku tulis', 'Pulpen', 'Penghapus','Pensil', 'Penggaris', 'Spidol', 'Kertas HVS', 'Stapler', 'Klip kertas', 'Map']; 

    echo '<ul>';
    foreach ($daftar as $nama) {
        echo '<li>' . htmlspecialchars($nama) . '</li>'; 
        //htmlspecialchars() digunakan untuk menghindari XSS (Cross-Site Scripting) dengan mengubah karakter khusus menjadi entitas HTML.
    }
    echo '</ul>';