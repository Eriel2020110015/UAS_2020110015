<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background-image: url('{{ asset('dist/assets/img/welcome.svg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 1s ease;
            /* Transisi background */
        }

        .welcome-container {
            text-align: center;
            padding: 20px;
            background-color: transparent;
            width: 350px;
            opacity: 1;
        }

        /* Membuat tombol lebih estetik dan mewah */
        .welcome-container button {
            padding: 15px 30px;
            background-color: #ff1493;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
        }

        /* Efek hover tombol */
        .welcome-container button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: white;
            transition: all 0.4s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            z-index: 0;
        }

        .welcome-container button:hover {
            background-color: #ff69b4;
            transform: scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
        }

        .welcome-container button:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        .welcome-container button span {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="welcome-container" id="welcomeContainer">
        <button id="getStartedBtn"><span>Get Started</span></button>
    </div>

    <script>
        // Mendapatkan elemen
        const welcomeContainer = document.getElementById('welcomeContainer');
        const getStartedBtn = document.getElementById('getStartedBtn');

        // Mengatur elemen agar muncul tanpa delay
        window.onload = function() {
            document.body.style.backgroundColor = "#f3f3f3"; // Ganti background sesuai kebutuhan
            welcomeContainer.style.opacity = 1; // Tampilkan container langsung tanpa delay
        };

        // Menambahkan efek transisi ketika tombol Get Started ditekan
        getStartedBtn.addEventListener('click', function() {
            document.body.style.transition = 'background-color 1s ease'; // Transisi background
            document.body.style.backgroundColor = "#f0f0f0"; // Ganti ke background yang lebih lembut
            welcomeContainer.style.transition = 'opacity 1s ease-in-out'; // Transisi opacity
            welcomeContainer.style.opacity = 0; // Sembunyikan kontainer setelah tombol diklik
            setTimeout(() => {
                // Arahkan ke halaman login setelah transisi selesai
                window.location.href = "{{ url('/login') }}"; // Ganti dengan URL login Anda
            }, 1000); // Waktu transisi
        });
    </script>
</body>

</html>
