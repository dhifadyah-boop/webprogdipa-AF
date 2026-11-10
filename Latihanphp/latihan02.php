<?php
    //JSon
    $json_trans = '{
    "idnota":"TR-0001",
    "tgl":"2026-05-17",
    "jam":"13:25:20",
    "kasir":"Dhifa",
    "pelanggan":{
    "nama":"Dyah",
    "alamat":"Gang Macan, Kuta",
    "nohp":"083210000"
    },
    "items":[
    {
    "kodebarang":"B0001",
    "namabarang":"Sandal Jepit Kuda",
    "jenis":"Asesoris",
    "hargajual":200000,
    "qty":20,
    "subtotal":4000000
    },{
    "kodebarang":"B0002",
    "namabarang":"Sandal Jepit Macan",
    "jenis":"Asesoris",
    "hargajual":150000,
    "qty":50,
    "subtotal":7500000
    }
    ],
    "total_item":70,
    "ntotal":11500000
    }';

    $jdata = json_decode($json_trans);

    echo $jdata->idnota;