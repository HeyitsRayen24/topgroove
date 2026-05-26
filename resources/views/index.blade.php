<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css');
    @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>

<body class="bg-dark font-outfit text-white overflow-x-hidden">

    <!-- BACKGROUND -->
    <div class="fixed inset-0 -z-10">

        <!-- Glow -->
        <div
            class="absolute top-[-37.5px] right-[-7.5px] w-[31.25px] h-[31.25px] bg-purple-600/20 rounded-full blur-[120px]">
        </div>

        <div
            class="absolute bottom-[-4.5px] left-[-7.5px] w-[112.5px] h-[112.5px] bg-blue-500/10 rounded-full blur-[120px]">
        </div>

        <!-- Grid -->
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.03)_1px,transparent_1px)] bg-size-[60px_60px]">
        </div>

    </div>

    <!-- MAIN CONTAINER -->
    <section class="min-h-screen flex items-center justify-center p-6">

        <div
            class="relative w-full max-w-6xl min-h-[11.25px] border border-white/10 rounded-[40px] bg-white/5 backdrop-blur-2xl overflow-hidden shadow-glow">

            <!-- CONTACT -->
            <div class="absolute top-10 left-10">

                <button
                    class="group w-40 h-32 rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl flex flex-col items-center justify-center transition duration-500 hover:border-primary hover:shadow-neon hover:-translate-y-1">

                    <i class="ri-customer-service-2-line text-4xl text-primary mb-3"></i>

                    <span class="tracking-wide font-semibold text-lg group-hover:text-secondary transition">
                        CONTACT
                    </span>

                </button>

            </div>

            <!-- REGISTRATION -->
            <div class="absolute top-10 right-10">

                <button
                    class="group w-44 h-32 rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl flex flex-col items-center justify-center transition duration-500 hover:border-primary hover:shadow-neon hover:-translate-y-1">

                    <i class="ri-user-add-line text-4xl text-primary mb-3"></i>

                    <span class="tracking-wide font-semibold text-lg group-hover:text-secondary transition">
                        REGISTRATION
                    </span>

                </button>

            </div>

            <!-- INSTAGRAM -->
            <div class="absolute bottom-10 left-10">

                <button
                    class="group w-40 h-32 rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl flex flex-col items-center justify-center transition duration-500 hover:border-primary hover:shadow-neon hover:-translate-y-1">

                    <i class="ri-instagram-line text-4xl text-primary mb-3"></i>

                    <span class="tracking-wide font-semibold text-lg group-hover:text-secondary transition">
                        INSTAGRAM
                    </span>

                </button>

            </div>

            <!-- TIKTOK -->
            <div class="absolute bottom-10 right-10">

                <button
                    class="group w-40 h-32 rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl flex flex-col items-center justify-center transition duration-500 hover:border-primary hover:shadow-neon hover:-translate-y-1">

                    <i class="ri-tiktok-fill text-4xl text-primary mb-3"></i>

                    <span class="tracking-wide font-semibold text-lg group-hover:text-secondary transition">
                        TIK TOK
                    </span>

                </button>

            </div>

            <!-- CENTER CONTENT -->
            <div class="absolute inset-0 flex flex-col items-center justify-center px-6">

                <!-- LOGO -->
                <div class="mb-10">

                    <div
                        class="w-40 h-40 rounded-[35px] border border-primary/40 bg-linear-to-br from-primary/30 to-purple-500/10 backdrop-blur-2xl flex flex-col items-center justify-center shadow-neon animate-pulse">

                        <i class="ri-disc-line text-6xl text-white mb-3"></i>

                        <h1 class="text-2xl font-bold tracking-widest">
                            LOGO
                        </h1>

                    </div>

                </div>

                <!-- LOGIN CARD -->
                <div
                    class="w-full max-w-xl rounded-[35px] border border-white/10 bg-white/5 backdrop-blur-2xl p-10 shadow-glow">

                    <!-- TITLE -->
                    <div class="text-center mb-8">

                        <h2
                            class="text-4xl font-extrabold mb-3 bg-linear-to-r from-white to-secondary bg-clip-text text-transparent">
                            LOGIN FORM
                        </h2>

                        <p class="text-gray-400">
                            Welcome back to the future dance movement
                        </p>

                    </div>

                    <!-- FORM -->
                    <form class="space-y-6">

                        <!-- EMAIL -->
                        <div class="relative">

                            <i class="ri-mail-line absolute left-5 top-1/2 -translate-y-1/2 text-primary text-xl"></i>

                            <input type="email" placeholder="Email Address"
                                class="w-full h-16 rounded-2xl bg-black/30 border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/40 outline-none pl-14 pr-5 text-white placeholder-gray-500 transition" />

                        </div>

                        <!-- PASSWORD -->
                        <div class="relative">

                            <i class="ri-lock-line absolute left-5 top-1/2 -translate-y-1/2 text-primary text-xl"></i>

                            <input type="password" placeholder="Password"
                                class="w-full h-16 rounded-2xl bg-black/30 border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/40 outline-none pl-14 pr-5 text-white placeholder-gray-500 transition" />

                        </div>

                        <!-- OPTIONS -->
                        <div class="flex items-center justify-between text-sm">

                            <label class="flex items-center gap-2 text-gray-400 cursor-pointer">

                                <input type="checkbox" class="accent-primary">

                                Remember me

                            </label>

                            <a href="#" class="text-primary hover:text-secondary transition">
                                Forgot Password?
                            </a>

                        </div>

                        <!-- BUTTON -->
                        <button
                            class="w-full h-16 rounded-2xl bg-linear-to-r from-primary to-secondary font-bold tracking-wide text-lg shadow-neon hover:scale-[1.02] transition duration-300">
                            LOGIN NOW
                        </button>

                    </form>

                    <!-- SOCIAL -->
                    <div class="mt-8">

                        <div class="flex items-center gap-4 mb-6">

                            <div class="flex-1 h-px bg-white/10"></div>

                            <span class="text-gray-500 text-sm">
                                OR CONTINUE WITH
                            </span>

                            <div class="flex-1 h-px bg-white/10"></div>

                        </div>

                        <div class="grid grid-cols-3 gap-4">

                            <button
                                class="h-14 rounded-2xl border border-white/10 bg-white/5 hover:border-primary hover:shadow-neon transition flex items-center justify-center text-2xl">
                                <i class="ri-google-fill"></i>
                            </button>

                            <button
                                class="h-14 rounded-2xl border border-white/10 bg-white/5 hover:border-primary hover:shadow-neon transition flex items-center justify-center text-2xl">
                                <i class="ri-discord-fill"></i>
                            </button>

                            <button
                                class="h-14 rounded-2xl border border-white/10 bg-white/5 hover:border-primary hover:shadow-neon transition flex items-center justify-center text-2xl">
                                <i class="ri-instagram-line"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    @include('sweetalert2::index')
</body>

</html>