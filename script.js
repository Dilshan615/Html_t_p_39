const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
function signUp() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var mobile = document.getElementById("mobile");
    var form = new FormData();
    form.append("f", fname.value);
    form.append("l", lname.value);
    form.append("e", email.value);
    form.append("p", password.value);
    form.append("m", mobile.value);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "success") {
                alert("Registration SuccessFull");
            } else {
                alert("Registration UnSuccessFull");
            }
        }
    }
    request.open("POST", "signupProcess.php", true);
    request.send(form);
}

function signIn() {
    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var form = new FormData();
    form.append("e", email.value);
    form.append("p", password.value);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "success") {
                window.location = "home.php";
            } else {
                alert("Registration UnSuccessFull");
            }
        }
    }
    request.open("POST", "signInProcess.php", true);
    request.send(form);
}