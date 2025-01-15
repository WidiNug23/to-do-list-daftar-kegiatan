<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kegiatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #4CAF50;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="text"],
        textarea,
        input[type="date"],
        input[type="time"] {
            width: 92.8%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <h1>Edit Kegiatan</h1>
        <form action="/update/<?= $task['id'] ?>" method="post">
            <input type="text" name="title" value="<?= esc($task['title']) ?>" required>
            <textarea name="description"><?= esc($task['description']) ?></textarea>
            <input type="date" name="date" value="<?= esc($task['date']) ?>" required>
            <input type="time" name="time" value="<?= esc($task['time']) ?>" required>
            <button type="submit">Edit</button>
        </form>
        <a href="/">Kembali ke Catatan Kegiatan</a>
    </div>
</body>
</html>
