<!DOCTYPE html>
<html>
<head>
    <title>Klinik Kecantikan</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #ffe6f0;
        }

        nav {
            background: #ff4d88;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/layanan">Layanan</a>
    <a href="/kontak">Kontak</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>