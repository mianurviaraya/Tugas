<?php
// MIA NURVIA RAYA
// 18050623015
// D3 Manajemen Informatika
class Gajah extends Binatang implements Herbifora
{
    protected $suara;
    protected $wrnBL;
    public function __construct($Nama, $jmlkk, $suara, $warna)
    {
        $this->nama = $Nama;
        $this->jmlkk = $jmlkk;
        $this->suara = $suara;
        $this->wrnBL = $warna;
    }
    public function DisplayMakan()
    {
        echo "Jenis : Herbifora <br> Makanan : Tumbuhan";
    }
    public function DisplayBinatang()
    {
        echo "Binatang : Gajah". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlkk;
    }
    public function DisplayData()
    {
        echo "<br><br>Binatang : Gajah ". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlkk;
        echo "<br>Suara : ".$this->suara."<br>"."Warna : ".$this->wrnBL;
        echo "<br>Jenis : Herbifora <br> Makanan : Tumbuhan";
    }
}  
 
?>