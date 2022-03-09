<?php
$proses = $_POST ['proses'];
$nama_siswa = $_POST ['nama'];
$matkul = $_POST ['matkul'];
$nilai_UTS = $_POST ['uts'];
$nilai_UAS = $_POST ['uas'];
$nilai_tugas = $_POST ['tugas'];

echo 'proses : ' .$proses;
echo '<br/>Nama : ' .$nama_siswa;
echo '<br/>Mata Kuliah : ' .$matkul;
echo '<br/>Nilai UTS : ' .$nilai_UTS;
echo '<br/>Nilai UAS ' .$nilai_UAS;
echo '<br/>Nilai Tugas : ' .$nilai_tugas;
?>
