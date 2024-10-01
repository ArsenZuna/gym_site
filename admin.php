<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/22fa2b6e93.js" crossorigin="anonymous"></script>
  <title>Palestra Ime - Admin</title>
</head>
<body>

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
          <a id="header-button" type="button" class="btn btn-outline-danger rounded-pill" href="index.html">Logout</a>
        </div>
      </nav>
    </header>

    <div class="container d-flex justify-content-center">
      <p id="important-header">Klientet e Rregjistruar ne Palester</p>
    </div>
  </div>

<?php
    $conn = mysqli_connect("localhost", "root", "", "palestra_ime");
      
    // Kontrollojme lidhjen
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }

    // Merr te dhenat e login
    $username = $_POST['username'];  
    $password = $_POST['password'];   
      
        $sql = "select * from admin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          

        // Ndertojme tabelen me te dhenat qe jane ruajtur tek 'subscribers'
        if($count == 1){  
            $sql = "SELECT * FROM subscribers";
            $result = $conn->query($sql); ?>
            <div id="table">
                <table class="table table-bordered">
                  <thead>
                    <tr id="table-row">
                      <th scope="col">Emri</th>
                      <th scope="col">Email</th>
                      <th scope="col">Numri Telefonit</th>
                      <th scope="col">Plani Trajnimit</th>
                      <th scope="col">Mesazhi</th>
                      <th scope="col">Data Fillimit</th>
                    </tr>
                  </thead>
                  <?php
                    if ($result->num_rows > 0) {
                      // Bejme fetch te dhenat dhe i shfaqim tek nga nje rresht secilin
                      while($row = $result->fetch_assoc()) { ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row["Emri"] ?></td>
                            <td><?php echo $row["Email"] ?></td>
                            <td><?php echo $row["Numri_Telefonit"] ?></td>
                            <td><?php echo $row["Training_Plan"] ?></td>
                            <td><?php echo $row["Mesazhi"] ?></td>
                            <td><?php echo $row["Data_Fillimit"] ?></td>
                        </tr>
                        <?php
                            } ?>
                    </tbody>
                </table>
            </div> 
            <?php
            } 
            else {
              echo "0 results";
            }  
        }  
        else{ ?>  
            <div>
                <p id="unsuccessful">Aksesimi ishte i pasuksesshem.</p>
                <span id="unsuccessful-text">Kujdes! Provoni perseri me te dhenat e sakta.</span>
            </div>;  
        <?php }     
?>  

</body>
</html>