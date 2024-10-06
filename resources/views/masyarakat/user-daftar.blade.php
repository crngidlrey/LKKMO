<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sign Up Page</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

.bg {
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
    height: 465px;
    width: 400px;
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
    background-color: #2C5A9D;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-login:hover {
    background-color: #1d2951;
}

a {
    color: #2C5A9D;
    text-decoration: none;
}

</style>
</head>
<body>
  <div class="bg">
    <div class="login-container">
      <div class="login-box">
        <h2>Daftar</h2>
        <form action="#">
          <div class="input-group">
            <input type="text" placeholder="Nama Lengkap" required>
          </div>
          <div class="input-group">
            <input type="email" placeholder="Email" required>
          </div>
          <div class="input-group">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="input-group">
            <input type="password" placeholder="Konfirmasi Password" required>
          </div>
          <button type="submit" class="btn-login">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="/user-login">Masuk</a> </p>
      </div>
    </div>
  </div>
</body>
</html>