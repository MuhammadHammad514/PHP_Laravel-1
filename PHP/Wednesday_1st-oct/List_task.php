<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />
</head>
  <body>
   <h1 style="text-align: center;">Student Data</h1>
   <div>
<table id="mytable"  class="table table-striped">
          <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
     <th scope="col">Email</th>
      <th scope="col">Address</th>
       <th scope="col">Age</th>
        <th scope="col">Class</th>
         <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
        <?php
    $host="localhost";
    $username="root";   
    $password="";
    $dbname="MySchool"; 
    $dsn="mysql:host=$host;dbname=$dbname;charset=utf8";
    try{
        $dbconnection=new PDO($dsn,$username,$password);
        $dbconnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       // echo" <br> <p style='color:green;'>connection successful!</p>";
        $sql="SELECT * FROM students";
        $stmt=$dbconnection->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
       foreach($result as $row){
        echo "<tr>";
        echo'<th scope="row">'.$row['id']."</th>";
        echo" <td> ".$row['First_Name']."</td>";
        echo" <td>".$row['Last_Name']."</td>";   
        echo" <td> ".$row['Email']."</td>";
        echo" <td> ".$row['Address']."</td>";
        echo" <td>".$row['Age']."</td>";
        echo" <td> ".$row['Class']."</td>";
        echo  "<td>".$row['Gender']."</td>";
          echo "</tr>";
       }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
    ?>
  </tbody>
    </table>
  </div>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 <script>
  $(document).ready( function () {
    $('#mytable').DataTable({
        "pageLength": 5, }
    );
  });
</script>
</body>
</html>