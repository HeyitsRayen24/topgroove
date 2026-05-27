<x-header></x-header>

<div class="auth-wrapper">

    <!-- LOGO -->
    <div class="logo-box">
        <img src="{{ asset('images/log-tgk.png') }}" alt="TOPGROOVE Logo">
    </div>

    <!-- CARD -->
    <div class="auth-card">

        <h3 class="title">CREATE ACCOUNT</h3>
        <p class="subtitle">Join TOPGROOVE Dance Community</p>

        <form action="{{ route('auth.regis') }}" method="POST">
            @csrf

            <div class="input-wrapper">
                <i class="ri-user-3-line input-icon"></i>
                <input type="text" name="name" class="form-control custom-input @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" placeholder="Full Name">
                @error('name')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-user-line input-icon"></i>
                <input type="text" name="age" class="form-control custom-input @error('age') is-invalid @enderror"
                    value="{{ old('age') }}" placeholder="Age">
                @error('age')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-map-pin-line input-icon"></i>
                <input type="text" name="place_of_birth"
                    class="form-control custom-input @error('place_of_birth') is-invalid @enderror"
                    value="{{ old('place_of_birth') }}" placeholder="Place of Birth">
                @error('place_of_birth')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-calendar-line input-icon"></i>
                <input type="date" name="date_of_birth"
                    class="form-control custom-input @error('date_of_birth') is-invalid @enderror"
                    value="{{ old('date_of_birth') }}" placeholder="Place of Birth">
                @error('date_of_birth')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-smartphone-line input-icon"></i>
                <input type="tel" name="phone" class="form-control custom-input @error('phone') is-invalid @enderror"
                    value="{{ old('phone') }}" placeholder="Phone Number">
                @error('phone')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-user-line input-icon"></i>

                <select name="gender" class="form-control form-select @error('gender') is-invalid @enderror">
                    <option value="">Gender</option>

                    <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>
                        Laki-laki
                    </option>

                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>
                </select>

                @error('gender')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-home-line input-icon"></i>
                <textarea name="address" placeholder="Address"
                    class="form-control custom-input @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                @error('address')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-mail-line input-icon"></i>
                <input type="email" name="email" class="form-control custom-input @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Email">
                @error('email')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-wrapper">
                <i class="ri-lock-line input-icon"></i>
                <input type="password" name="password"
                    class="form-control custom-input @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn-register mt-2" type="submit">
                REGISTER NOW
            </button>

        </form>

    </div>

</div>

<x-footer></x-footer>