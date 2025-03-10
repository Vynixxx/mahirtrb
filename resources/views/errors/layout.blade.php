<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <title>@yield('title')</title>
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
    </style>
</head>
<body class="bg-gradient-to-r from-[#2E2E2E] to-gray-900 flex items-center justify-center h-screen text-white">

    <div class="text-center fade-in">
        <div class="relative">
            <h1 class="text-9xl font-extrabold tracking-widest floating">@yield('code')</h1>
            <p class="text-lg font-semibold px-4 py-1 rounded absolute -top-2 left-1/2 transform -translate-x-1/2">
                @yield('message')
            </p>
        </div>

        <p class="mt-4 text-lg">@yield('description')</p>

        <a href="{{ url('/') }}"
           class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-md transition-transform transform hover:scale-110 hover:bg-gray-200">
            Kembali ke Beranda
        </a>
        <script>
            let countdown = 5;
            const countdownEl = document.getElementById('countdown');
            
            setInterval(() => {
                if (countdown > 0) {
                    countdown--;
                    countdownEl.textContent = countdown;
                } else {
                    window.location.href = "{{ url('/') }}";
                }
            }, 1000);
        </script>

        <p class="mt-4 text-gray-400">Anda akan diarahkan ke beranda dalam <span id="countdown">5</span> detik...</p>
    </div>

</body>
</html>
