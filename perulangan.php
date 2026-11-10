<?php 

$siswas = [
    [
        'nama' => 'Evaldy',
        'nilai' => 90,
        'kelas' => 'XII RPL 1'
    ],
    [
        'nama' => 'Andi',
        'nilai' => 65,
        'kelas' => 'XII RPL 1'
    ],
    [
        'nama' => 'Budi',
        'nilai' => 1001,
        'kelas' => 'XII RPL 1'
    ],
    [
        'nama' => 'Rina',
        'nilai' => 70,
        'kelas' => 'XII RPL 1'
    ],
    [
        'nama' => 'Qhibran',
        'nilai' => 100,
        'kelas' => 'XII RPL 1'
    ]
];

$jumlahLulus = 0;
$jumlahTidakLulus = 0;
$jumlahNilaiTidakValid = 0;
$i = 1;

echo "=== Data Siswa ===\n";

foreach($siswas as $siswa) {
    if($siswa['nilai'] < 0 || $siswa['nilai'] > 100){
        $jumlahNilaiTidakValid++;
        continue;
    } elseif ($siswa['nilai'] < 75) {
        $status = 'tidak lulus';
        $jumlahTidakLulus++;
    }else {
        $status = 'lulus';
        $jumlahLulus++;
    }
    echo "No : " . $i . "\n";
    echo "Nama : " . $siswa['nama'] . "\n";
    echo "Kelas : " . $siswa['kelas'] . "\n";
    echo "Status : " . $status . "\n";
    echo "=============\n\n";
    $i++;
}

echo "Jumlah yang lulus : " . $jumlahLulus . "\n";
echo "Jumlah yang tidak lulus : " . $jumlahTidakLulus . "\n";
echo "Jumlah nilai yang tidak valid : " . $jumlahNilaiTidakValid . "\n";



