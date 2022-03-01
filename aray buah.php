<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array Siswa</title>
</head>
<body>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<!-- buka table -->
<table border="1" width="100%">
<thead>
    <tr>
        <th>
            No
        </th>
        <th>
            NIM
        </th>
        <th>
            UTS
        </th>
        <th>
            UAS
        </th>
        <th>
            TUGAS
        </th>
        <th>
            Nilai Akhir
        </th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai) {
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nilai['nim'].'</td>';
echo '<td>'.$nilai['uts'].'</td>';
echo '<td>'.$nilai['uas'].'</td>';
echo '<td>'.$nilai['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas']+$nilai['tugas'])/3;
// fungsi number format untuk membuat format penulisan bilangan angka, seperti ribuan ratusan dan lainnya
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
<!-- tutup table -->
</tbody>
</table>
</body>
</html>