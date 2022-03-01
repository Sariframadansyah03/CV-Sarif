<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array buah</title>
</head>
<body>
<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// Cetak buah ke index ke 2
echo "Ini adalah hasil data data buah dalam array";
echo "<br/>$ar_buah[2]";
// cetak jumlah buah
echo '<br/>Jumlah buah ' .count($ar_buah);
// cetak seluruh buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
// ==================================================
// Tambahkan buah
$ar_buah[] = "Durian";
// hapus buah
unset($ar_buah[1]);
// Ubah buah index ke dua menjadi manggis
$ar_buah[2] = "manggis";
// cetak seluruh buah dengan index nya
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li> buah index - $k adalah $v </li>";
}
echo "</ul>"
?>
</body>
</html>