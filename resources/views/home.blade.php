<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #000000, #1a1a1a, #2e2b21, #FFD700);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            color: #FFD700;
        }

        /* @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        } */
        .menu-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            text-align: center;
            width: 350px;
            border: 1px solid #FFD700;
        }

        .menu-container h2 {
            font-weight: bold;
            margin-bottom: 30px;
            color: #FFD700;
        }

        .btn-menu {
            padding: 15px;
            font-size: 18px;
            border-radius: 12px;
            width: 100%;
            margin-bottom: 15px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: 2px solid #FFD700;
        }

        .btn-produk {
            background-color: #000000;
            color: #FFD700;
        }
        .btn-produk:hover {
            background-color: #FFD700;
            color: #000;
        }

        .btn-kategori {
            background-color: #000000;
            color: #FFD700;
        }
        .btn-kategori:hover {
            background-color: #FFD700;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h2>Menu Utama</h2>
        <a href="{{ route('produk.index') }}" class="btn btn-menu btn-produk">Produk</a>
        <a href="{{ route('kategori-produk.index') }}" class="btn btn-menu btn-kategori">Kategori Produk</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
