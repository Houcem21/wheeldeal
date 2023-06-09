<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <script src="js/search.js" > </script>
  <title>Car Rental</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link rel="stylesheet" type="text/css" href="styles/car-list.css">
</head>
<body>
  <header>
    <nav>
      <a href="index.php">Home</a>
      <a href="signup.php">Sign up</a>
              <?php if(!isset($_SESSION['username'])) {echo '<a href="login.php">Login</a>';}
        else {
          echo '<a href="logout.php">Logout</a>';
        } ?>    
      </nav>
    <h1>Car Rental</h1>
    <form action="/search" method="post">
      <input id="searchInput" oninput="searchElement()" placeholder="Search...">
    </form>
  </header>
  <main>

      <h2 >Our Cars</h2>
      <tbody>
        <div id="car-list">
      <div class="car-container searchable" v-for="car in cars" >
        <img id="car-image" src="https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="car image" >
        <div class="car-details">
          <h2>Car Model: <span class="car-model"> BMW</span></h2>
          <p>Availability: <span class="car-availability">Available</span></p>
          <p>Year: <span class="car-year"> Model 2021 </span></p>
          <p>Price: <span class="car-price">100$ a day</span></p>
          <p>Fuel Type: <span class="car-fuel-type">Gasoline</span></p>
          <p>Transmission: <span class="car-transmission">Auto transmission</span></p><br>
          <a class="main-button" href="reservation.html">Reserve</a>
          </div>
    </div>
    <br>
    <div class="car-container searchable" v-for="car in cars">
      <img id="car-image" src="https://images.pexels.com/photos/3729464/pexels-photo-3729464.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="car image">
      <div class="car-details">
        <h2>Car Model: <span class="car-model">Mercedes</span></h2>
        <p>Availability: <span class="car-availability">Not available</span></p>
        <p>Year: <span class="car-year">Model 2021</span></p>
        <p>Price: <span class="car-price">120$ a day</span></p>
        <p>Fuel Type: <span class="car-fuel-type">Gasoline</span></p>
        <p>Transmission: <span class="car-transmission">Auto transmission</span></p><br>
        <a class="main-button red" href="reservation.html">Reserve</a>
    </div>
    </div>
    <br>
    <div class="car-container searchable" v-for="car in cars">
      <img id="car-image" src="https://images.pexels.com/photos/1035108/pexels-photo-1035108.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="car image">
      <div class="car-details">
        <h2>Car Model: <span class="car-model">Audi</span></h2>
        <p>Availability: <span class="car-availability">Available</span></p>
        <p>Year: <span class="car-year">Model 2020</span></p>
        <p>Price: <span class="car-price">110 $ a day</span></p>
        <p>Fuel Type: <span class="car-fuel-type">Gasoline</span></p>
        <p>Transmission: <span class="car-transmission">Auto transmission</span></p><br>
        <a class="main-button"  href="reservation.html">Reserve</a>
      </div>
      </div>
      <div class="car-container searchable" v-for="car in cars">
        <img id="car-image" src="https://images.pexels.com/photos/6894428/pexels-photo-6894428.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="car image">
        <div class="car-details">
          <h2>Car Model: <span class="car-model">Toyota</span></h2>
          <p>Availability: <span class="car-availability">Available</span></p>
          <p>Year: <span class="car-year">Model 2021</span></p>
          <p>Price: <span class="car-price">90$ a day</span></p>
          <p>Fuel Type: <span class="car-fuel-type">Gasoline</span></p>
          <p>Transmission: <span class="car-transmission">Auto transmission</span></p><br>
          <a class="main-button"  href="reservation.html">Reserve</a>
      </div>
      </div>
    </div>
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>