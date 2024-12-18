<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - RaporMu</title>
    <style>
        body {
            background-color: #ff69b4;
            /* Warna pink */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .register-container h1 {
            font-size: 36px;
            color: #ff1493;
            /* Warna pink gelap */
            margin-bottom: 20px;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #ff1493;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            box-sizing: border-box;
        }

        .register-container button:hover {
            background-color: #ff69b4;
        }

        .register-container a {
            text-decoration: none;
            color: #ff1493;
            margin-top: 15px;
            display: block;
        }

        .back-btn {
            margin-top: 20px;
            background-color: #ddd;
            color: #333;
            padding: 12px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            box-sizing: border-box;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <a href="{{ route('login') }}">Sudah punya akun? Login</a>
        <a href="{{ url('/') }}" class="back-btn">Kembali ke Halaman Awal</a>
    </div>
</body>

</html>
