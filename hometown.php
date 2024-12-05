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
    .content-container {
  height: 100vh;
  justify-content: center;
  padding: 30px;
  margin-top: 250px;
  
  
}

.content-container h1 {
  text-align: center;
  margin-bottom: 0px; /* Reduce space below */
  font-size: 2.5rem;
  font-weight: bold;
}

.touristspot {
  display: flex;
  justify-content: center;
  gap: 40px;
   width: 100%;
  margin-top: 150px;

}

.highlight {
  text-align: center;
  width: 300px;
  font-family: 'Poppins', sans-serif;
  color: #666;
}

.highlight img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 10px;
  height: 400px;
}

.highlight p {
  font-size: 20px;
  color: #333;
  margin-top: 150px;
}

.tourist-title {
  text-align: center;
  margin-top: 150px; /* Adjust spacing above */
  margin-bottom: 20px; /* Adjust spacing below */
  font-size: 10px;
  
}

.main {
	margin-right: 50px;
}

h3 {
    color: #894C0C;

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
    
    
    
     <div class="content-container">
      <div class="card">

      <img class="main" src="dumaguete-city.jpg" alt="Dumaguete City" style="width:400px" height="500px"  >

           
        <div class="about-text">
        <h3>Dumaguete City</h3>
        <h5><em>Where Warm Smiles Meet Serene Shores</em></h5>
        
        <p class= "para-text">
          Dumaguete is a city on Negros Island, in the southern Philippines, a coastal component city in the province of Negros Oriental. It serves as the provincial capital. It also serves as a gateway to many of the region's stunning natural attractions and offers a harmonious blend of heritage and modernity. The lush, waterfront Rizal Boulevard is backed by bars and restaurants. Home to several higher education institutions, most notably Silliman University, established in 1901. Its expansive campus, adorned with century-old acacia trees and American-era architecture, is a serene haven in the city. The youthful vibrancy brought by students gives Dumaguete its dynamic energy.  </p>
       
       <p class= "para-text">
     The Dumaguete Bell Tower, also known as the Campanario de Dumaguete, is one of the city's most iconic landmarks. Built in the late 18th century, it stands as a symbol of Dumaguete's rich history and religious heritage. It is not only a historical structure but also a cultural and spiritual beacon for the city, representing its past, present, and enduring identity.      </p>


      </div>
     
     
        <h1 class="tourist-title">TOURIST SPOTS</h1>
        <div class="container">
    <div class="card">

	<div class="touristspot">
	    <div class="highlight">
        <img src="rb.jpeg">
        <h4>Rizal Boulevard</h4>
	</div>
        <div class="highlight">
        <img src="silliman.jpeg">
        <h4>Silliman University</h4>
    </div>
		<div class="highlight">
        <img src="Pulangbato.jpeg">
        <h4>Pulangbato Falls</h4>
      </div>
    </div>
  </div>  
  
</body> 
</html>
    
    
    </body>
</html>