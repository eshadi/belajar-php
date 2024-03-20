<?php

	$a = 11;
	$s = 9;
	$p = 7;
	$r = 14;
	$l = 5;
	$t = 3;
	$rl = "rumus luas";
	$rk = "rumus keliling";



	// soalnya
	echo "alas = 11 <br> sisi = 9<br>panjang = 7<br>r = 14<br>lebar = 5<br> tinggi = 3" ;
	echo "<hr>";
	// rumus luas persegi
	$hl = $s * $s ;
	$hk = 4 * $s ;
	echo "$rl dan $rk persegi<br>";
	echo "LUAS = sisi X sisi contoh $s * $s = $hl cm<sup>2</sup><br>" ;
	echo "KELILING = 4 X sisi contoh 4 * $s = $hk cm";
	echo "<hr>";

	// rumus luas persegi panjang
	$hl = $p * $l ;
	$hk = 2 * $p + 2 * $l ;
	echo "$rl dan $rk persegi panjang<br>";
	echo "LUAS = panjang X lebar contoh $p * $l = $hl cm<sup>2</sup> <br>" ;
	echo "KELILING = 2 X panjang + 2 X lebar contoh 2 * $p + 2 * $l = $hk cm";
	echo "<hr>";

	// rumus segitiga
	$hl = 1/2 * $a * $t ;
	$hk = $a + $s + $s ;
	echo "$rl dan $rk segitiga<br>";
	echo "LUAS = 1/2 * alas * tinggi contoh 1/2 * $a * $t = $hl cm<sup>2</sup> <br>" ;
	echo "KELILING = alas + sisi + sisi contoh $a + $s + $s = $hk cm";
	echo "<hr>";

	// rumus jajar genjang
	$hl = $a * $t ;
	$hk = 2 * $a + 2 * $s ;
	echo "$rl dan $rk jajargenjang<br>";
	echo "LUAS = alas * tinggi contoh $a * $t = $hl cm<sup>2</sup> <br>" ;
	echo "KELILING = 2 X alas + 2 X sisi contoh 2 * $a + 2 * $s = $hk cm" ;
	echo "<hr>";
 
 	// rumus lingkaran
	$hl = 22/7 * $r**2 ;
	$hk = 2 * 22/7 * $r ;
	echo "$rl dan $rk lingkaran<br>";
	echo "LUAS = π X r contoh 22/7 * $r = $hl cm<sup>2</sup> <br>" ;
	echo "KELILING = 2 X π X r contoh 2 * 22/7 * $r = $hk cm" ;
	echo "<hr>";




?>
