<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Tinggi Badan</title>
</head>
<body>

<?php
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
        echo "Tinggi Badan Anda: " . $tinggi . " cm";
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
