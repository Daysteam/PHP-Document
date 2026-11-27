<?php

$nama = 'Evaldy Ariyanto';
$umur = 17;
$kelas = 'XII RPL 1';
$jurusan = 'RPL';
$status = true;
$nilai = 87.8;
$null = null;

$siswa = [
    'nama' => $nama,
    'umur' => $umur,
    'kelas' => $kelas,
    'jurusan' => $jurusan,
    'status' => $status
];

const STATUS_AKTIF = "true";

var_dump($siswa);
var_dump($nama);
var_dump($umur);
var_dump($kelas);
var_dump($jurusan);
var_dump($status);
var_dump($nilai);
var_dump($null);

echo "\n=== Data Siswa ===\n";
echo "Nama  : " . $siswa['nama'] . "\n";
echo "Kelas  : " . $siswa['kelas'] . "\n";
echo "Jurusan  : " . $siswa['jurusan'] . "\n";
echo "Umur  : " . $siswa['umur'] . "\n";
echo "Status  : " . $siswa['status'] . "\n";