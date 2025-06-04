const modal_login = document.getElementById("modal-sign-in"),
    modal_signup = document.getElementById("modal-sign-up"),
    signup_eye = document.getElementById('eye'),
    confirm_eye = document.getElementById("confirm-eye"),
    login_eye = document.getElementById("login-eye");

function showSignin() {

    // e.preventDefault();

    if (modal_login.classList.contains("hidden")) modal_login.classList.replace("hidden", "flex");

    if (modal_signup.classList.contains("flex")) modal_signup.classList.replace("flex", "hidden");

    modal_signup.classList.add("hidden");
    modal_login.classList.add("flex");
    modal_login.classList.remove("hidden");
}

function showSignup() {

    if (modal_signup.classList.contains("hidden")) modal_signup.classList.replace("hidden", "flex");

    if (modal_login.classList.contains("flex")) modal_login.classList.replace("flex", "hidden");

    modal_login.classList.add("hidden");
    modal_signup.classList.remove("hidden");
    modal_signup.classList.add("flex");

}

function cancel() {

    modal_login.classList.contains("flex") ? modal_login.classList.replace("flex", "hidden") : modal_login.classList.add("hidden");

    modal_signup.classList.contains("flex") ? modal_signup.classList.replace("flex", "hidden") : modal_signup.classList.add("hidden");
}

let show_pw = false;

signup_eye.addEventListener("click", function () {

    // show_pw = true;
    if (!show_pw) {
        this.firstChild.classList.replace("fa-eye", "fa-eye-slash");
        this.previousElementSibling.type = "text";
        show_pw = true;
    } else {

        this.firstChild.classList.replace("fa-eye-slash", "fa-eye");
        this.previousElementSibling.type = "password";
        show_pw = false;
    }
});


show_confirm = false;


confirm_eye.addEventListener("click", function () {

    // show_pw = true;
    if (!show_confirm) {
        this.firstChild.classList.replace("fa-eye", "fa-eye-slash");
        this.previousElementSibling.type = "text";
        show_confirm = true;
    } else {
        this.firstChild.classList.replace("fa-eye-slash", "fa-eye");
        this.previousElementSibling.type = "password";
        show_confirm = false;
    }
});

login_pw = false;


login_eye.addEventListener("click", function () {

    // show_pw = true;
    if (!login_pw) {
        this.firstChild.classList.replace("fa-eye", "fa-eye-slash");
        this.previousElementSibling.type = "text";
        login_pw = true;
    } else {

        this.firstChild.classList.replace("fa-eye-slash", "fa-eye");
        this.previousElementSibling.type = "password";
        login_pw = false;
    }
});


const guest = document.getElementById("guest"),
      guest_form = document.getElementById("guest-form");

      console.log(guest,guest_form);
      
      guest.addEventListener("click",function(){


         modal_signup.classList.add("hidden");
        modal_login.classList.add("hidden");
        guest_form.classList.replace("hidden","add");
        // guest_form.classList.remove("hidden");
      });