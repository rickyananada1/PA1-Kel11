<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
  crossorigin="anonymous"
/>

<link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

<style>

.equal-input {
    flex: 1;
}   
</style>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <a href="/" class="mx-2 btn btn-outline-secondary position-absolute top-0 start-0 mt-3 ms-3"> Back </a>
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>


        <form method="POST" action="{{ route('register') }}" class="mx-1 mx-md-4">
            @csrf

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                </div>
            </div>
            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <div class="input-group">
                        <x-jet-input id="password" class="form-control form-control-lg equal-input" type="password" name="password" required autocomplete="current-password" />
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i id="eye-icon" class="mdi mdi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <div class="input-group">
                        <x-jet-input id="password_confirmation" class="form-control form-control-lg equal-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                            <i id="confirm-eye-icon" class="mdi mdi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            
        
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="d-flex flex-column justify-content-center align-items-center mx-4 mb-3 mb-lg-4">
              <x-jet-button class="btn btn-dark btn-lg mb-2">
                  {{ __('Register') }}
              </x-jet-button>
          
              <a class="underline text-dark" href="{{ route('login') }}">
                  {{ __('Already registered?') }}
              </a>
          </div>
          
        </form>
    </div>
    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
        class="img-fluid" alt="Sample image">

    </div>





    </div>
</div>
</div>
</div>
</div>
</div>

        </section>


<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>

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

document.getElementById("toggleConfirmPassword").addEventListener("click", function() {
    var confirmPasswordInput = document.getElementById("password_confirmation");
    var confirmEyeIcon = document.getElementById("confirm-eye-icon");

    if (confirmPasswordInput.type === "password") {
        confirmPasswordInput.type = "text";
        confirmEyeIcon.classList.remove("mdi-eye");
        confirmEyeIcon.classList.add("mdi-eye-off");
    } else {
        confirmPasswordInput.type = "password";
        confirmEyeIcon.classList.remove("mdi-eye-off");
        confirmEyeIcon.classList.add("mdi-eye");
    }
});



</script>

