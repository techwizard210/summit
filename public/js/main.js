// For toggling password
function togglePasswordVisibility(inputId) {
    const x = document.getElementById(inputId);
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
