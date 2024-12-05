<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = htmlspecialchars($_SESSION['username']); // Sanitize the username for output
} else {
    // Redirect to login page if no username is set
    header('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="format.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script>
        // Logout
        function confirmLogout() {
            if (confirm("Are you sure you want to log out?")) {
                window.location.href = "logout.php"; 
            }
        }
    </script>
    
    <style>
        body {
            
            font-family: 'Poppins', sans-serif;
            background-color: #f8f5f3;
            color: #333;
        }

		
		
        .container {
            display: flex;
            max-width: 1200px;
            margin: 30px;
            padding: 20px;
            gap: 0px;
           
        }

        .form-section {
            flex: 2;
            padding: 4px;
            box-shadow: none;
            border-radius: 10px;
            background: transparent;
            
        }

        .form-section h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-section label {
            font-weight: 600;
            font-size: 20px;
        }

        .form-section input,
        .form-section textarea {
            width: 70%;
            padding: 20px;
            border: none;
            border-radius: 16px;
            font-size: 14px;
        }

        .form-section textarea {
            height: 100px;
            resize: none;
        }

        .form-section .input-group {
            display: flex;
            
        }

       

        .form-section button {
            padding: 13px;
            width: 30%;
            border: none;
            background-color: #c9c0b3;
            border-radius: 30px;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .form-section button:hover {
            background: #bbb;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .contact-info {
            flex: 1;
           
            border-radius: 10px;
           
        }

        .contact-info h2 {
            font-size: 40px;
            margin-bottom: 10px;
            color: #894C0C;
                    }

        .contact-info p {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .contact-info .info-item {
            display: flex;
           
            gap: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .contact-info .info-item i {
            font-size: 18px;
            color: #555;
        }

        header {
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        

        header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            font-size: 14px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
        }

        header nav ul li a:hover {
            color: #777;
        }
        
        .input-email {
            width: 310px;
        }
        
        .input-phone {
            width: 300px;
        }
        
    </style>

</head>

<body>
    <div class="header-container">
        <div class="left-section">
            <div class="avatar-container">
            <div class="avatar-wrapper">
                <img src="user.png" alt="Avatar" class="avatar" style="cursor: pointer;" onclick="confirmLogout()">
                <p class="logout-text">Log Out</p>
                </div>
                <h1 class="welcome-text">Hi, <?php echo $username; ?>!</h1>
            </div>
        </div>
        <div class="right-section">
         <nav>
               <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="hometown.php">DUMAGUETE</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
         </nav>
        </div>
    </div>
    <hr>
    
    
     <div class="container">
        <div class="form-section">
       <form action="https://formspree.io/f/xzzbgrdz" method="POST">
            <form id="contactForm">
             
             
            
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <span class="error" id="nameError"></span>

                <div class="input-group">
                
                        <div class="form-group">
                        <label for="email">Email</label>
                        <div class = "input-email">
                        <input type="email" id="email" name="email" required>
                        </div>
                        <span class="error" id="emailError"></span>
                        </div>
                    
                        <div class="form-group">
                        <div class = "input-phone">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                        </div>
                        <span class="error" id="phoneError"></span>
                        </div>
                    
                </div>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <span class="error" id="messageError"></span> <br>

                <button type="submit">Submit</button>
            </form>
          
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Contact us for local advice, directions, and helpful tips to make the most of your travels around Dumaguete.</p> <br>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <span>(035) 528 5400</span>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <span>denisemurieldemperado@su.edu.ph <br>joannyaboy@su.edu.ph
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Dumaguete City, Negros Oriental, 6200</span>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        const form = document.getElementById('contactForm');
        const nameField = document.getElementById('name');
        const emailField = document.getElementById('email');
        const phoneField = document.getElementById('phone');
        const messageField = document.getElementById('message');

        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');
        const messageError = document.getElementById('messageError');

        form.addEventListener('submit', (event) => {
            let valid = true;

            // Clear previous error messages
            nameError.textContent = '';
            emailError.textContent = '';
            phoneError.textContent = '';
            messageError.textContent = '';

            // Validate Name
            if (nameField.value.trim() === '') {
                nameError.textContent = 'Name is required.';
                valid = false;
            }

            // Validate Email
            if (!/\S+@\S+\.\S+/.test(emailField.value)) {
                emailError.textContent = 'Invalid email format.';
                valid = false;
            }

            // Validate Phone
            if (!/^\d{10,15}$/.test(phoneField.value)) {
                phoneError.textContent = 'Invalid phone number.';
                valid = false;
            }

            // Validate Message
            if (messageField.value.trim() === '') {
                messageError.textContent = 'Message is required.';
                valid = false;
            }

            if (!valid) {
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    </body>
</html>