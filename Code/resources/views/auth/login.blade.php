<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />


<body style="background-color: #f0f0f0;">
    <x-guest-layout>
        <x-slot name="logo">
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <section class="vh-100"style="background-image: url('assets5/pantai.png')">
            <div class="container h-100" >
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <x-jet-validation-errors  />

                    <div class="card text-black" style="border-radius: 25px;">

                        <div class="card-body p-md-5 p-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <a href="/" class="mx-2 btn btn-outline-secondary position-absolute top-0 start-0 mt-3 ms-3"> Back </a>

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                                 
                                    <form style="font-family: 'Helvetica Neue', sans-serif; color: #333; padding: 20px;"
                                        method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div
                                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                        </div>
                                        <div class="form-outline mb-4">
                                            <x-jet-label for="email" value="{{ __('Email') }}"
                                                class="form-label" />
                                            <x-jet-input id="email" class="form-control form-control-lg"
                                                type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <x-jet-label for="password" value="{{ __('Password') }}" class="form-label" />
                                            <div class="input-group">
                                                <x-jet-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                    <i id="eye-icon" class="mdi mdi-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        

                                        {{-- REMEMBER ME  --}}
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>

                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="flex flex-col items-center justify-center mt-4">
                                            <x-jet-button class="btn-sm">
                                                {{ __('Login') }}
                                            </x-jet-button>
                                        
                                            <div class="text-center mt-2">
                                                <span>Don't have an account?</span>
                                                <br>
                                                <a href="/register" class="text-decoration-none"> <u> Register here </u></a>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> --}}
                                    <img src="assets5/PA1-LumbanBinanga.png" width="70%" style="margin-left: 130px; padding-bottom: 5px" class="rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


            </div>
            </div>
        </section>






    </x-guest-layout>
</body>

<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eye-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("mdi-eye");
        eyeIcon.classList.add("mdi-eye-off");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("mdi-eye-off");
        eyeIcon.classList.add("mdi-eye");
    }
});


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
