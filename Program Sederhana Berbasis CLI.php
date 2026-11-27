<?php 

$siswas = [
    [
        "nama" => "Evaldy",
        "nilai" => 90
    ],
    [
        "nama" => "Andi",
        "nilai" => 120
    ],
    [
        "nama" => "Budi",
        "nilai" => 65
    ]
];

function validasiNilai($nilai){
    if($nilai < 0 || $nilai > 100){
        throw new Exception("Nilai tidak boleh kurang dari 0 dan melebihi 100 \n");
    }
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
    validasiNilai($nilai);
    $status = tentukanStatus($nilai);
    $predikat = tentukanPredikat($nilai);

    echo "Nama : " . $nama . "\n";
    echo "Kelas : " . $kelas . "\n";
    echo "Nilai : " . $nilai . "\n";
    echo "Status : " . $status . "\n";
    echo "Predikat : " . $predikat . "\n";
    var_dump($nilai);
    echo "============= \n\n";
}

foreach ($siswas as $siswa) {
    try {
        tampilkanSiswa($siswa['nama'], $siswa['nilai']);

    } catch (Exception $e) {
        echo "Error {$siswa['nama']}: ";
        echo $e->getMessage();
    } finally {
        echo "Pemeriksaan {$siswa['nama']} selesai.\n\n";
    }
}
