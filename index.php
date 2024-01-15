<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Tinggi Badan</title>
</head>
<body>

<?php
function classifyHeight($height) {
    if ($height < 150) {
        return "Short";
    } elseif ($height >= 150 && $height <= 180) {
        return "Average";
    } else {
        return "Tall";
    }
}

// Inisialisasi variabel tinggi dengan nilai awal 0
$tinggi = 0;

// Pengecekan apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai tinggi dari formulir
    $tinggi = $_POST["tinggi"];
    
    // Pengecekan apakah tinggi yang dimasukkan adalah angka
    if (!is_numeric($tinggi)) {
        echo "Masukkan tinggi badan dalam bentuk angka.";
    } else {
        // Menampilkan hasil penghitungan tinggi badan
        echo "Tinggi Badan Anda: " . $tinggi . " cm<br>";
        // Memanggil fungsi untuk mengklasifikasikan tinggi badan
        echo "Klasifikasi: " . classifyHeight($tinggi);
    }
}
?>

<!-- Formulir untuk memasukkan tinggi badan -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="tinggi">Tinggi Badan (cm):</label>
    <input type="text" id="tinggi" name="tinggi" value="<?php echo $tinggi; ?>">
    <input type="submit" value="Hitung">
</form>

</body>
</html>
