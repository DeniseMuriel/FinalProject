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
    
    <div class="content-container">
    <img src="photo1.png" alt="Main Image" class="main-image">
    </div>
    
    <div class="content-container" style="font-size: 17px; font-family: 'Poppins', sans-serif; padding: 30px 20px;">
        <div class="paragraph-container">
            <p class="justified">
                Dumaguete, the "City of Gentle People," is the ultimate chill spot with gorgeous views and charming local shops. 
                Just a quick trip away, you can dive with sea turtles at Apo Island or chase waterfalls in the lush countryside. 
                Whether you're here for the coffee, the culture, or the adventure, Dumaguete will give you a wide selection of unique places to visit in such a small town.
            </p>
            <button id="knowMoreButton" type="submit" class="update-btn">KNOW MORE</button>
              <div id="additionalInfoContainer">
             <div id="additionalInfo">
        <p>
        Our Tip! <br><br>
        
        Start your adventure at the Rizal Boulevard, where you can enjoy a relaxing walk by the sea and take in the beautiful sunset views. Check out the Bell Tower, a cool historic spot that’ll give you a taste of Dumaguete's past. For stunning views and a peaceful vibe, head up to Tierra Alta - perfect for a quick getaway from the city!</p>
        
    </div>
     </div>

    
     <script>
        // Get references to the button and the additional content
        const button = document.getElementById('knowMoreButton');
        const additionalInfo = document.getElementById('additionalInfo');

        // Add click event listener to the button
        button.addEventListener('click', function() {
            // Toggle visibility of additional content
            if (additionalInfoContainer.style.display === 'none' || additionalInfoContainer.style.display === '') {
                additionalInfoContainer.style.display = 'block';
                setTimeout(() => {
                    additionalInfoContainer.style.transform = 'translateY(0)';
                }, 10); // Small delay for smooth transition
                button.textContent = 'Know Less'; // Change button text
            } else {
                additionalInfoContainer.style.transform = 'translateY(100%)'; // Slide the container down
                setTimeout(() => {
                    additionalInfoContainer.style.display = 'none'; // Hide it after the animation
                }, 300); // Match the transition duration
                button.textContent = 'Know More'; // Change button text back
            }
        });
    </script>
        </div>

        <!-- Small Images -->
        <div class="small-images">
            <img src="smallimg1.jpg" alt="Small Image 1">
            <img src="smallimg2.jpg" alt="Small Image 2">
            <img src="smallimg3.jpg" alt="Small Image 3">
        </div>
    </div>
</body>
</html>
