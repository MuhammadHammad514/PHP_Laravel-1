<?php
          
          if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
              $Fname = filter_var($_REQUEST['F_name'], FILTER_SANITIZE_STRING);
              $Lname = filter_var($_REQUEST['L_name'], FILTER_SANITIZE_STRING);
              $email = filter_var($_REQUEST['Femail'], FILTER_SANITIZE_EMAIL);
              $address = filter_var($_REQUEST['Faddress'], FILTER_SANITIZE_STRING);
              $province = filter_var($_REQUEST['F_province'], FILTER_SANITIZE_NUMBER_INT);
              $city = $_REQUEST['F_city'];

              if ($Fname && $Lname && $email && $address && $province && $city) {
                // echo"<div> <h2 class='text-center'>Your Input</h2> 
                // <>First Name: $Fname <br>

                // Last Name: $Lname <br>
                // Email: $email <br>
                // Address: $address <br>
                // Province: $province <br>
                // City: $city <br>
                // </div>";
                //   echo "<h2 class='text-center'>Your Input</h2>";  
                //   echo "<>First Name: $Fname <br>";  
                //   echo "Last Name: $Lname <br>";
                //   echo "Email: $email <br>";     
                //   echo "Address: $address <br>";
                //   echo "Province: $province <br>";
                //   echo "City: $city <br>";
              } else {
                  echo "<h2 class='text-center text-danger'>Please fill all the fields</h2>";
              }
          }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JQuery demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="card" style="width: 35rem; border: 2px solid #000; margin-top: 40px;margin-left:70px; padding: 20px;">
  <div class="card-body">
    <h5 class="card-title" ><?php echo "Name: ".$Fname." ".$Lname ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary" style="color: blue;"><?php echo"email: ".$email ?></h6>
     <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo"Address: ".$address ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo"Province: ".$province ?></h6>
       <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo"City: ".$city ?></h6>

    <p class="card-text"></p>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</html>
