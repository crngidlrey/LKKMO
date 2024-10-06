<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

body {
  background-image: url('../img/background_content.jpg'); 
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center; /* Memusatkan secara horizontal */
        align-items: center; /* Memusatkan secara vertikal */
        height: 100vh; /* Tinggi seluruh viewport */
        width: 100%; 
        position: relative; /* Untuk pseudo-elemen overlay */
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.btn-login {
    width: 100%;
    padding: 10px;
    background-color: #a27cf7;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-login:hover {
    background-color: #7f5df5;
}

.social-login {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.btn-social {
    width: 40px;
    height: 40px;
    margin: 0 10px;
    border: none;
    border-radius: 50%;
    background-color: #ccc;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

a {
    display: block;
    margin-top: 20px;
    color: #a27cf7;
    text-decoration: none;
}

</style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Sign In</h2>
            <form action="#">
                <div class="input-group">
                    <input type="text" placeholder="Username or email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-login">Sign In</button>
            </form>
            <p>Or login with</p>
            <div class="social-login">
                <button class="btn-social">F</button>
                <button class="btn-social">G</button>
            </div>
            <a href="#">Sign Up</a>
        </div>
    </div>
</body>
</html>
