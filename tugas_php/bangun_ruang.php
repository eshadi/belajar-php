<?php
	$a = 11;
	$s = 9;
	$p = 7;
	$r = 14;
	$l = 5;
	$t = 3;
	$pl = 8;
	$lt = 6;
	$pt = 4;
	$rl = "rumus luas";
	$rv = "rumus volume";



	// soalnya
	echo "alas = 11 <br> sisi = 9<br>panjang = 7<br>r = 14<br>lebar = 5<br> tinggi = 3<br> panjang lebar = 8<br> lebar tinggi = 6 <br> panjang tinggi = 4" ;
	echo "<hr>";

	// rumus kubus
	$hl = 6 * ($s * $s) ;
	$hv =  $s * $s * $s ;
	echo "$rl dan $rv Kubus <br>";
	echo "LUAS = 6 X (sisi X sisi) sisi contoh 6 X ($s * $s) = $hl cm<sup>2</sup><br>" ;
	echo "VOLUME = sisi X sisi X sisi contoh $s* $s* $s = $hv cm<sup>3</sup>";
	echo "<hr>";

	// rumus balok
	$hl = 2 * ($pl * $lt *$pt) ;
	$hv =  $p * $l * $t ;
	echo "$rl dan $rv Balok <br>";
	echo "LUAS = 2 X (panjang lebar X lebar tinggi X panjang tinggi) sisi contoh 2 X ($pl * $lt * $pt) = $hl cm<sup>2</sup><br>" ;
	echo "VOLUME = panjang X lebar X tinggi contoh $p* $l* $t = $hv cm<sup>3</sup>";
	echo "<hr>";


	// rumus bola
	$hl = 4* 22/7* $r**2 ;
	$hv = 4/3* 22/7* $r**2 ;
	echo "$rl dan $rv bola <br>";
	echo "LUAS = 4 X π X r<sup>2</sup> contoh 4 X 22/7 * $r<sup>2</sup> = $hl cm<sup>2</sup><br>" ;
	echo "VOLUME = 4/3 X π X r<sup>2</sup> contoh 4/3 X 22/7 X $r<sup>2</sup> = $hv cm<sup>3</sup>";
	echo "<hr>";





?>