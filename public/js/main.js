// For toggling password

function togglePasswordVisibility(inputId) {
    const x = document.getElementById(inputId);
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function toggleAuthFormComponents() {
    const login = document.getElementById("sign_in_form");
    const signin = document.getElementById("sign_in_form");

    if (login.classList.contains("hidden")) {
        login.classList.remove("hidden");
        signin.classList.add("hidden");
    } else {
        login.classList.add("hidden");
        signin.classList.remove("hidden");
    }
}

$(document).ready(function () {
});
