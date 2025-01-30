<?php
// Membuat array asosiatif
$alamat["Lina"] = "Pinrang";
$alamat["Arni"] = "Sidrap";
$alamat["Jona"] = "Enrekang";
$alamat["Punjabi"] = "India";
$alamat["Marcus"] = "Arab";

// Menampilkan array sebelum diurutkan
echo "<strong>Sebelum diurutkan</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 1. Mengurutkan berdasarkan nilai
asort($alamat);
echo "<strong>Setelah diurutkan berdasarkan nilai</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 2. Mengurutkan berdasarkan kunci
ksort($alamat);
echo "<strong>Setelah diurutkan berdasarkan kunci</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 3. Mengurutkan berdasarkan nilai secara terbalik
arsort($alamat);
echo "<strong>Setelah diurutkan berdasarkan nilai secara terbalik</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 4. Mengurutkan berdasarkan kunci secara terbalik
krsort($alamat);
echo "<strong>Setelah diurutkan berdasarkan kunci secara terbalik</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 5. Menggunakan usort() untuk mengurutkan berdasarkan nilai dengan fungsi kustom
// Pertama, kita perlu mengubah array asosiatif menjadi array numerik untuk menggunakan usort
$arrayNumerik = [];
foreach ($alamat as $nama => $data) {
    $arrayNumerik[] = ['nama' => $nama, 'data' => $data];
}

usort($arrayNumerik, function($a, $b) {
    return strcmp($a['data'], $b['data']); // Mengurutkan berdasarkan nilai
});

echo "<strong>Setelah diurutkan menggunakan usort() berdasarkan nilai</strong><br/>";
foreach ($arrayNumerik as $item) {
    echo "{$item['nama']}: {$item['data']}<br/>";
}
?>
