<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Klinik Kecantikan</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background: #fff0f5;
        }

        nav {
            background: #ff69b4;
        }

        nav a {
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Glow Beauty</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <!-- DROPDOWN LAYANAN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/layanan">📋 List Layanan</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/layanan/1">🔍 Detail Layanan</a>
                        </li>
                    </ul>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init();
</script>

<!-- FOOTER -->
<footer class="text-center mt-5 p-4" style="background:#ff69b4;color:white">
    <p>© 2026 Glow Beauty | Klinik Kecantikan</p>
    <p>📍 Jl. Cantik No.1 | 📞 08123456789</p>
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/layouts/layout.blade.php ENDPATH**/ ?>