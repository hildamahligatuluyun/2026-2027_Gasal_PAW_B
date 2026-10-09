<?php
echo 'Array awal: ("A")<br>';
$array_tambah = array("A");
array_push($array_tambah, "B");
echo 'Hasil array_push: ' . implode(' ', $array_tambah) . '<br><br>';


echo 'Array awal: ("A", "B") digabung dengan ("C")<br>';
$array_gabung1 = array("A", "B");
$array_gabung2 = array("C");
$hasil_gabung = array_merge($array_gabung1, $array_gabung2);
echo 'Hasil array_merge: ' . implode(' ', $hasil_gabung) . '<br><br>';


echo 'Array awal: ("x" => 1, "y" => 2)<br>';
$array_nilai = array("x" => 1, "y" => 2);
$hasil_nilai = array_values($array_nilai);
echo 'Hasil array_values: ' . implode(' ', $hasil_nilai) . '<br><br>';


echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
$array_cari = array("A", "B", "C");
$indeks_ditemukan = array_search("B", $array_cari); 
echo 'Hasil array_search: ' . $indeks_ditemukan . '<br><br>';


echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';
$array_saring = array(0, 1, false, 2, "", 3, "array");
$hasil_saring = array_filter($array_saring); 
echo 'Hasil array_filter: ' . implode(' ', $hasil_saring) . '<br><br>';


echo 'Array awal: (3, 1, 2)<br>';
$array_urut = array(3, 1, 2);

$urut_naik = $array_urut;
sort($urut_naik);
echo 'Hasil sort: ' . implode(' ', $urut_naik) . '<br>';

$urut_turun = $array_urut;
rsort($urut_turun); // Mengurutkan dari besar ke kecil (Reverse)
echo 'Hasil rsort: ' . implode(' ', $urut_turun) . '<br><br>';


echo 'Array awal: ("Peter"=>35, "Ben"=>37, "Joe"=>43)<br>';
$array_asosiatif = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

function cetakAsosiatif($array) {
    $keluaran = array();
    foreach($array as $kunci => $nilai) {
        $keluaran[] = $kunci . "=> " . $nilai;
    }
    return implode(', ', $keluaran) . ',';
}

$urut_nilai_naik = $array_asosiatif;
asort($urut_nilai_naik);
echo 'Hasil asort: ' . cetakAsosiatif($urut_nilai_naik) . '<br>';

$urut_kunci_naik = $array_asosiatif;
ksort($urut_kunci_naik);
echo 'Hasil ksort: ' . cetakAsosiatif($urut_kunci_naik) . '<br>';

$urut_nilai_turun = $array_asosiatif;
arsort($urut_nilai_turun);
echo 'Hasil arsort: ' . cetakAsosiatif($urut_nilai_turun) . '<br>';

$urut_kunci_turun = $array_asosiatif;
krsort($urut_kunci_turun);
echo 'Hasil krsort: ' . cetakAsosiatif($urut_kunci_turun) . '<br>';
?>