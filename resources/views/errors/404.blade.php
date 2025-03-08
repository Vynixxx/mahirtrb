<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</head>
<body class="bg-gradient-to-r from-[#2E2E2E] to-gray-900 flex items-center justify-center h-screen text-white">

    <div class="text-center">
        <div class="relative">
            <h1 class="text-9xl font-extrabold tracking-widest floating">404</h1>
            <p class="text-lg font-semibold px-4 py-1 rounded absolute -top-2 left-1/2 transform -translate-x-1/2">
                Halaman Tidak Ditemukan
            </p>
        </div>

        <p class="mt-4 text-lg">Oops! Sepertinya halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>

        <a href="{{ url('/') }}"
           class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-md transition-transform transform hover:scale-110 hover:bg-gray-200">
            Kembali ke Beranda
        </a>
    </div>

</body>
</html>
