<x-header></x-header>

    <!-- BACKGROUND -->
    <div class="bg-glow-top"></div>
    <div class="bg-glow-bottom"></div>
    <div class="grid-bg"></div>

    <!-- MAIN -->
    <section class="main-section">

        <div class="main-card">

            <!-- DESKTOP BUTTONS -->

            <!-- TOP LEFT -->
            <div class="desktop-only position-absolute top-0 start-0 m-4">

                <button
                    type="button"
                    class="float-btn d-flex flex-column align-items-center justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#contactModal">

                    <i class="ri-customer-service-2-line mb-1"></i>

                    <span>CONTACT</span>

                </button>

            </div>

            <!-- TOP RIGHT -->
            <div class="desktop-only position-absolute top-0 end-0 m-4">

                <a href="{{ route('regis') }}"
                    class="float-btn d-flex flex-column align-items-center justify-content-center text-decoration-none">

                    <i class="ri-user-add-line mb-1"></i>

                    <span>REGISTER</span>

                </a>

            </div>

            <!-- BOTTOM LEFT -->
            <div class="desktop-only position-absolute bottom-0 start-0 m-4">

                <button
                    type="button"
                    class="float-btn d-flex flex-column align-items-center justify-content-center">

                    <i class="ri-instagram-line mb-1"></i>

                    <span>INSTAGRAM</span>

                </button>

            </div>

            <!-- BOTTOM RIGHT -->
            <div class="desktop-only position-absolute bottom-0 end-0 m-4">

                <button
                    type="button"
                    class="float-btn d-flex flex-column align-items-center justify-content-center">

                    <i class="ri-tiktok-fill mb-1"></i>

                    <span>TIKTOK</span>

                </button>

            </div>

            <!-- MOBILE BUTTONS -->
            <div class="mobile-buttons d-lg-none">

                <!-- ROW 1 -->
                <div class="d-flex justify-content-between gap-3 mb-3">

                    <!-- CONTACT -->
                    <button
                        type="button"
                        class="float-btn mobile-float-btn d-flex flex-column align-items-center justify-content-center flex-fill"
                        data-bs-toggle="modal"
                        data-bs-target="#contactModal">

                        <i class="ri-customer-service-2-line mb-1"></i>

                        <span>CONTACT</span>

                    </button>

                    <!-- REGISTER -->
                    <button
                        type="button"
                        class="float-btn mobile-float-btn d-flex flex-column align-items-center justify-content-center flex-fill">

                        <i class="ri-user-add-line mb-1"></i>

                        <span>REGISTER</span>

                    </button>

                </div>

                <!-- ROW 2 -->
                <div class="d-flex justify-content-between gap-3">

                    <!-- INSTAGRAM -->

                    <a href="{{ route('login') }}"
                    class="float-btn d-flex flex-column align-items-center justify-content-center text-decoration-none">

                        <i class="ri-instagram-line mb-1"></i>

                        <span>INSTAGRAM</span>

                    </a>
                    {{-- <button
                        type="button"
                        class="float-btn mobile-float-btn d-flex flex-column align-items-center justify-content-center flex-fill">

                        <i class="ri-instagram-line mb-1"></i>

                        <span>INSTAGRAM</span>

                    </button> --}}

                    <!-- TIKTOK -->
                    <a href="{{ route('login') }}"
                    class="float-btn d-flex flex-column align-items-center justify-content-center text-decoration-none">

                        <i class="ri-tiktok-fill mb-1"></i>

                        <span>TIKTOK</span>

                    </a>
                    {{-- <button
                        type="button"
                        class="float-btn mobile-float-btn d-flex flex-column align-items-center justify-content-center flex-fill">

                        <i class="ri-tiktok-fill mb-1"></i>

                        <span>TIKTOK</span>

                    </button> --}}

                </div>

            </div>

            <!-- CENTER -->
            <div class="d-flex flex-column align-items-center justify-content-center py-lg-4">

                <!-- LOGO -->
                <div class="logo-box d-flex flex-column align-items-center justify-content-center mb-4">

                    <i class="ri-disc-line fs-2 mb-1"></i>

                    <span class="fw-bold small" style="letter-spacing:4px;">
                        LOGO
                    </span>

                </div>

                <!-- LOGIN CARD -->
                <div class="login-card">

                    <!-- TITLE -->
                    <div class="text-center mb-4">

                        <h1 class="fw-bold title-gradient mb-2">
                            LOGIN FORM
                        </h1>

                        <p class="text-secondary small mb-0">
                            Welcome back to futuristic dance movement
                        </p>

                    </div>

                    <!-- FORM -->
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf

                        <!-- EMAIL -->
                        <div class="mb-3">

                            <div class="position-relative">

                                <i class="ri-mail-line input-icon"></i>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control custom-input @error('email') is-invalid @enderror"
                                    placeholder="Email Address">

                            </div>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4">

                            <div class="position-relative">

                                <i class="ri-lock-line input-icon"></i>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control custom-input @error('password') is-invalid @enderror"
                                    placeholder="Password">

                            </div>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- <!-- FORGOT -->
                        <div class="text-end mb-4">

                            <a href="#"
                                class="small text-decoration-none forgot-password">

                                Forgot Password?

                            </a>

                        </div> --}}

                        <!-- LOGIN -->
                        <button type="submit" class="btn btn-login w-100">

                            LOGIN NOW

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- CONTACT MODAL -->
    <div class="modal fade" id="contactModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content modal-content-custom p-2">

                <div class="modal-body p-4">

                    <!-- HEADER -->
                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <h5 class="fw-bold mb-0 text-white">
                            Contact Us
                        </h5>

                        <button
                            type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="modal">
                        </button>

                    </div>

                    <!-- BUTTON -->
                    <div class="d-grid gap-3">

                        <!-- WA -->
                        <a href="#"
                            class="contact-link wa-btn d-flex align-items-center justify-content-center gap-2">

                            <i class="ri-whatsapp-line"></i>

                            <span class="fw-semibold">
                                WhatsApp
                            </span>

                        </a>

                        <!-- EMAIL -->
                        <a href="#"
                            class="contact-link email-btn d-flex align-items-center justify-content-center gap-2">

                            <i class="ri-mail-send-line"></i>

                            <span class="fw-semibold">
                                Email
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <x-footer></x-footer>