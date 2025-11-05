<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>

    <h1>Hasil Pecahan Uang</h1>
    
    <?php
    // Ambil input dari form
    $jumlahUang = (int)$_POST['jumlah_uang'];

    // Variabel untuk menyimpan hasil pecahan
    $sa = 0; // Rp 100.000
    $sb = 0; // Rp 50.000
    $sc = 0; // Rp 20.000
    $sd = 0; // Rp 5.000
    $se = 0; // Rp 100
    $sf = 0; // Rp 50

    // Variabel sisa
    $sisa = $jumlahUang;

    // --- Perhitungan Pecahan ---

    // 1. Pecahan Rp 100.000
    $sa = floor($sisa / 100000);
    $sisa = $sisa % 100000;

    // 2. Pecahan Rp 50.000
    $sb = floor($sisa / 50000);
    $sisa = $sisa % 50000;

    // 3. Pecahan Rp 20.000
    $sc = floor($sisa / 20000);
    $sisa = $sisa % 20000;

    // 4. Pecahan Rp 5.000
    $sd = floor($sisa / 5000);
    $sisa = $sisa % 5000;

    // 5. Pecahan Rp 100
    $se = floor($sisa / 100);
    $sisa = $sisa % 100;

    // 6. Pecahan Rp 50
    $sf = floor($sisa / 50);
    // $sisa sekarang akan menjadi 0 atau 25 (jika ada sisa di luar pecahan Rp 50)


    echo "<p>Jumlah Uang yang Diambil: Rp. ".number_format($jumlahUang, 0, ',', '.')."</p>";
    echo "<h2>Rincian Pecahan:</h2>";
    echo "Jumlah Rp 100.000 : ".$sa." lembar<br />";
    echo "Jumlah Rp 50.000 : ".$sb." lembar<br />";
    echo "Jumlah Rp 20.000 : ".$sc." lembar<br />";
    echo "Jumlah Rp 5.000 : ".$sd." lembar<br />";
    echo "Jumlah Rp 100 : ".$se." lembar<br />";
    echo "Jumlah Rp 50 : ".$sf." lembar<br />";

    if ($sisa > 0) {
        echo "<p style='color: red;'>* Catatan: Terdapat sisa uang sebesar Rp. $sisa yang tidak dapat dipecah dengan pecahan yang tersedia.</p>";
    }
    ?>
    
    <br>
    <a href="soal2_pecahan_input.php">Kembali ke Formulir</a>

</body>
</html>