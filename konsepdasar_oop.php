<?php
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function tampilkanInfo(){
        return "judul : $this->judul, penulis : $this->penulis";
    }
}
$buku1 = new Buku("pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();
?>