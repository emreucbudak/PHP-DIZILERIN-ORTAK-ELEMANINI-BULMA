<?php
/******************************************************************************

    Emre Üçbudak Karadeniz Teknik Üniversitesi

*******************************************************************************/
//  dizi ortak elemanlarını bulmak için array_merge
$dizi = array("emre","üçbudak");
$dizi1 = array("ktü","emre","üçbudak");
$yenidizi = array_intersect($dizi,$dizi1);
echo($yenidizi[0])
?>
