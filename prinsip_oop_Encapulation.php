<?php
class Buku {
    Private $judul;
    Private $penulis;

    public function  __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
}
$buku1 = new Buku("pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul();
?>