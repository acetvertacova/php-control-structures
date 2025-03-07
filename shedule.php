<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LL_02</title>

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
        }

        .container {
            max-width: 800px;
            background: #222;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.05);
        }

        table {
            width: 100%;
            background: #2a2a2a;
            border-radius: 8px;
        }

        table,
        th,
        td {
            border: 1px solid #444;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            background: #333;
            color: #f0f0f0;
            font-weight: 600;
        }

        td {
            background: #2e2e2e;
            color: #dcdcdc;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>№</th>
                <th>Фамилия Имя</th>
                <th>График работы</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Styles</td>
                <?php if (in_array(date('l'), ['Monday', 'Wednesday', 'Friday'])): ?>
                    <td>8:00-12:00</td>
                <?php else: ?>
                    <td>Нерабочий день</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <?php if (in_array(date('l'), ['Tuesday', 'Thirsday', 'Saturday'])): ?>
                    <td>12:00-16:00</td>
                <?php else: ?>
                    <td>Нерабочий день</td>
                <?php endif; ?>
            </tr>
        </table>
    </div>
</body>

</html>