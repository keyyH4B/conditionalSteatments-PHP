a<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
    <style>
        body {
            background: #f4f8ff;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #222;
        }
        h1 {
            color: #2366b8;
            text-align: center;
            margin-top: 32px;
        }
        form {
            max-width: 420px;
            margin: 32px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(35,102,184,0.08);
            padding: 28px 24px;
        }
        fieldset {
            border: 1px solid #2366b8;
            border-radius: 8px;
            padding: 18px 14px;
            background: #fafdff;
        }
        legend {
            font-weight: bold;
            color: #2366b8;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        label {
            color: #2366b8;
            font-weight: 500;
        }
        input[type="number"], select {
            width: 100%;
            padding: 7px;
            margin-top: 4px;
            margin-bottom: 12px;
            border: 1px solid #bcd4f6;
            border-radius: 4px;
            font-size: 1em;
            background: #f4f8ff;
        }
        input[type="radio"] {
            accent-color: #2366b8;
            margin-right: 4px;
        }
        ul {
            background: #eaf2fb;
            border-radius: 6px;
            padding: 10px 18px;
            margin: 8px 0 14px 0;
            color: #2366b8;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Sistem Penggajian</h1>
    <p>Ini adalah halaman untuk menghitung gaji karyawan.</p>
    <p>Silakan masukkan data berikut untuk menghitung gaji Anda:</p>

    <form method="post">
        <fieldset>
            <p>Keterangan Gaji</p>
            <ul>
                <li>Golongan 1: 2.300.000</li>
                <li>Golongan 2: 3.200.000</li>
                <li>Golongan 3: 4.100.000</li>
                <li>Golongan 4: 5.100.000</li>
            </ul>
            <p>Tunjangan Istri 15% dari gaji pokok</p>
            <p>Tunjangan Anak 5% dari gaji pokok (Maksimal 3 anak)</p>
            <p>100k dikalikan jumlah hari lembur</p>

            <legend>Hitung Gaji</legend>
            <p>
                <label for="golongan">Golongan:</label>
                <select name="golongan" id="golongan" required>
                    <option value="1">Golongan 1</option>
                    <option value="2">Golongan 2</option>
                    <option value="3">Golongan 3</option>
                    <option value="4">Golongan 4</option>
                </select>
            </p>
            <p>
                <label for="status">Status:</label>
                <input type="radio" name="status" id="menikah" value="menikah" required>
                <label for="menikah">Menikah</label>
                <input type="radio" name="status" id="belum_menikah" value="belum_menikah" required>
                <label for="belum_menikah">Belum Menikah</label>
            </p>
            <p>
                <label for="jumlah_anak">Jumlah Anak:</label>
                <input type="number" name="jumlah_anak" id="jumlah_anak" min="0" max="3">
            </p>
            <p>
                <label for="harilembur">Hari Lembur:</label>
                <input type="number" name="harilembur" id="harilembur" min="0" max="30">
            </p>
            <p>
                <input type="submit" value="Hitung Gaji">
                <input type="reset" value="Reset">
            </p>
        </fieldset>
    </form>

    <?php
    $gaji_pokok = 0;
    $tunjangan_istri = 0;
    $tunjangan_anak = 0;
    $uang_lembur = 0;
    $gaji_bersih = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $golongan = $_POST['golongan'] ?? 0;
        $status = $_POST['status'] ?? '';
        $jumlah_anak = $_POST['jumlah_anak'] ?? 0;
        $harilembur = $_POST['harilembur'] ?? 0;

        if ($golongan == 1) {
            $gaji_pokok = 2300000;
        } elseif ($golongan == 2) {
            $gaji_pokok = 3200000;
        } elseif ($golongan == 3) {
            $gaji_pokok = 4100000;
        } elseif ($golongan == 4) {
            $gaji_pokok = 5100000;
        }

        if ($status == "menikah") {
            $tunjangan_istri = 0.15 * $gaji_pokok;

            if ($jumlah_anak == 1) {
                $tunjangan_anak = 0.05 * $gaji_pokok;
            } elseif ($jumlah_anak == 2) {
                $tunjangan_anak = 0.10 * $gaji_pokok;
            } elseif ($jumlah_anak >= 3) {
                $tunjangan_anak = 0.15 * $gaji_pokok;
            }
        }

        $uang_lembur = 100000 * $harilembur;

        $gaji_bersih = $gaji_pokok + $tunjangan_istri + $tunjangan_anak + $uang_lembur;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") :
    ?>
    <fieldset style="max-width: 420px; margin: 20px auto;">
        <legend>Hasil Perhitungan Gaji</legend>
        <h2>Hasil Perhitungan Gaji</h2>
        <p>Gaji Pokok: Rp <?php echo number_format($gaji_pokok, 0, ',', '.'); ?></p>
        <p>Tunjangan Istri: Rp <?php echo number_format($tunjangan_istri, 0, ',', '.'); ?></p>
        <p>Tunjangan Anak: Rp <?php echo number_format($tunjangan_anak, 0, ',', '.'); ?></p>
        <p>Uang Lembur: Rp <?php echo number_format($uang_lembur, 0, ',', '.'); ?></p>
        <hr>
        <p><strong>Total Gaji Bersih: Rp <?php echo number_format($gaji_bersih, 0, ',', '.'); ?></strong></p>
    </fieldset>
    <?php endif; ?>
</body>
</html>
