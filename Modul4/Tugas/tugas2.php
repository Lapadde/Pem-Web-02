<?php
// Membuat array asosiatif
$alamat["Lina"] = "Pinrang";
$alamat["Arni"] = "Sidrap";
$alamat["Jona"] = "Enrekang";
$alamat["Punjabi"] = "India";
$alamat["Marcus"] = "Arab";

// Menampilkan array awal
echo "<strong>Array Awal</strong><br/>";
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}

// 1. Menggunakan array_slice() untuk mengambil sebagian elemen
$slicedArray = array_slice($alamat, 1, 3); // Mengambil 3 elemen mulai dari indeks 1
echo "<br/><strong>Array setelah diambil sebagian (slice)</strong><br/>";
foreach($slicedArray as $nama => $data){
    echo "$nama: $data<br/>";
}

// 2. Menggunakan array_splice() untuk menghapus dan menambah elemen
$splicedArray = $alamat; // Membuat salinan array
array_splice($splicedArray, 1, 2, array("Dewi" => "Makassar")); // Menghapus 2 elemen mulai dari indeks 1 dan menambah "Dewi"
echo "<br/><strong>Array setelah dihapus dan ditambah (splice)</strong><br/>";
foreach($splicedArray as $nama => $data){
    echo "$nama: $data<br/>";
}

// 3. Menggunakan array_unique() untuk menghapus nilai duplikat
// Pertama, kita akan membuat array dengan nilai duplikat
$alamatDuplikat = array("Lina" => "Pinrang", "Arni" => "Sidrap", "Jona" => "Enrekang", "Dewi" => "Pinrang", "Marcus" => "Arab");
$uniqueArray = array_unique($alamatDuplikat); // Menghapus nilai duplikat
echo "<br/><strong>Array setelah menghapus nilai duplikat</strong><br/>";
foreach($uniqueArray as $nama => $data){
    echo "$nama: $data<br/>";
}

// 4. Menggunakan array_reverse() untuk membalik urutan array
$reversedArray = array_reverse($alamat); // Membalik urutan array
echo "<br/><strong>Array setelah dibalik urutannya</strong><br/>";
foreach($reversedArray as $nama => $data){
    echo "$nama: $data<br/>";
}

// 5. Menggunakan array_walk() untuk menerapkan fungsi pada setiap elemen
echo "<br/><strong>Array setelah diterapkan fungsi dengan array_walk()</strong><br/>";
array_walk($alamat, function(&$data, $nama) {
    $data = strtoupper($data); // Mengubah nilai menjadi huruf kapital
});
foreach($alamat as $nama => $data){
    echo "$nama: $data<br/>";
}
?>
