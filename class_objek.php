<?php
class Mobil{
    public $merek;
    public $warna;

    public function __construct($merek, $warna){
        $this->merek=$merek;
        $this->warna=$warna;
    }
    public function deskripsi(){
        return "Mobil Ini Adalah $this->merek Berwarna $this->warna.";
    }
}
// objek
$mobil=new Mobil("Tesla", "Ducati");
// menampilkan informasi tentang objek tersebut
echo $mobil->deskripsi();
?>