<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php_MiniProject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div id="output">  </div>
<div class="col-5 background-color: lightgrey;" style="height: auto; padding: 20px;">
           <h1 style="font-size: xx-large; text-align: center;">Student form</h1>
            <form method="POST" action="<?php echo$_SERVER['PHP_SELF'] ?>" class="row g-3" id="Input" style="height: auto;margin: top 30px ; border: 2px solid black; padding: 20px; margin-top: 20px; ">
                  
                <div class="col-md-6">
                    <label for="F_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="F_name">
                </div>
                <div class="col-md-6">
                    <label for="L_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="L_name">
                </div>
                <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="email" name="femail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
                <div class="col-12">
                    <label for="faddress" class="form-label">Address </label>
                    <input type="text" class="form-control" name="faddress" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="fage" class="form-label">Age</label>
                    <input type="text" class="form-control" name="fage">
                </div>
                <div class="col-md-4">
                    <label for="fgender" class="form-label">Gender</label>
                    <select name="fgender" class="form-select" >
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="fclass" class="form-label">Class</label>
                    <input type="text" class="form-control" name="fclass">
                </div>
                <div class="col-12">
                    <button id="btn_submit" type="submit" class="btn btn-primary">submit</button>
                </div>

            </form>
        </div>
        

        <?php
        $host="localhost";
        $username="root";
        $password="";
        $dbname="MySchool";
        // $dsn="mysql: host= $host; dbname: $dbname";
        $dsn = "mysql:host=$host;dbname=$dbname";

        

        try{
          $dbconnection= new PDO($dsn,$username,$password);
          $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)){
            $F_name=$_POST['F_name'];
            $F_name=filter_var($F_name,FILTER_SANITIZE_STRING);
            $L_name=$_POST['L_name'];
            $L_name=filter_var($L_name,FILTER_SANITIZE_STRING);
            $femail=$_POST['femail'];
              $femail=filter_var($femail,FILTER_SANITIZE_EMAIL);
            $faddress=$_POST['faddress'];
              $faddress=filter_var($faddress,FILTER_SANITIZE_STRING);
            $fage=(int)$_POST['fage'];
              $fage=filter_var($fage,FILTER_SANITIZE_STRING);
            $fgender=$_POST['fgender'];
              $fgender=filter_var($fgender,FILTER_SANITIZE_STRING);
            $fclass=$_POST['fclass'];
              $fclass=filter_var($fclass,FILTER_SANITIZE_STRING);
              // $sql="CREATE TABLE students(
              //   id INT(11) AUTO_INCREMENT PRIMARY KEY,
              //   First_Name VARCHAR(50) NOT NULL,
              //   Last_Name VARCHAR(50) NOT NULL,
              //   Email VARCHAR(100) NOT NULL,
              //   Address VARCHAR(200) ,
              //   Age INT(11) NOT NULL,
              //   Class VARCHAR(20) NOT NULL,
              //   Gender VARCHAR (20) NOT NULL)";
              //   $dbconnection->exec($sql);
              $prepStmt=$dbconnection->prepare("INSERT INTO 
              students(First_Name,Last_Name,Email,Address,Age,Class,Gender )
              VALUES (:First_Name,:Last_Name,:Email,:Address,:Age,:Class,:Gender) ");
      
              
              $prepStmt->bindParam(':First_Name',$F_name,PDO::PARAM_STR);
              $prepStmt->bindParam(':Last_Name',$L_name,PDO::PARAM_STR);  
              $prepStmt->bindParam(':Email',$femail,PDO::PARAM_STR);
              $prepStmt->bindParam(':Address',$faddress,PDO::PARAM_STR);    
              $prepStmt->bindParam(':Age',$fage,PDO::PARAM_INT);
              $prepStmt->bindParam(':Class',$fclass,PDO::PARAM_STR);
              $prepStmt->bindParam(':Gender',$fgender,PDO::PARAM_STR);
              if ($prepStmt->execute()) {
               
                 $_SESSION['flash_message'] = 'Profile updated successfully!';
                $_SESSION['flash_message_type'] = 'success';
                  echo '
                  Profile updated successfully!';
                header("Location:List_task.php" );
                        exit; }
             
          }
        }catch(PDOException $error){
          echo $error->getMessage();

        }
        
        
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>