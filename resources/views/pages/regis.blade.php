<x-header></x-header>
<!-- BACKGROUND -->
<div class="bg-glow-top"></div>
<div class="bg-glow-bottom"></div>
<div class="grid-bg"></div>

<!-- MAIN -->
<section class="main-section">

    <div class="main-card">

        <!-- DESKTOP BUTTONS -->

        

    <!-- CENTER -->
    <div class="d-flex flex-column align-items-center justify-content-center py-lg-4">

        <!-- LOGO -->
        <div class="logo-box d-flex flex-column align-items-center justify-content-center mb-4">

            <i class="ri-disc-line fs-2 mb-1"></i>

            <span class="fw-bold small" style="letter-spacing:4px;">
                LOGO
            </span>

        </div>

        <!-- REGISTER CARD -->
        <div class="register-card">

            <!-- TITLE -->
            <div class="text-center mb-4">

                <h1 class="fw-bold title-gradient mb-2">
                    CREATE ACCOUNT
                </h1>

                <p class="text-secondary small mb-0">
                    Join futuristic dance movement community
                </p>

            </div>

            <!-- FORM -->
            <form action="{{ route('auth.regis') }}" method="POST">
                @csrf
                <!-- NAME -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-user-3-line input-icon"></i>

                        <input type="text" name="name" class="form-control custom-input @error('name') is-invalid                                        
                                    @enderror" value="{{ old('name') }}" placeholder="Full Name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- AGE -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-user-3-line input-icon"></i>

                        <input type="text" name="age" class="form-control custom-input @error('age') is-invalid                                        
                                    @enderror" value="{{ old('age') }}" placeholder="Your Age">
                        @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- PLACE OF BIRTH -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-map-pin-line input-icon"></i>

                        <input type="text" name="place_of_birth" class="form-control custom-input @error('place_of_birth') is-invalid                                        
                                    @enderror" value="{{ old('place_of_birth') }}" placeholder="Place Of Birth">
                        @error('place_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- DATE OF BIRTH -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-calendar-2-line input-icon"></i>

                        <input type="date" name="date_of_birth" class="form-control custom-input @error('date_of_birth') is-invalid                                        
                                    @enderror" value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- PHONE -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-smartphone-line input-icon"></i>

                        <input type="tel" name="phone" class="form-control custom-input @error('phone') is-invalid                                        
                                    @enderror" value="{{ old('phone') }}" placeholder="Phone Number: 08xxxxxxx">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- GENDER -->
                <div class="mb-3">

                    <select class="form-select custom-select @error('gender') is-invalid @enderror" name="gender">

                        <option value="" disabled {{ old('gender') == null ? 'selected' : '' }}>
                            Select Gender
                        </option>

                        <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>

                    </select>

                    @error('gender')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <!-- ADDRESS -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-map-pin-line input-icon"></i>

                        <textarea class="form-control custom-input @error('address') is-invalid                                        
                                    @enderror" name="address" placeholder="Address">{{ old('address') }}</textarea>
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- EMAIL -->
                <div class="mb-3">

                    <div class="position-relative">

                        <i class="ri-mail-line input-icon"></i>

                        <input type="email" name="email" class="form-control custom-input @error('email') is-invalid                                        
                                    @enderror" value="{{ old('email') }}" placeholder="Email Address">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- PASSWORD -->
                <div class="mb-4">

                    <div class="position-relative">

                        <i class="ri-lock-line input-icon"></i>

                        <input type="password" name="password" class="form-control custom-input @error('password') is-invalid                                        
                                    @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn btn-register w-100">

                    REGISTER NOW

                </button>

            </form>

            <!-- LOGIN -->
            <div class="text-center mt-4">

                <span class="text-secondary small">
                    Already have an account?
                </span>

                <a href="{{ route('login') }}" class="login-link small fw-semibold">
                    Login Here
                </a>

            </div>

        </div>

    </div>

    </div>

</section>

<!-- CONTACT MODAL -->
{{-- <div class="modal fade" id="contactModal" tabindex="-1">

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

                        <a href="#"
                            class="contact-link wa-btn d-flex align-items-center justify-content-center gap-2">

                            <i class="ri-whatsapp-line"></i>

                            <span class="fw-semibold">
                                WhatsApp
                            </span>

                        </a>

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

    </div> --}}

<x-footer></x-footer>