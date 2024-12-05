<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('background.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0 40px;
        }

        .container {
            width: 500px;
            height: 700px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 50px;
        }

        .form-section {
            display: flex;
            flex-direction: column;
        }

        .form-section h1 {
            text-align: center;
            margin: 0;
            font-size: 40px;
            font-weight: 510;
        }

        .form-section p {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-section label {
            font-size: 20px;
            font-weight: 600;
        }

        .form-section input {
            border: none;
            border-bottom: 2px solid #ddd;
            outline: none;
            padding: 8px 0;
            font-size: 16px;
            color: #333;
        }

        .form-section input:focus {
            border-bottom: 2px solid black;
        }

        .password-container {
            position: relative;
        }

        .password-container input {
            width: 100%;
        }

        .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }

        .form-section button {
            width: 80%;
            padding: 15px;
            border: none;
            border-radius: 30px;
            background-color: black;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 50px;
                    }

        .form-section button:hover {
            background-color: #333;
        }

        .logo {
            max-width: 100px;
            display: block;
            margin: 0 auto;
        }

        .image-section {
            flex: 1;
            background: url('your-image-path.jpg') no-repeat center center / cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <img src="logo.png" alt="Logo" class="logo">
            <h1>Welcome!</h1>
            <p>Please enter your details</p>
             <br><br>  <br>
            <form method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" required>
                    <span class="password-toggle-icon" id="toggle-password">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="image-section"></div>
    </div>

    <script>
        document.getElementById('toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    </script>
</body>
</html>
