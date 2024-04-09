<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Purus Chore Manager</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h4 style="margin-bottom:-20px">Register Account</h4>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span style="margin-top: -10px;">or use your socials</span>
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <label style="margin-right:190px;" for="gender">Gender:</label>
                 <div class="gender-options">
                      <input type="radio" name="gender" id="male" value="male">Male
                      <input type="radio" name="gender" id="female" value="female">Female
                 </div>

                <select name="family_role" id="family_role" style="background-color: #eee;border:none;margin: 8px 0;padding:10px 15px;font-size: 13px;border-radius: 8px;width: 100%;outline: none;"required>
                    <option value="" selected disabled>Select Family role</option>
                    <option value="1">Father</option>
                    <option value="2">Mother</option>
                    <option value="3">Son</option>
                    <option value="4">Daughter</option>
                </select>
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" placeholder="Enter your date of birth" required>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <input type="password" placeholder="Password">
                <input type="password" placeholder="re-type password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your socials</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button id="loginBut">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to continue</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello! New to Purus Chore Manager?</h1>
                    <p>Register with your personal details to begin!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>