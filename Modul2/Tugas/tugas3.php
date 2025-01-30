<?php
$bln = date("M");
$jumlahHari = 0;

switch($bln) {
    case "Jan":
        $namaBln = "Januari";
        $jumlahHari = 31;
        break;
    case "Feb":
        $namaBln = "Februari";
        $tahun = date("Y");
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $jumlahHari = 29; 
        } else {
            $jumlahHari = 28; 
        }
        break;
    case "Mar":
        $namaBln = "Maret";
        $jumlahHari = 31;
        break;
    case "Apr":
        $namaBln = "April";
        $jumlahHari = 30;
        break;
    case "May":
        $namaBln = "Mei";
        $jumlahHari = 31;
        break;
    case "Jun":
        $namaBln = "Juni";
        $jumlahHari = 30;
        break;
    case "Jul":
        $namaBln = "Juli";
        $jumlahHari = 31;
        break;
    case "Aug":
        $namaBln = "Agustus";
        $jumlahHari = 31;
        break;
    case "Sep":
        $namaBln = "September";
        $jumlahHari = 30;
        break;
    case "Oct":
        $namaBln = "Oktober";
        $jumlahHari = 31;
        break;
    case "Nov":
        $namaBln = "November";
        $jumlahHari = 30;
        break;
    case "Dec":
        $namaBln = "Desember";
        $jumlahHari = 31;
        break;
}

echo "Bulan sekarang adalah: $namaBln, dan jumlah hari dalam bulan ini adalah: $jumlahHari hari.";
?>
