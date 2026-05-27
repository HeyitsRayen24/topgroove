<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Remix Icon -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
        rel="stylesheet">

</head>

<body class="bg-black text-white overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 overflow-hidden">

        <!-- Glow Top -->
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-cyan-500 opacity-20 blur-3xl rounded-full"></div>

        <!-- Glow Bottom -->
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-purple-500 opacity-20 blur-3xl rounded-full"></div>

    </div>

    <!-- GRID -->
    <div class="absolute inset-0 opacity-10"
        style="
            background-image:
            linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 40px 40px;
        ">
    </div>

    <!-- CONTENT -->
    <section class="relative z-10 min-h-screen flex items-center justify-center px-6">

        <div class="text-center max-w-2xl">

            <!-- ICON -->
            <div class="mb-6">

                <i class="ri-error-warning-line text-8xl text-cyan-400"></i>

            </div>

            <!-- CODE -->
            <h1 class="text-7xl md:text-8xl font-black mb-4 bg-linear-to-r from-cyan-400 to-purple-500 text-transparent bg-clip-text">
                404
            </h1>

            <!-- TITLE -->
            <h2 class="text-2xl md:text-3xl font-bold mb-4">
                Page Not Found
            </h2>

            <!-- DESCRIPTION -->
            <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                Halaman yang kamu cari tidak ditemukan atau mungkin sudah dipindahkan.
            </p>

            <!-- BUTTONS -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">

                <!-- HOME -->
                <a href="{{ route('login') }}"
                    class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 transition-all duration-300 font-semibold shadow-lg shadow-cyan-500/30">

                    <i class="ri-home-4-line me-2"></i>
                    Kembali ke Login

                </a>

                <!-- BACK -->
                <button onclick="history.back()"
                    class="px-6 py-3 rounded-xl border border-white/20 hover:border-cyan-400 hover:text-cyan-400 transition-all duration-300 font-semibold">

                    <i class="ri-arrow-left-line me-2"></i>
                    Kembali

                </button>

            </div>

        </div>

    </section>

</body>
</html>