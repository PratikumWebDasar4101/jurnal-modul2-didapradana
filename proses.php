<?php 
	
$angka=$_GET['angka'];

// $angka = 5;
function pertama($x, $y){
	if ($x > 0) {
		if ($y > 0) {
			echo "* ";
			$y--;
			pertama($x, $y);
		}
		else{
			echo "<br>";
			$x--;
			pertama($x, $x);
		}
	}
}
pertama ($angka, $angka);

echo "<br> <br>";

$bilangan = $angka;
$total1 = 0;
$total2 = 0;
$bil_awal = 1;
    while ($bil_awal <= $bilangan) {
        if ($bil_awal % 2 == 0) {
            echo "Bilangan genap = " . $bil_awal . "<br/>";
                $bil_awal++;
                $total1 = $total1+1;
        } else {
          	echo "Bilangan ganjil = " . $bil_awal . "<br/>";
                $bil_awal++;
                $total2 = $total2+1;
                }
        }
        echo "Jumlah Deret Genap = $total1 <br>";
        echo "Jumlah Deret Ganjil = $total2" ;

?>
