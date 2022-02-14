<?php

class daftarTim{

	private $namaTim;
	private $negaraAsal;
	private $tahun;
	private $pemain;

	public function __construct(){
	}

	public function setNamaTim($namaTim)
	{
		$this->namaTim = $namaTim;
	}

	public function getNamaTim()
	{
		return $this->namaTim;
	}

	public function setNegaraAsal($negaraAsal)
	{
		$this->negaraAsal = $negaraAsal;
	}

	public function getNegaraAsal()
	{
		return $this->negaraAsal;
	}

	public function setTahun($tahun)
	{
		$this->tahun = $tahun;
	}

	public function getTahun()
	{
		return $this->tahun;
	}

	public function setPemain($pemain)
	{
		$this->pemain = $pemain;
	}

	public function getPemain()
	{
		return $this->pemain;
	}

}

?>
