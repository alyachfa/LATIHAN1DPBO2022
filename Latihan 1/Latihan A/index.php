<?php
    include "DataMahasiswa.php";

    $mahasiswa1 = new DataMahasiswa();
    $mahasiswa1->setNim('1902345');
    $mahasiswa1->setNama('asep');
    $mahasiswa1->setjenisKelamin('laki-laki');
    $mahasiswa1->setProdi('Ilmu Komputer');
    $mahasiswa1->setSemester('6');

    $mahasiswa2 = new mahasiswa('1902345', 'asep', 'perempuan', 'ilmu komputer', '6');

    echo "Nim : ". $mahasiswa1->getNim() . "<br>";
    echo "Nama : ". $mahasiswa1->getNama(). "<br>";
    echo "Jenis Kelamin : ". $mahasiswa1->getjenisKelamin(). "<br>";
    echo "Program Studi : ".$mahasiswa1->getProdi(). "<br>";
    echo "Semester : ".$mahasiswa1->getSemester(). "<br>"; 

    echo "Nim : ". $mahasiswa2->getNim() . "<br>";
    echo "Nama : ". $mahasiswa2->getNama(). "<br>";
    echo "Jenis Kelamin : ". $mahasiswa2->getjenisKelamin(). "<br>";
    echo "Program Studi : ".$mahasiswa2->getProdi(). "<br>";
    echo "Semester : ".$mahasiswa2->getSemester(). "<br>"; 
?>
