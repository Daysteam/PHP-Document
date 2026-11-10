<?php 

function validasiNilai($nilai){
    return $nilai < 0 || $nilai > 100;
}

function tentukanStatus($nilai){
    return $nilai < 75 ? 'tidak lulus' : 'lulus';
}

function tentukanPredikat($nilai){
    if($nilai >= 90){
        return 'A';
    } elseif($nilai >= 80){
        return 'B';
    } elseif($nilai >= 75){
        return 'C';
    }

    return 'D';
}
function tampilkanSiswa($nama, $nilai, $kelas = "XII RPL 1"){
    if(validasiNilai($nilai)){
        echo "Nilai tidak boleh melebihi 100 atau kurang dari 0\n\n";
        return;
    }
    $status = tentukanStatus($nilai);
    $predikat = tentukanPredikat($nilai);

    echo "Nama : " . $nama . "\n";
    echo "Kelas : " . $kelas . "\n";
    echo "Nilai : " . $nilai . "\n";
    echo "Status : " . $status . "\n";
    echo "Predikat : " . $predikat . "\n";
    echo "============= \n\n";
}

tampilkanSiswa("Evaldy", 90);
tampilkanSiswa("Rina", 120);
tampilkanSiswa("Andi", 65);
tampilkanSiswa("Budi", 85);