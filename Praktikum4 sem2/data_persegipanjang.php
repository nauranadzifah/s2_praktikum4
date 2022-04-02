<?php
require_once "class_persegipanjang.php";
$persegiPanjang1 = new PersegiPanjang(15,5);
$persegiPanjang2 = new PersegiPanjang(10,3);
echo "<br>Luas Persegi Panjang 1    : ".$persegiPanjang1->getLuas();
echo "<br>Luas Persegi Panjang 2    : ".$persegiPanjang2->getLuas();
echo "<br>Keliling Persegi Panjang 1    : ".$persegiPanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang 2    : ".$persegiPanjang2->getKeliling();
?>