<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login UI</title>
    <link rel="stylesheet" href="login.css">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <h2>Login</h2>
            <form>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
                <p class="signup-text">Don't have an account? <a href="#">Sign Up</a></p>
            </form>
        </div>
        <div class="welcome-box">
            <h1>WELCOME<br>BACK!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
    </div>
</body>
</html>