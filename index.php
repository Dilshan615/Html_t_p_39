<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | sign Up | sL Code Hub</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#">
                <h1>Create Account</h1>
                <input type="text" placeholder="Fist Name" id="fname">
                <input type="text" placeholder="Last Name" id="lname">
                <input type="text" placeholder="Mobile" id="mobile">
                <input type="email" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <button onclick="signUp();">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="#">
                <h1>Sign In</h1>
                <input type="email" placeholder="Email" id="email2">
                <input type="password" placeholder="Password" id="password2">
                <a href="#" class="fp">Forget password?</a>
                <button onclick="signIn();">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>