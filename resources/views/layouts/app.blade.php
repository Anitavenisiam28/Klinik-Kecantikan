<!DOCTYPE html>
<html>
<head>
    <title>Klinik Kecantikan</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
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

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            color: #ff4d88;
        }

        a.button {
            display: inline-block;
            margin-top: 10px;
            color: #ff4d88;
            font-weight: bold;
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