<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kegiatan Selesai</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #444;
            margin-top: 20px;
        }
        ul {
            max-width: 700px;
            margin: 20px auto;
            padding: 0;
            list-style-type: none;
        }
        ul li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        ul li strong {
            font-size: 18px;
        }
        ul li p {
            margin: 5px 0 10px;
            color: #555;
        }
        ul li form {
            display: inline-block;
            margin-right: 10px;
        }
        ul li button {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        ul li button:hover {
            background-color: #c82333;
        }
        a {
            display: block;
            text-align: center;
            margin: 20px auto;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Kegiatan Selesai</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?= esc($task['title']) ?></strong> - <?= esc($task['date']) ?> <?= esc($task['time']) ?>
                <p><?= esc($task['description']) ?></p>
                <form action="/delete/<?= $task['id'] ?>" method="delete" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?');">
                    <?= csrf_field() ?>
                    <button type="submit">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/">Kembali ke Catatan Kegiatan</a>
</body>
</html>
