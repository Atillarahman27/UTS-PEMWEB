<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #3498db;
        }

        a {
            margin-top: -10px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #2980b9;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <h1>Tambah Produk</h1>
        <input type="text" name="name" placeholder="Input nama produk" required>
        <input type="number" name="price" placeholder="Input harga produk" required>
        <input type="file" name="image" required>
        <input type="submit" value="Simpan" name="submit">
        <a href="show.php">Lihat data produk</a>
    </form>
</body>
</html>
