<!DOCTYPE html>
<html>
<head>
    <title>Hitung FPB Dua Bilangan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(-45deg, #74ebd5, #ACB6E5, #fcb045, #fd1d1d);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            backdrop-filter: blur(5px);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #34495e;
            font-weight: 600;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input[type="number"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.5);
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .result {
        margin-top: 30px;
        background: #000000; /* warna hitam */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        color: red; /* warna tulisan hasil */
        font-size: 20px;
        font-weight: bold;

        /* Efek animasi */
        animation: fadeSlide 0.8s ease-out;
        opacity: 0;
        animation-fill-mode: forwards;
        }

        @keyframes fadeSlide {
        0% {
        opacity: 0;
        transform: translateY(-20px) scale(0.95);
        }
        100% {
        opacity: 1;
        transform: translateY(0) scale(1);
        }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hitung FPB Dua Bilangan</h2>

    <form method="post" action="">
        <label for="bil1">Bilangan pertama:</label>
        <input type="number" name="bil1" required>

        <label for="bil2">Bilangan kedua:</label>
        <input type="number" name="bil2" required>

        <input type="submit" name="submit" value="Hitung FPB">
    </form>

    <?php
    function hitungFPB($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    if (isset($_POST['submit'])) {
        $bil1 = intval($_POST['bil1']);
        $bil2 = intval($_POST['bil2']);

        $fpb = hitungFPB($bil1, $bil2);
        echo "<div class='result'>FPB dari $bil1 dan $bil2 adalah: $fpb</div>";
    }
    ?>
</div>

</body>
</html>
