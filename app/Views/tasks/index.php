<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catatan Kegiatan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2 {
            text-align: center;
            color: #444;
            margin-top: 20px;
        }
        form {
            max-width: 500px; /* Membatasi lebar maksimal form */
            margin: 20px auto; /* Membuat form berada di tengah secara horizontal */
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form input, form textarea, form button {
            display: block;
            width: 95%; /* Mengatur lebar elemen agar penuh di dalam form */
            margin-bottom: 15px;
            margin-right: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form input:focus, form textarea:focus, form button:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.3);
        }
        form textarea {
            resize: vertical;
            height: 100px;
        }
        form button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
            width: 99%;
        }
        form button:hover {
            background-color: #0056b3;
        }
        button {
        display: block;
        max-width: 200px;
        margin: 20px auto;
        text-align: center;
        background-color: #28a745;
        color: white;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .button:hover {
        background-color: #218838;
    }
        
        ul {
            max-width: 700px; /* Membatasi lebar maksimal daftar kegiatan */
            margin: 20px auto; /* Menempatkan daftar di tengah halaman */
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
        ul li a {
            color: #007BFF;
            text-decoration: none;
            margin-right: 10px;
        }
        ul li a:hover {
            text-decoration: underline;
        }
        button[href] {
            display: block;
            max-width: 200px;
            margin: 20px auto;
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[href]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Catatan Kegiatan</h1>
    <form action="/add" method="post">
        <?= csrf_field() ?>
        <input type="text" name="title" placeholder="Judul Kegiatan" required>
        <textarea name="description" placeholder="Deskripsi Kegiatan"></textarea>
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <button type="submit">Tambah Kegiatan</button>
    </form>

    <h2>Daftar Kegiatan</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?= esc($task['title']) ?></strong> - <?= esc($task['date']) ?> <?= esc($task['time']) ?>
                <p><?= esc($task['description']) ?></p>
                <a href="/complete/<?= $task['id'] ?>">Selesai</a> |
                <a href="/edit/<?= $task['id'] ?>">Edit</a> |
                <a href="/delete/<?= $task['id'] ?>" onclick="return confirm('Are you sure you want to delete this task?');">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <button type="button" onclick="location.href='/completed'">Lihat Kegiatan Selesai</button>
    </body>
</html>
