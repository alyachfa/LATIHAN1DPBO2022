<?php

class DataMahasiswa
{
    private $nim = null;
    private $nama = null;
    private $jenisKelamin = null;
    private $prodi = null;
    private $semester = null;

    // constructor
    public function __construct($nim = null, $nama = null, $jenisKelamin= null, $prodi = null, $semester = null)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // setter dan getter method
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($jenisKelamin)
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function getGender()
    {
        return $this->jenisKelamin;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }
}

?>