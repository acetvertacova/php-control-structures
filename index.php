<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #181818;
            color: #dcdcdc;
            margin: 0;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            background: #222;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.05);
        }

        h1 {
            color: #ffffff;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        b {
            color: #bbbbbb;
            font-size: 18px;
            font-weight: 500;
        }

        .result {
            font-size: 16px;
            background: #2e2e2e;
            padding: 12px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 0 2px 6px rgba(255, 255, 255, 0.05);
            transition: transform 0.2s;
            color: #f0f0f0;
        }

        .result:hover {
            transform: translateY(-2px);
            background: #383838;
        }

        br {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Using for loop: </h2>
        <?php
        $a = 0;
        $b = 0;

        for ($i = 0; $i <= 5; $i++):
            $a += 10;
            $b += 5;
        ?>
            <div class="result"><?= $i + 1 ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
        <?php endfor; ?>
        <b>End of the loop:</b> a = <?= $a ?>, b = <?= $b ?><br><br>

        <h2>Using while loop: </h2>
        <?php
        $a = 0;
        $b = 0;
        $i = 0;

        while ($i <= 5):
            $a += 10;
            $b += 5;
            $i++;
        ?>
            <div class="result"><?= $i ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
        <?php endwhile; ?>
        <b>End of the loop:</b> a = <?= $a ?>, b = <?= $b ?><br><br>

        <h2>Using do-while loop: </h2>
        <?php
        $a = 0;
        $b = 0;
        $i = 0;

        do {
            $a += 10;
            $b += 5;
        ?>
            <div class="result"><?= $i + 1 ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
        <?php
            $i++;
        } while ($i <= 5);
        ?>
        <b>End of the loop:</b> a = <?= $a ?>, b = <?= $b ?><br><br>

    </div>

</body>

</html>