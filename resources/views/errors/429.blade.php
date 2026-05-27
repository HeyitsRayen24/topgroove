<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terlalu Banyak Percobaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex items-center justify-center min-h-screen">

    <div class="text-center">

        <h1 class="text-6xl font-bold text-red-500 mb-4">
            429
        </h1>

        <h2 class="text-2xl font-semibold mb-3">
            Too Many Requests
        </h2>

        <p class="text-gray-400 mb-6">
            Anda terlalu sering mencoba login/register.
        </p>

        <div id="countdown" class="text-xl font-bold text-cyan-400 mb-6">
            Tunggu 60 detik...
        </div>

        <a href="{{ route('login') }}"
           class="px-5 py-3 bg-cyan-500 rounded-lg">
            Kembali
        </a>

    </div>

    <script>

        let time = 60;

        const countdown = document.getElementById('countdown');

        const timer = setInterval(() => {

            time--;

            countdown.innerText = `Tunggu ${time} detik...`;

            if(time <= 0)
            {
                clearInterval(timer);

                window.location.href = "{{ route('login') }}";
            }

        }, 1000);

    </script>

</body>
</html>