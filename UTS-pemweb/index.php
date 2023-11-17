<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .login-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            transition: box-shadow 0.3s ease-in-out;
        }
        h1{
            text-align: center;
        }
        .login-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
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
    <div class="container">
        <div class="login-card">
            <h1>Login</h1>
            <form action="./backend/login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Masukkan email anda" required>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Masukkan password anda" required>

                <input type="submit" value="Login" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
