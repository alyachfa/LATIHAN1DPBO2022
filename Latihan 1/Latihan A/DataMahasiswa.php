<?php

class DataMahasiswa
{
    private $Nim = null;
    private $Nama = null;
    private $jenisKelamin = null;
    private $Prodi = null;
    private $Semester = null;

    // constructor
    public function __construct($Nim = null, $Nama = null, $jenisKelamin= null, $Prodi = null, $Semester = null)
    {
        $this->Nim = $Nim;
        $this->Nama = $Nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->Prodi = $Prodi;
        $this->Semester = $Semester;
    }

    // setter dan getter method
    public function setNim($Nim)
    {
        $this->Nim = $Nim;
    }

    public function getNim()
    {
        return $this->Nim;
    }

    public function setNama($Nama)
    {
        $this->Nama = $Nama;
    }

    public function getNama()
    {
        return $this->Nama;
    }

    public function setjenisKelamin($jenisKelamin)
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function getjenisKelamin()
    {
        return $this->jenisKelamin;
    }

    public function setProdi($Prodi)
    {
        $this->Prodi = $Prodi;
    }

    public function getProdi()
    {
        return $this->Prodi;
    }

    public function setSemester($Semester)
    {
        $this->Semester = $Semester;
    }

    public function getSemester()
    {
        return $this->Semester;
    }
}

?>
