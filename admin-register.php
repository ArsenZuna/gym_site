<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/22fa2b6e93.js" crossorigin="anonymous"></script>
  <title>Regjistrimi i Klientit</title>
</head>

<body>
  <center>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "palestra_ime");
      
      // Kontrollojme lidhjen
      if($conn === false){
        die("ERROR: Could not connect. " 
        . mysqli_connect_error());
      }
      
      // Merr te dhenat e kerkuara nga form-i qe ndodhet ne front
      $username =  $_REQUEST['username'];
      $password = $_REQUEST['password'];
      $email =  $_REQUEST['email'];
      
      // Kryen vendosjen e te dhenave ne 'admin'
      $sql = "INSERT INTO admin (username, password, email)
      VALUES ('$username', '$password','$email')";

      //Nese ka lidhje dhe te dhenat e vendosura jane te sakta, shfaqet faqja e regjistrimit me sukses
      if(mysqli_query($conn, $sql)){?>
      <div id="important-div">
        <header id="bow" class="d-flex flex-wrap align-items-center justify-content-md-between py-2 mb-3 pb-4 px-4">
          <div class="col-2 d-flex justify-content-center">
            <h4 id="important-text" class="fw-bold">Palestra Ime</h4>
          </div>

          <nav class="col-8 navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav"> 
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Service</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Help</a>
                </li>
              </ul>
            </div>

            <div class="col-2">
              <button id="header-button" type="button" class="btn btn-outline-danger rounded-pill">Register</button>
            </div>
          </nav>
        </header>

        <div class="container d-flex justify-content-center">
          <p id="important-header">Regjistrimi i Administratorit</p>
        </div>
      </div>

      <div>
        <p id="successful">Regjistrimi i suksesshem!</p>
        <span id="successful-text">Ju do te kontaktoheni nga stafi yne per detaje te metejshme!</span>
      </div>


      <!-- FOOTER -->
      <footer class="p-5">
        <div class="row row-cols-5 p-5">
          <div class="col">
            <h3 class="text-white">Palestra Ime</h3>
            <ul class="nav flex-row">
              <li class="nav-item me-2"><a href="#"><img src="media/facebook.png" id="footer-icons"></a></li>
              <li class="nav-item me-2"><a href="#"><img src="media/twitter.png" id="footer-icons"></a></li>
              <li class="nav-item me-2"><a href="#"><img src="media/cube.png" id="footer-icons"></a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Company</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >About</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Cases</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Blog</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Contact</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Features</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Corporate</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Data Privacy</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Employment</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Intellectual</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">About Us</a></li>
              <li class="nav-item mb-2"><p class="nav-link p-0" id="footer-li">Who are we</p></li>
              <li class="nav-item"><p class="nav-link p-0 lh-lg" id="footer-li">Privacy <br> Terms & <br> FA</p></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Contact</a></li>
              <li class="nav-item mb-2"><p class="nav-link p-0" id="footer-li">(684) 555-0102</p></li>
              <li class="nav-item"><p class="nav-link p-0" id="footer-li">palestraime@email.com</p></li>
              <li class="nav-item"><p class="nav-link p-0" id="footer-li">4517 Washington <br> Manchester</p></li>
            </ul>
          </div>
        </div>
        <center class="pt-5">
          <p class="text-white fw-bold">Copyright 2021 - All right</p>
        </center>
      </footer>
      <?php  
        // Nese s'ka lidhje ose nuk ka te dhena te pershtatshme te vendosura, shfaqet faqja me regjistrim te pasuksesshem.
      } else{ ?>
      <div id="important-div">
        
        <header id="bow" class="d-flex flex-wrap align-items-center justify-content-md-between py-2 mb-3 pb-4 px-4">
          <div class="col-2 d-flex justify-content-center">
            <h4 id="important-text" class="fw-bold">Palestra Ime</h4>
          </div>

          <nav class="col-8 navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav"> 
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Service</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a id="nav-text" class="nav-link px-5 link-dark h6" href="#">Help</a>
                </li>
              </ul>
            </div>

            <div class="col-2">
              <button id="header-button" type="button" class="btn btn-outline-danger rounded-pill">Register</button>
            </div>
          </nav>
        </header>

        <div class="container d-flex justify-content-center">
          <p id="important-header">Regjistrimi i Administratorit</p>
        </div>
      </div>

      <div>
        <p id="unsuccessful">Regjistrimi ishte i pasuksesshem.</p>
        <span id="unsuccessful-text">Kujdes! Provoni perseri.</span>
      </div>


      <!-- FOOTER -->
      <footer class="p-5">
        <div class="row row-cols-5 p-5">
          <div class="col">
            <h3 class="text-white">Palestra Ime</h3>
            <ul class="nav flex-row">
              <li class="nav-item me-2"><a href="#"><img src="media/facebook.png" id="footer-icons"></a></li>
              <li class="nav-item me-2"><a href="#"><img src="media/twitter.png" id="footer-icons"></a></li>
              <li class="nav-item me-2"><a href="#"><img src="media/cube.png" id="footer-icons"></a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Company</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >About</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Cases</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Blog</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li" >Contact</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Features</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Corporate</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Data Privacy</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Employment</a></li>
              <li class="nav-item mb-3"><a href="#" class="nav-link p-0" id="footer-li">Intellectual</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">About Us</a></li>
              <li class="nav-item mb-2"><p class="nav-link p-0" id="footer-li">Who are we</p></li>
              <li class="nav-item"><p class="nav-link p-0 lh-lg" id="footer-li">Privacy <br> Terms & <br> FA</p></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item mb-3"><a id="footer-header" href="#" class="nav-link p-0 h3">Contact</a></li>
              <li class="nav-item mb-2"><p class="nav-link p-0" id="footer-li">(684) 555-0102</p></li>
              <li class="nav-item"><p class="nav-link p-0" id="footer-li">palestraime@email.com</p></li>
              <li class="nav-item"><p class="nav-link p-0" id="footer-li">4517 Washington <br> Manchester</p></li>
            </ul>
          </div>
        </div>
        <center class="pt-5">
          <p class="text-white fw-bold">Copyright 2021 - All right</p>
        </center>
      </footer>
      
      <?php  }
        // Close connection
        mysqli_close($conn);
      ?>
    </center>
  </body>
  
  </html>