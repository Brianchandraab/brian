<?php

include '../functions/kumpulan_fungsi.php';

$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT kejadian.*, masyarakat_pelapor.nama_masyarakat_pelapor as nama_pelapor FROM `kejadian` INNER JOIN masyarakat_pelapor ON kejadian.id_masyarakat_pelapor = masyarakat_pelapor.id_masyarakat_pelapor");

$data = array();
while ($result = mysqli_fetch_object($query)) {
   $kejadian =  array_push($data, $result);
}

echo json_encode($data);
