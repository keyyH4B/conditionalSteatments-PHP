<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diskon Toko Pakaian</title>
    <style>
        body {
            background: #f4f8ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,64,0.08);
            padding: 32px;
        }
        h2 {
            color: #1565c0;
            text-align: center;
            margin-bottom: 24px;
        }
        label {
            font-weight: bold;
            color: #1565c0;
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            border-radius: 4px;
            border: 1px solid #90caf9;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background: #2196F3;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }
        .result {
            margin-top: 24px;
            background: #e3f0ff;
            border-left: 4px solid #2196F3;
            padding: 16px;
            border-radius: 6px;
        }
        p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Program Diskon Toko Pakaian</h2>
        <form method="post">
            <label for="belanja">Total Belanja (Rp):</label>
            <input type="number" id="belanja" name="belanja" required>
            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $belanja = $_POST['belanja'];

            echo '<div class="result">';
            if ($belanja > 300000) {
                $diskon = 0.20 * $belanja;
                $total_bayar = $belanja - $diskon;
                echo "<p>Total belanja: Rp " . number_format($belanja,0,",",".") . "</p>";
                echo "<p>Diskon 20%: Rp " . number_format($diskon,0,",",".") . "</p>";
                echo "<p><b>Total Bayar: Rp " . number_format($total_bayar,0,",",".") . "</b></p>";
                echo "<p>🎉 Anda juga mendapat voucher belanja Rp 50.000 untuk transaksi berikutnya.</p>";
            } else {
                $diskon = 0.15 * $belanja;
                $total_bayar = $belanja - $diskon;
                echo "<p>Total belanja: Rp " . number_format($belanja,0,",",".") . "</p>";
                echo "<p>Diskon 15%: Rp " . number_format($diskon,0,",",".") . "</p>";
                echo "<p><b>Total Bayar: Rp " . number_format($total_bayar,0,",",".") . "</b></p>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
