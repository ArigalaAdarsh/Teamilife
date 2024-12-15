$(function () {
    $("#datepicker").datepicker({
     
     }).datepicker('update', new Date());
});

function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("user-email").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const password = document.getElementById("user-password").value;
    const confirmPassword = document.getElementById("Confirmation-password").value;
    const nameError=document.getElementById("nameError");
    const emailError=document.getElementById("emailError");
    const phoneError=document.getElementById("phoneError");
    const genderError=document.getElementById("genderError");
    const passwordError=document.getElementById("passwordError");
    const confrimPasswordError=document.getElementById("confirmPasswordError");
    var isValid = true;

    if (name === "") {
        nameError.textContent = "Please enter your name.";
        isValid = false;
    } else {
         nameError.textContent = "";
    }

    var emailRegex= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailError.textContent = "Please enter a valid Email.";
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    var phoneNumberRegex = /^[6-9]{1}[0-9]{9}$/;
    if (!phoneNumberRegex.test(phoneNumber)) {
       phoneError.textContent = "Please enter a valid 10-digit phone number.";
        isValid = false;
    } else {
         phoneError.textContent = "";
    }

    if (!gender) {
        genderError.textContent = "Please select a gender.";
        isValid = false;
    } else {
        genderError.textContent = "";
    }
var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@#$|,._]{8,}/;
if (!passwordRegex.test(password)) {
    passwordError.textContent = "Password must contain at least one lowercase letter, one uppercase letter, and one digit.Length should be Eight.";
    isValid = false;
} else {
    passwordError.textContent = "";
}

if (confirmPassword === "") {
    confrimPasswordError.textContent = "Please confirm your password.";
    isValid = false;
} else if (password !== confirmPassword) {
    confirmPasswordError.textContent = "Passwords do not match.";
    isValid = false;
} else {
    confirmPasswordError.textContent = "";
}

    return isValid;
}
 