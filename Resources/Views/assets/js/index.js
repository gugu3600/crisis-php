const login = document.getElementById("login"),
    signup = document.getElementById("signup"),
    btn_login = document.getElementById("btn-login"),
    btn_signup = document.getElementById("btn-signup"),
    modal_login = document.getElementById("modal-sign-in"),
    modal_signup = document.getElementById("modal-sign-up"),
    password = document.getElementById("password"),
    confirm_password = document.getElementById('confirm-password'),
    login_password = document.getElementById('login-password'),
    signup_eye = document.getElementById('eye'),
    confirm_eye = document.getElementById("confirm-eye"),
    login_eye = document.getElementById("login-eye");

// console.log(login,signup,modal_login,modal_signup,password,confirm_password,login_password,signup_eye,confirm_eye,login_eye);



function showSignin() {

    // e.preventDefault();

    if (modal_login.classList.contains("hidden")) modal_login.classList.replace("hidden", "flex");

    if (modal_signup.classList.contains("flex")) modal_signup.classList.replace("flex","hidden");

    modal_signup.classList.add("hidden");
    modal_login.classList.add("flex");
    modal_login.classList.remove("hidden");
    }

    function showSignup() {

    if (modal_signup.classList.contains("hidden")) modal_signup.classList.replace("hidden", "flex");

    if (modal_login.classList.contains("flex")) modal_login.classList.replace("flex","hidden");

    modal_login.classList.add("hidden");
    modal_signup.classList.remove("hidden");
    modal_signup.classList.add("flex");

    }

    function cancel(){

        modal_login.classList.contains("flex") ? modal_login.classList.replace("flex","hidden") : modal_login.classList.add("hidden");

        modal_signup.classList.contains("flex") ? modal_signup.classList.replace("flex","hidden") : modal_signup.classList.add("hidden");
    }


