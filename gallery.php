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
   <title>Dumaguete City</title>
   <link rel="stylesheet" href="format.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   <script>
        // Logout
        function confirmLogout() {
            if (confirm("Are you sure you want to log out?")) {
                window.location.href = "logout.php"; // Redirect to logout page
            }
        }
    </script>
    
    <style>
    
    

    .gallery {
        display: grid;
        grid-template-columns: repeat(5, 1fr); /* 5 columns */
        grid-template-rows: repeat(4, 1fr); /* 4 rows */
        gap: 10px;
        justify-items: center;
        align-items: center;
        position: relative;
        width: 80%;
        margin: 0 auto;
        margin-top: 50px;
    }

    .gallery img {
        width: 150px;  /* Set a uniform width for all images */
        height: 150px; /* Set a uniform height for all images */
        object-fit: cover; /* Ensure images fit into the box without distortion */
        transition: 0.5s;
        border-radius: 8px;
        transform-origin: center;
    }

    .gallery img:hover {
        filter: grayscale(100%);
        transform: scale(1.1) rotate(10deg);
    }

    /* Creating the triangle shape by adjusting grid item placement */
    .gallery a:nth-child(1) { grid-column: 3; grid-row: 1; }
    .gallery a:nth-child(2) { grid-column: 2; grid-row: 2; }
    .gallery a:nth-child(3) { grid-column: 4; grid-row: 2; }
    .gallery a:nth-child(4) { grid-column: 1; grid-row: 3; }
    .gallery a:nth-child(5) { grid-column: 3; grid-row: 3; }
    .gallery a:nth-child(6) { grid-column: 5; grid-row: 3; }
    .gallery a:nth-child(7) { grid-column: 2; grid-row: 4; }
    .gallery a:nth-child(8) { grid-column: 4; grid-row: 4; }

    @keyframes moveEffect {
        0% {
            transform: scale(1) rotate(0deg);
        }
        50% {
            transform: scale(1.05) rotate(5deg);
        }
        100% {
            transform: scale(1) rotate(0deg);
        }
    }

    .gallery img {
        animation: moveEffect 4s ease-in-out infinite;
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

    <div class="gallery">
        <a href="teirra.jpeg"><img src="teirra.jpeg" alt="Teirra"></a>
        <a href="dumaguete.jpg"><img src="dumaguete.jpg" alt="Dumaguete"></a>
        <a href="Pulangbato-Falls.jpeg"><img src="Pulangbato-Falls.jpeg" alt="Pulangbato Falls"></a>
        <a href="san rival.jpg"><img src="san rival.jpg" alt="San Rival"></a>
        <a href="bell tower.jpg"><img src="bell tower.jpg" alt="Bell Tower"></a>
        <a href="rb.jpeg"><img src="rb.jpeg" alt="Rizal Boulevard"></a>
        <a href="macias oval.jpeg"><img src="macias oval.jpeg" alt="Macias Oval"></a>
        <a href="capitol.jpg"><img src="capitol.jpg" alt="Capitol"></a>
        <!-- Add more images as needed -->
    </div>

</body>
</html>
