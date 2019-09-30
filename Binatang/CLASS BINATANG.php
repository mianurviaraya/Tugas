<?php
// MIA NURVIA RAYA
// 18050623015
// D3 Manajemen Informatika
abstract class Binatang
{
    protected $nama;
    protected $jmlkk;
    public function __construct($nama, $jmlkk)
    {
        $this->nama = $nama;
        $this->jmlkk = $jmlkk;
    }      
    
    public function SetNama($Nama)
    {
        $this->nama = $Nama;
    }
    public function GetNama()
    {
        return $this->nama;
    }
    public function SetJmlKK($jmlkk)
    {
        $this->jmlkk = $jmlkk;
    }
    public function GetKK()
    {
        return $this->jmlkk;
    }
    public function DisplayBinatang()
    {
        echo "Binatang : ". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlkk;
    }
}
?>