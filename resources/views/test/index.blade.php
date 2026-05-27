<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOPGROOVE — Dance Community</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <style>
        :root {

            /* MAIN COLORS */
            --primary: #AD9EFE;
            --primary-light: #C6BCFF;

            /* SECONDARY COLORS */
            --secondary: #846FFA;
            --dark: #012133;

            /* SURFACE */
            --bg: #F8F7FF;
            --surface: #EEE9FF;
            --surface-strong: #DDD4FF;

            /* TEXT */
            --text: #08131D;
            --muted: #5C6670;
            --white: #FFFFFF;

            /* ACCENTS */
            --accent-cyan: #7EE7FF;
            --accent-pink: #FF8FD8;

            /* RADIUS */
            --radius-sm: 12px;
            --radius-md: 18px;
            --radius-lg: 28px;

            /* SPACING */
            --section-gap: 100px;

        }

        /* =========================
   GLOBAL
========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;

            background:
                radial-gradient(circle at top left, rgba(173, 158, 254, 0.18), transparent 30%),
                radial-gradient(circle at bottom right, rgba(198, 188, 255, 0.20), transparent 30%),
                var(--bg);

            color: var(--text);
            overflow-x: hidden;
            min-height: 100vh;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        section {
            padding: var(--section-gap) 0;
            position: relative;
        }

        .container {
            position: relative;
            z-index: 2;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Outfit', sans-serif;
            letter-spacing: -2px;
            font-weight: 600;
            margin-bottom: 0;
            color: var(--text);
        }

        p {
            margin-bottom: 0;
            color: var(--muted);
            line-height: 1.8;
        }

        /* =========================
   NAVBAR
========================= */

        .navbar {
            padding: 20px 0;

            background: rgba(255, 255, 255, 0.55);

            backdrop-filter: blur(16px);

            -webkit-backdrop-filter: blur(16px);

            border-bottom: 1px solid rgba(255, 255, 255, 0.2);

            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-brand {
            font-family: 'Outfit', sans-serif;
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: -1px;
            color: var(--dark);
        }

        .navbar-brand:hover {
            color: var(--secondary);
        }

        .nav-link {
            color: var(--text);
            font-weight: 500;
            margin-left: 18px;
            transition: 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--secondary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0%;
            height: 2px;
            background: var(--secondary);
            transition: 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* =========================
   BUTTONS
========================= */

        .btn {
            border: none;
            outline: none;
            box-shadow: none !important;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg,
                    var(--secondary),
                    var(--primary));

            color: var(--white);

            border-radius: 14px;

            padding: 14px 26px;

            font-weight: 600;

            transition: 0.3s ease;
        }

        .btn-primary-custom:hover {
            background: var(--dark);
            transform: translateY(-2px);
            color: white;
        }

        .btn-outline-custom {
            background: rgba(255, 255, 255, 0.7);

            border: 1px solid rgba(132, 111, 250, 0.15);

            color: var(--dark);

            border-radius: 14px;

            padding: 14px 24px;

            font-weight: 600;

            transition: 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: white;
            border-color: var(--secondary);
            color: var(--secondary);
            transform: translateY(-2px);
        }

        /* =========================
   HERO
========================= */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';

            position: absolute;

            width: 700px;
            height: 700px;

            background: rgba(173, 158, 254, 0.18);

            border-radius: 50%;

            top: -300px;
            right: -250px;

            filter: blur(80px);
        }

        .hero-title {
            font-size: 5rem;
            line-height: 0.92;
            max-width: 650px;

            background: linear-gradient(135deg,
                    var(--dark),
                    var(--secondary));

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            font-size: 1.1rem;
            max-width: 520px;
            margin: 28px 0;
        }

        .hero-visual {
            position: relative;
            height: 650px;
        }

        /* =========================
   BLOBS
========================= */

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(10px);
            animation: float 6s ease-in-out infinite;
        }

        .blob-1 {
            width: 280px;
            height: 280px;

            background: var(--secondary);

            top: 40px;
            right: 50px;

            opacity: 0.9;
        }

        .blob-2 {
            width: 180px;
            height: 180px;

            background: var(--primary);

            bottom: 100px;
            left: 20px;

            opacity: 0.75;
        }

        .blob-3 {
            width: 150px;
            height: 150px;

            background: var(--dark);

            bottom: 20px;
            right: 100px;

            opacity: 0.75;
        }

        /* =========================
   HERO CARD
========================= */

        .hero-card {
            position: absolute;

            width: 330px;

            background: rgba(255, 255, 255, 0.7);

            backdrop-filter: blur(20px);

            border: 1px solid rgba(255, 255, 255, 0.4);

            border-radius: 30px;

            padding: 24px;

            box-shadow:
                0 10px 40px rgba(0, 0, 0, 0.05);
        }

        .card-top {
            top: 80px;
            left: 40px;
        }

        .card-bottom {
            bottom: 50px;
            right: 40px;
        }

        .hero-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 18px;
        }

        .hero-card h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .hero-card p {
            font-size: 0.95rem;
        }

        /* =========================
   SECTION
========================= */

        .section-title {
            font-size: 3.5rem;
            margin-bottom: 18px;
        }

        .section-desc {
            max-width: 700px;
            margin: auto;
        }

        /* =========================
   FEATURE CARD
========================= */

        .feature-card {
            padding: 38px;

            border-radius: 32px;

            height: 100%;

            position: relative;

            overflow: hidden;
        }

        .feature-card::before {
            content: '';

            position: absolute;

            width: 180px;
            height: 180px;

            background: rgba(255, 255, 255, 0.15);

            border-radius: 50%;

            top: -70px;
            right: -70px;
        }

        .feature-card h3 {
            font-size: 2rem;
            margin-bottom: 16px;
        }

        .feature-card p {
            position: relative;
            z-index: 2;
        }

        /* =========================
   CARD VARIANTS
========================= */

        .card-purple {
            background: linear-gradient(135deg,
                    var(--secondary),
                    var(--primary));

            color: white;
        }

        .card-purple h3,
        .card-purple p {
            color: white;
        }

        .card-pink {
            background: linear-gradient(135deg,
                    #C6BCFF,
                    #AD9EFE);

            color: var(--dark);
        }

        .card-lavender {
            background: #E8E2FF;
            color: var(--dark);
        }

        .card-cyan {
            background: var(--dark);
            color: white;
        }

        .card-cyan h3,
        .card-cyan p {
            color: white;
        }

        /* =========================
   MINI UI
========================= */

        .mini-ui {
            background: rgba(255, 255, 255, 0.15);

            border-radius: 20px;

            padding: 18px;

            margin-top: 28px;

            backdrop-filter: blur(10px);

            position: relative;
            z-index: 2;
        }

        .mini-line {
            height: 12px;

            border-radius: 20px;

            background: rgba(255, 255, 255, 0.4);

            margin-bottom: 12px;
        }

        .mini-line.dark {
            background: rgba(0, 0, 0, 0.15);
        }

        /* =========================
   SHOWCASE
========================= */

        .showcase-card {
            background: rgba(255, 255, 255, 0.7);

            backdrop-filter: blur(12px);

            border: 1px solid rgba(255, 255, 255, 0.4);

            border-radius: 28px;

            overflow: hidden;

            height: 100%;

            transition: 0.3s ease;
        }

        .showcase-card:hover {
            transform: translateY(-8px);
        }

        .showcase-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .showcase-content {
            padding: 24px;
        }

        .showcase-content h4 {
            margin-bottom: 12px;
        }

        /* =========================
   CTA SECTION
========================= */

        .cta-section {

            background: linear-gradient(135deg,
                    #E8E2FF,
                    #F5F2FF);

            border: 1px solid rgba(255, 255, 255, 0.5);

            border-radius: 40px;

            padding: 80px;

            position: relative;

            overflow: hidden;
        }

        .cta-section::before {
            content: '';

            position: absolute;

            width: 400px;
            height: 400px;

            background: rgba(132, 111, 250, 0.15);

            border-radius: 50%;

            right: -100px;
            top: -100px;

            filter: blur(50px);
        }

        .cta-section h2 {
            font-size: 4rem;
            line-height: 1;
            max-width: 700px;
            margin-bottom: 24px;
        }

        /* =========================
   FOOTER
========================= */

        footer {
            padding: 80px 0 40px;
            background: #F2EEFF;
        }

        .footer-title {
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .footer-link {
            display: block;
            margin-bottom: 12px;

            color: var(--muted);

            transition: 0.3s ease;
        }

        .footer-link:hover {
            color: var(--secondary);
        }

        /* =========================
   ANIMATION
========================= */

        @keyframes float {

            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }

        }

        /* =========================
   RESPONSIVE
========================= */

        @media(max-width:991px) {

            .hero {
                text-align: center;
                padding-top: 120px;
            }

            .hero-title {
                font-size: 3.7rem;
                margin: auto;
            }

            .hero-desc {
                margin: auto;
                margin-top: 24px;
                margin-bottom: 24px;
            }

            .hero-visual {
                margin-top: 60px;
                height: 700px;
            }

            .section-title {
                font-size: 2.7rem;
            }

            .cta-section {
                padding: 50px 30px;
            }

            .cta-section h2 {
                font-size: 2.7rem;
            }

        }

        @media(max-width:767px) {

            section {
                padding: 70px 0;
            }

            .hero-title {
                font-size: 3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .hero-card {
                width: 100%;
                position: relative;
                left: auto;
                right: auto;
                top: auto;
                bottom: auto;
                margin-bottom: 20px;
            }

            .hero-visual {
                height: auto;
            }

            .feature-card {
                padding: 28px;
            }

            .cta-section h2 {
                font-size: 2.2rem;
            }

        }

        @media(max-width:576px) {

            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .btn-primary-custom,
            .btn-outline-custom {
                width: 100%;
            }

            .cta-section {
                padding: 40px 24px;
            }

        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="#">
                TOPGROOVE
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Programs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                </ul>

                <div class="d-flex gap-3">
                    <button class="btn btn-outline-custom">
                        Sign In
                    </button>

                    <button class="btn btn-primary-custom">
                        Join Now
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h1 class="hero-title">
                        Move Beyond
                        Limits.
                    </h1>

                    <p class="hero-desc">
                        TOPGROOVE is a modern dance community focused on creativity,
                        performance, collaboration, and unforgettable movement culture.
                    </p>

                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-primary-custom">
                            Join Community
                        </button>

                        <button class="btn btn-outline-custom">
                            Explore Events
                        </button>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="hero-visual">

                        <div class="blob blob-1"></div>
                        <div class="blob blob-2"></div>
                        <div class="blob blob-3"></div>

                        <div class="hero-card card-top">
                            <img src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?q=80&w=1200&auto=format&fit=crop"
                                alt="Dance">

                            <h5>Street Choreography</h5>

                            <p>
                                Weekly classes and workshops with energetic routines and performance sessions.
                            </p>
                        </div>

                        <div class="hero-card card-bottom">
                            <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?q=80&w=1200&auto=format&fit=crop"
                                alt="Dance">

                            <h5>Community Showcase</h5>

                            <p>
                                Build your dance journey with events, competitions, and collaborations.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FEATURES -->
    <section>
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">
                    Built For Every Groove.
                </h2>

                <p class="section-desc">
                    From choreography training to live performances,
                    TOPGROOVE helps dancers grow, connect, and express themselves.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="feature-card card-purple">

                        <h3>Dance Workshops</h3>

                        <p>
                            Learn from experienced dancers through immersive choreography sessions.
                        </p>

                        <div class="mini-ui">
                            <div class="mini-line"></div>
                            <div class="mini-line"></div>
                            <div class="mini-line" style="width:60%"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card card-pink">

                        <h3>Performance Events</h3>

                        <p>
                            Join showcases, battles, and stage performances with the community.
                        </p>

                        <div class="mini-ui">
                            <div class="mini-line"></div>
                            <div class="mini-line"></div>
                            <div class="mini-line" style="width:50%"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card card-lavender">

                        <h3>Creative Collaboration</h3>

                        <p>
                            Connect with creators, videographers, choreographers, and performers.
                        </p>

                        <div class="mini-ui">
                            <div class="mini-line dark"></div>
                            <div class="mini-line dark"></div>
                            <div class="mini-line dark" style="width:50%"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card card-cyan">

                        <h3>Modern Dance Culture</h3>

                        <p>
                            A space where creativity, confidence, and movement come together.
                        </p>

                        <div class="mini-ui">
                            <div class="mini-line dark"></div>
                            <div class="mini-line dark"></div>
                            <div class="mini-line dark" style="width:65%"></div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SHOWCASE -->
    <section>
        <div class="container">

            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="showcase-card">

                        <img src="https://images.unsplash.com/photo-1504609773096-104ff2c73ba4?q=80&w=1200&auto=format&fit=crop"
                            alt="Showcase">

                        <div class="showcase-content">
                            <h4>Street Performance</h4>

                            <p>
                                High-energy choreography and freestyle movement sessions.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="showcase-card">

                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=1200&auto=format&fit=crop"
                            alt="Showcase">

                        <div class="showcase-content">
                            <h4>Dance Workshop</h4>

                            <p>
                                Collaborate with instructors and improve your skills together.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="showcase-card">

                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?q=80&w=1200&auto=format&fit=crop"
                            alt="Showcase">

                        <div class="showcase-content">
                            <h4>Creative Community</h4>

                            <p>
                                Express your creativity through movement and storytelling.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="container">

            <div class="cta-section">

                <h2>
                    Start Your Journey With TOPGROOVE.
                </h2>

                <p class="hero-desc">
                    Join workshops, performances, and collaborations with passionate dancers.
                </p>

                <button class="btn btn-primary-custom">
                    Join The Community
                </button>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">

            <div class="row">

                <div class="col-lg-4 mb-4">
                    <h3 class="footer-title">
                        TOPGROOVE
                    </h3>

                    <p class="text-muted">
                        Modern dance community for creativity,
                        collaboration, and movement culture.
                    </p>
                </div>

                <div class="col-lg-2 mb-4">
                    <h6 class="mb-3">Community</h6>

                    <a href="#" class="footer-link">Programs</a>
                    <a href="#" class="footer-link">Events</a>
                    <a href="#" class="footer-link">Workshops</a>
                </div>

                <div class="col-lg-2 mb-4">
                    <h6 class="mb-3">Explore</h6>

                    <a href="#" class="footer-link">Gallery</a>
                    <a href="#" class="footer-link">Showcase</a>
                    <a href="#" class="footer-link">Teams</a>
                </div>

                <div class="col-lg-2 mb-4">
                    <h6 class="mb-3">Support</h6>

                    <a href="#" class="footer-link">Help Center</a>
                    <a href="#" class="footer-link">Contact</a>
                    <a href="#" class="footer-link">FAQ</a>
                </div>

                <div class="col-lg-2 mb-4">
                    <h6 class="mb-3">Social</h6>

                    <a href="#" class="footer-link">Instagram</a>
                    <a href="#" class="footer-link">TikTok</a>
                    <a href="#" class="footer-link">YouTube</a>
                </div>

            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>