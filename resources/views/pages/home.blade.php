<x-header></x-header>
<!-- ================= FLOAT BUTTONS (DESKTOP) ================= -->

<a href="#" class="float-btn top-left" data-bs-toggle="modal" data-bs-target="#contactModal">
    <i class="ri-customer-service-2-line"></i>
    CONTACT
</a>

<a href="{{ route('regis') }}" class="float-btn top-right">
    <i class="ri-user-add-line"></i>
    SIGN IN
</a>

<a href="#" class="float-btn bottom-left">
    <i class="ri-instagram-line"></i>
    INSTAGRAM
</a>

<a href="#" class="float-btn bottom-right">
    <i class="ri-tiktok-fill"></i>
    TIKTOK
</a>

<!-- ================= CONTENT ================= -->

<div class="content-wrapper">

    <!-- MOBILE GRID (2x2) -->
    <div class="mobile-grid">

        <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class="ri-customer-service-2-line"></i>
            CONTACT
        </a>

        <a href="{{ route('regis') }}">
            <i class="ri-user-add-line"></i>
            SIGN IN
        </a>

        <a href="#">
            <i class="ri-instagram-line"></i>
            INSTAGRAM
        </a>

        <a href="#">
            <i class="ri-tiktok-fill"></i>
            TIKTOK
        </a>

    </div>

    <!-- LOGO -->
    <div class="logo-box">
        <img src="{{ asset('images/log-tgk.png') }}" alt="TOPGROOVE Logo">
    </div>

    <!-- LOGIN CARD -->
    <div class="auth-card">

        <h2 class="title">WELCOME BACK</h2>
        <p class="subtitle">Login to TOPGROOVE Dance Community</p>

        <form action="{{ route('auth.login') }}" method="POST">
            @csrf

            <div class="input-wrapper">
                <i class="ri-mail-line input-icon"></i>
                <input type="email" name="email" class="form-control custom-input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-lock-line input-icon"></i>
                <input type="password" name="password" class="form-control custom-input @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn-login">LOGIN</button>

        </form>

    </div>

</div>

<!-- ================= CONTACT MODAL ================= -->
<div class="modal fade" id="contactModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content p-4">

            <h5 class="text-white mb-4">Contact Us</h5>

            <a href="#" class="contact-btn mb-3">
                <i class="ri-whatsapp-line"></i>
                WhatsApp
            </a>

            <a href="#" class="contact-btn">
                <i class="ri-mail-send-line"></i>
                Email
            </a>

        </div>

    </div>

</div>

<x-footer></x-footer>