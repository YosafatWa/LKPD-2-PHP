<?php
echo "<h2>No 1</h2>";
// Nomor 1

$haha = "Selamat ulang tahun yang ke-17";
$angka = preg_replace('/[^0-9]/', '', $haha); // preg_replace menghapus semua karakter kecuali angka dari string $haha dan menyimpan hasinya ke variable $angka

echo $haha;
echo "<br>";
if ($angka) {
    echo "Teks mengandung angka: " . implode(', ', str_split($angka)); // Mengubah array menjadi string
} else {
    echo "Teks tidak mengandung angka.";
}

echo "<h2>No 2</h2>";
// Nomor 2

$jamnormal=8;
$jamkerja=10;
$lembur= $jamkerja-$jamnormal;
$jamPertama = 50000;
$jamselanjutnya = 25000;


  if($jamkerja > 8) {
    $kompensasi = $jamPertama + ($jamselanjutnya * $lembur)-25000;
    echo "Lama kerja = " . $jamkerja;
    echo "<br>";
    echo "Jam lebih = " .$lembur;
    echo "<br>";
    echo "Kompensi = " . $kompensasi;

  }else{
    echo "Tidak ada kompensasi";
  }

echo "<h2>No 3</h2>";
// Nomor 3

for ($x = 1; $x <= 11; $x++) {
    if ($x % 2 == 1) {
        for ($j = 1; $j <=11; $j++){
            if ($j == 5  ) {
                echo $x . "x" . $j . "=" . $x*$j . "<br>";     
        }
    }
  }
}

echo "<h2>No 4</h2>";
//Nomor 4

for($x = 10; $x >= 1; $x--) {
    for ($j = 1; $j <= 10; $j++){
        if ($j == 1) {
            echo $x . "x" . $j . "=" . $x * $j . "<br>";
        }
    }
}

echo "<br>";


for ($i = 10; $i >= 1; $i--) {
    for ($e = 1; $e <= 10; $e++){
        if ($e == 2) {
            echo $i . "x" . $e . "=" . $i * $e . "<br>"; 
        }
    }
}

echo "<h2>No 5</h2>";
// Nomor 5

$angka1 = [80,77,65,89,55,12,90,86];
$angka2 = [77,99,55,81,45,90,91,98];



echo "Yang ada di kedua variabel : ";
echo "<br>";
$membandingkan= array_intersect($angka1,$angka2);  // Untuk mendapatkan elemen-elemen yang sama di kedua array.


foreach($membandingkan as $membandingkan1){ // Untuk menglooping array / menyebutkan satu-satu array
    echo $membandingkan1.","; 
}

echo "<br>";

$membandingkan2 = array_diff($angka1,$angka2); // Untuk membandingkan elemen yang ada di $angka1 tetapi tidak ada di $angka2.

echo "Yang tidak ada di kedua variabel : ";
echo "<br>";
foreach($membandingkan2 as $membandingkan22){ 
    echo $membandingkan22.","; 
}

echo "<h2>No 6</h2>";
// Nomor 6

$siswa = [
    [
        'nama' => '1. Andi',
        'nilai'=> [80,78,82,78,88],
    ],
    
    [
        'nama' => '2. Beni',
        'nilai'=> [86,70,80,85,81],
    ],
    
    
    [
        'nama' => '3. Dani',
        'nilai'=> [83,91,70,73,81],      
    ],
    
    [
        'nama' => '4. Eko',
        'nilai'=> [89,85,84,86,88],      
    ],
    
    ];
    
    foreach($siswa as $student) { // Loop untuk mengiterasi setiap siswa, menghitung total nilai (array_sum),menghitung banyaknya nilai (count), dan rata-rata nilai, lalu menampilkan hasilnya.
        $menhitungnilai = array_sum($student['nilai']);
        $banyaknilai = count($student['nilai']);
        $rataRata = $menhitungnilai/$banyaknilai;
        echo $student['nama'] ." : ". $rataRata . "<br>";
    }   

echo "<h2>No 7</h2>";
// Nomor 7

$nama1 = " Fema Flamelina Putri";
$nama2 = " Artasya Legina";

$jmlahnamaA = strlen($nama1); // Menggunakan fungsi strlen untuk menghitung jumlah karakter dalam $nama1 dan $nama2.
$jmlahnamaB = strlen($nama2); 

if($jmlahnamaA > $jmlahnamaB) {
    echo "Nama pertama :".$nama1;
    echo "<br>";
    echo "Nama kedua :".$nama2;
    echo "<br>";

    echo $nama1 . " memiliki jumlah karakter lebih banyak dari " . $nama2 . " dengan selisih " . $jmlahnamaA . " karakter";
} else if ($jmlahnamaA < $jmlahnamaB) {
 
    echo "Nama pertama :".$nama2;
    echo "<br>";
    echo "Nama kedua :".$nama1;
    echo "<br>";

    echo $nama2 . " memiliki jumlah karakter lebih banyak dari " . $nama1 . " dengan selisih " . $jmlahnamaB . " karakter";
}else {
    echo "Namanya sama panjang";
}

echo "<h2>No 8</h2>";
//Nomor 8

$data = [80,90,75,100,85,100,66];
$cari = 100;

$hitung = array_count_values($data)[$cari]; // Untuk menghitung kemunculan setiap angka dalam array $data dan mendapatkan jumlah kemunculan untuk angka $cari.

echo "Jumlah angka dari " . $cari . " = " .  $hitung;

echo "<h2>No 9</h2>";
//Nomor 9

$uang = 188500;
$total = 188500;
$pecahan = array(100000,50000,20000,10000,5000,2000,1000,500);
$hasil = array();
foreach ($pecahan as $nilai) { //  Loop untuk setiap nilai pecahan dalam array $pecahan, menghitung berapa lembar yang dibutuhkan untuk masing-masing pecahan dan mengurangi total uang.
    if ($total >= $nilai) {
        $lembar = intdiv($total, $nilai); // intdiv pembagian bulat
        $hasil[$nilai] = $lembar; 
        $total -= $lembar * $nilai; 
    }
}

echo "Contoh : " . $uang;
echo "<br>";
echo "Uang :" .  $uang;
echo "<br>";
echo "Lembar rupiah";
echo "<br>";

foreach ($hasil as $nilai => $lembar) { // Loop untuk menampilkan jumlah lembar uang untuk setiap pecahan.
    echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
}

echo "<h2>No 10</h2>";
// Nomor  10

function hitungUsia(...$ages) {
    $jumlahAnak = 0;
    $jumlahDewasa = 0;

    foreach ($ages as $age) {
        if ($age < 17) {
            $jumlahAnak++;
        } else {
            $jumlahDewasa++;
        }
    }

    return [
        'list_usia' => $ages,
        'jumlah_dewasa' => $jumlahDewasa,
        'jumlah_anak' => $jumlahAnak
    ];
}

$hasil = hitungUsia(12, 15, 17, 20, 25, 30, 35, 40, 45, 50);
echo "List Usia : " . implode(", ", $hasil['list_usia']) . "<br>"; // Untuk menggabungkan daftar usia menjadi string.
echo "Jumlah Kategori Dewasa : " . $hasil['jumlah_dewasa'] . "<br>";
echo "Jumlah Kategori Anak-anak : " . $hasil['jumlah_anak'] . "\n";

?>