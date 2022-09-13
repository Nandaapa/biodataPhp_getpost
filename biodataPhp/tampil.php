<?php 
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi= $_POST['hobi'];
    $citacita = $_POST['citacita'];
    $usia = $_POST['usia'];
    $asalSekolah = $_POST['asalSekolah'];
    $ttl = $_POST['ttl'];

    echo "Nama = $nama"."<br>";
    echo "Jenis Kelamin = $jenis_kelamin" . "<br>";
    echo "agama = $agama" . "<br>";
    echo "Alamat = $alamat" ."<br>";
    echo "Tempat Tanggal Lahir = $ttl" ."<br>";
    echo "Hobi = $hobi"."<br>";
    echo "Cita-cita = $citacita"."<br>";
    echo "Usia = $usia"."<br>";
    echo "Asal sekolah = $asalSekolah"."<br>";
    
?>