<?php
    $nama="Toko Dhifa";
    $Nama="Dyah";
    $Nim="2502020133";

    $harga = 1500;
    $qty = 5;
    $subtotal = $harga * $qty;

    $diskon=0;
    // diskon 5% diberikan apabila subtotal lebih dari 5000
    if($subtotal>5000){
        $diskon = 5/100;
    }
    $nDiskon = $subtotal * $diskon;
    $nTotal = $subtotal - $nDiskon;

    echo $nama;
    echo "<br>Harga: " . $harga;
    echo "<br>Jumlah: " . $qty;
    echo "<br>Sub Total: " . $subtotal;
    echo "<br>Diskon: " .$nDiskon;
    echo "<br>Total: " .$nTotal;

    


?>