<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Saldo Akhir Bank</title>
</head>
<body>

    <h1>Hitung Saldo Akhir Tabungan</h1>
    <p>Masukkan Saldo Awal, Bunga (dalam persen), dan Lama Menabung (dalam bulan).</p>
    
    <form method="post" action="soal1_bank_proses.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal" size="15" value="1000000"></td>
            </tr>
            <tr>
                <td>Bunga Per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga_persen" size="5" value="0.25"></td>
            </tr>
            <tr>
                <td>Lama Bulan</td>
                <td>:</td>
                <td><input type="text" name="bulan" size="5" value="11"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Saldo Akhir">
        <input type="reset" name="reset" value="Reset">
    </form>

</body>
</html>