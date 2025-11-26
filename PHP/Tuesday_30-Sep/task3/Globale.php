<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div id="output" class="col-5 border p-3">
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
              $Fname = filter_var($_REQUEST['F_name'], FILTER_SANITIZE_STRING);
              $Lname = filter_var($_REQUEST['L_name'], FILTER_SANITIZE_STRING);
              $email = filter_var($_REQUEST['Femail'], FILTER_SANITIZE_EMAIL);
              $address = filter_var($_REQUEST['Faddress'], FILTER_SANITIZE_STRING);
              $province = filter_var($_REQUEST['F_province'], FILTER_SANITIZE_NUMBER_INT);
              $city = $_REQUEST['F_city'];

              if ($Fname && $Lname && $email && $address && $province && $city) {
                  echo "<h2 class='text-center'>Your Input</h2>";  
                  echo "First Name: $Fname <br>";  
                  echo "Last Name: $Lname <br>";
                  echo "Email: $email <br>";     
                  echo "Address: $address <br>";
                  echo "Province: $province <br>";
                  echo "City: $city <br>";
              } else {
                  echo "<h2 class='text-center text-danger'>Please fill all the fields</h2>";
              }
          }
          ?>
        </div>

        <div class="col-7" style="background-color: lightgrey; padding: 20px;">
          <h1 class="text-center">User form</h1>
          <form method="Post" action="information.php" class="row g-3 border p-3 mt-3">

            <div class="col-md-6">
              <label for="F_name" class="form-label">First Name</label>
              <input type="text" name="F_name" class="form-control" id="F_name">
            </div>

            <div class="col-md-6">
              <label for="L_name" class="form-label">Last Name</label>
              <input type="text" name="L_name" class="form-control" id="L_name">
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="Femail" class="form-control" id="email" placeholder="email">
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" name="Faddress" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
            </div>

            <div class="col-md-6">
              <label for="inputCity" class="form-label">Zip</label>
              <input type="number" name="F_province" class="form-control" id="inputCity">
            </div>

            <div class="col-md-6">
              <label for="inputState" class="form-label">City</label>
              <select id="inputState" name="F_city" class="form-select">
                <option selected disabled>Choose...</option>
                <option>Lahore</option>
                <option>Karachi</option>
                <option>Islamabad</option>
                <option>Quetta</option>
                <option>Peshawar</option>
              </select>
            </div>

            <div class="col-12">
              <button id="btn_submit" type="submit" class="btn btn-primary">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
