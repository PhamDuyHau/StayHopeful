<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('authlogincss/login.css') }}">
<link rel="stylesheet" href="{{ asset('authlogincss/spinner.css') }}">

{{-- spinner-loader --}}
<div id="spinner-container" style="display: none;">
    <div id="spinner"></div>
</div>
{{-- alert --}}
<div class="container-register-notification">
    <div class="register-status-success">
        <div class="exit-alert-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <img class="img-alert" src="{{asset('img/logo.svg')}}" alt="">
            <p>
                Sign Up Successfully !
                <br>
                Please verify your email before sign in.
            </p>
    </div>
</div>
<div class="container-login-notification">
    <div class="login-status-success">
        <div class="exit-alert-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <img class="img-alert" src="{{asset('img/logo.svg')}}" alt="">
        <p>
            Sign In Successfully !
            <br>
            Thanks for being with us.
        </p>
    </div>
</div>
<div class="container-error-notification">
    <div class="status-error">
        <div class="exit-alert-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <img class="img-alert" src="{{asset('img/logo.svg')}}" alt="">
        <p>
            Somethings went wrong !
            <br>
            Please try again later.
        </p>
    </div>
</div>

{{-- input email forgot pass form --}}
<div class="container-reset-password-email-input">
    <div class="modal-inner-reset-password-email-input"></div>
    <div class="reset-password-email-input">
        <div class="exit-reset-password-email-input-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <form id="inputEmailResetPassword" class="reset-password-email-input-form" method="POST">
            @csrf
            <h2 class="reset-password-email-input-form-title">Reset Password</h2>
            <p>Please input your email to receive OTP:</p>
            <div class="reset-password-email-input-field">
                <i class="fa-solid fa-user"></i>
                <input id="reset-password-email" type="text" placeholder="Email" name="name"/>
                <small class="reset-password-email-validate"></small>
            </div>
            <button id="btn-send-otp" class="btn solid btn-send-otp-email">Send OTP</button>
        </form>
    </div>
</div>

{{-- forgot pass form --}}
<div class="container-reset-password-form">
    <div class="modal-inner-reset-password-form"></div>
    <div class="reset-password-form-wrapper">
        <div class="exit-reset-password-form">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <form id="resetPasswordForm" class="reset-password-form" method="POST">
            @csrf
            <h2 class="reset-password-form-title">Reset Password</h2>
            <p>Please input your OTP to reset password:</p>
            <div class="reset-password-input-field">
                <i class="fa-solid fa-unlock-keyhole"></i>
                <input id="reset-password-otp" type="text" placeholder="OTP" name="otp"/>
                <small class="reset-password-otp-validate"></small>
            </div>
            <div class="reset-password-input-field">
                <i class="fa-solid fa-key"></i>
                <input id="new-password-reset" type="password" placeholder="New Password" name="new_password"/>
                <small class="reset-password-validate"></small>
            </div>
            <div class="reset-password-input-field">
                <i class="fa-solid fa-key"></i>
                <input id="confirm-new-password-reset" type="password" placeholder="Confirm New Password" name="confirm_new_password"/>
                <small class="reset-password-validate"></small>
            </div>
            <button id="btn-reset-password" type="submit" class="btn solid btn-reset-password-submit">Confirm</button>
            <p>Haven't receive OTP ?  <a class="link-resend-otp" href="#">Resend</a></p>
        </form>
    </div>
</div>


{{-- login-register-popup --}}
<div class="container-popup scroll-form-signin-signup {{session('isVerified')?'showLogin':''}}" style="z-index: 10;">
    <div class="modal-inner">
    </div>
    <div class="container-login" id="form-login" >
        <div class="exit-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="container-login-register">
        <div class="forms-container"> 
            <div class="signin-signup">
                
                {{-- Login --}}
                <form id="loginForm" class="sign-in-form" method="POST">
                    <h2 class="form-title">Sign In</h2>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input id="login-email" type="text" placeholder="Email" name="name"/>
                        <small></small>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input id="login-password" type="password" placeholder="Password" name="password"/>
                        <div class="eye"><i class="far fa-eye"></i></div>
                        <small></small>
                    </div>
                    <button id="btn-sign-in" type="submit" class="btn-login solid">Sign In</button>
                    <a class="a-forgot-pass" href="#">Forgot your password?</a>
                    <p class="social-text">Or Sign in with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{route('auth.google')}}" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                {{-- Register --}}
                <form id="registerForm" action="{{route("auth.register")}}" class="sign-up-form" method="POST">
                    @csrf
                    <h2 class="form-title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input id="register-name" type="text" placeholder="Name" name="name"/>
                        <small></small>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input id="register-email" type="text" placeholder="Email" name="email"/>
                        <small></small>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input id="register-password" type="password" placeholder="Password"  name="password"/>
                        <small></small>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input id="register-confirm-password" type="password" placeholder="Confirm Password" name="confirm_password"/>
                        <small></small>
                    </div>
                    <button id="btn-sign-up" type="submit" class="btn-login solid">Sign Up</button>

                    <p class="social-text">Or Sign up with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Nice to meet you! Feel free to sign up and be parts of our community.</p>
                    <button class="btn-login transparent" id="sign-up-btn">Sign Up</button>
                </div>

                <img src="{{asset('img/logo.svg')}}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Welcome back! It's a great honor for us to have you here again.</p>
                    <button class="btn-login transparent" id="sign-in-btn">Sign In</button>
                </div>

                <img src="{{asset('img/logo.svg')}}" class="image" alt="">
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/2.3.2/spin.min.js"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <script>

    $(document).ready(function() {
    //login-register form
    var containerLoginRegister = document.querySelector(".container-login-register");

    //alert
    var registerSuccess = document.querySelector(".container-register-notification");
    var loginSuccess = document.querySelector(".container-login-notification");
    var errorAlert = document.querySelector(".container-error-notification");
    // Intercept the form submission
    // ajax register
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        // Perform client-side validation if needed
        let isValid = checkValidateRegister();
        if (isValid) {
        // Send the form data to the server using Ajax
        $.ajax({
            type: 'POST',
            url: "{{route('auth.register')}}",
            data: $('#registerForm').serialize(),
            beforeSend: function () {
                $('#spinner-container').show();
            },
            success: function(response) {
                $('#spinner-container').hide();
                if(response.status == 'success'){
                // Handle the server response
                // alert(response.message);
                // window.location.href = "{{route('/')}}"; 
                registerSuccess.classList.add("showAlert");
                containerLoginRegister.classList.remove("sign-up-mode");
                } else if (response.status == 'error'){
                    setError(registerEmail,'Email đã tồn tại');
                }
            },
            error: function(error) {
                // Handle errors
                errorAlert.classList.add("showAlert");
                console.log(error);
            }
        });
    }
    });


    // Login form submit handler
$('#loginForm').submit(function(e) {

e.preventDefault();
let isValid = checkLogin();
    if (isValid) {
    
$.ajax({
    url: "{{route('auth.login')}}",
    method: 'POST',
    data: {
        _token: "{{ csrf_token() }}",
        email: $('#login-email').val(),
        password: $('#login-password').val()
    },
    success: function(response){
        if(response.status == 'success'){
            // Login successfully
            console.log(response.message);
            if(response.role == 1){
            loginSuccess.classList.add("showAlert");
                window.location.href = "{{route('admin.dashboard')}}"; 
                
            }
            else if(response.role == 0){
            loginSuccess.classList.add("showAlert");
                window.location.href = "{{route('/')}}"; 
            }
            
        }
        else if(response.status == 'undefined_email'){
            setError(loginEmail,'Undefined email! Please sign up');
        }
        else if(response.status == 'email_error'){
            setError(loginEmail,'Must verify email before login');
        }
        else if(response.status == 'error'){
            setError(loginPassword,'Invalid credentials');
        }
        else{
            errorAlert.classList.add("showAlert");
            // Display error 
            console.log(response.message);
        }
    }
});
    }
});
});
    </script>
