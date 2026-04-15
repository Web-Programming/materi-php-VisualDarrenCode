<?php
class mobil {
    // Properti
    public $warna;
    public $merk;

    // Method (Fungsi yang diletakkan di dalam class)
    public function maju() {
        return "Mobil maju";
    }

    public function berhenti() {
        return "Mobil berhenti";
    }
}

// Langsung memanggil nama class karena tidak ada namespace khusus
$mobil_ahmad = new mobil();
$mobil_anton = new mobil();

$mobil_ahmad->warna = "hitam";
$mobil_ahmad->merk = "toyota";

echo "Mobil Ahmad: " ;
echo "<br>warna : " . $mobil_ahmad->warna;
echo "<br>merk : " . $mobil_ahmad->merk;
echo "<br>";

// Sekarang pemanggilan method ini akan berhasil
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_ahmad->berhenti();
?>