 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Intranet - República Argentina</title>
    <link rel="stylesheet" href="css/login.css"> </head>
<body>
    <div class="login-container">
        <div class="login-info">
            <div class="overlay-text">
                <h1>Colaboración para optimizar el potencial local...</h1>
            </div>
        </div>

        <div class="login-form-section">
            <form action="auth/validar.php" method="POST" class="form-content">
                <h2>Welcome Back</h2>
                
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="pass" name="password" placeholder="Enter your password" required>
                        <span class="toggle-password">👁️</span>
                    </div>
                </div>

                <div class="form-options">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>

                <button type="submit" class="btn-signin">Sign In</button>
                
                <div class="separator"><span>Or</span></div>

                <button type="button" class="btn-google">
                    <img src="img/google-icon.png" alt=""> Sign in with Google
                </button>
            </form>
        </div>
    </div>
</body>
</html>