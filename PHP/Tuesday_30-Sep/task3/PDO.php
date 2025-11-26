<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
</head>
<body>
  <h2>Register Student</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Student ID:</label>
    <input type="number" name="id" required><br><br>

    <label>Student Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Student Age:</label>
    <input type="number" name="age" required><br><br>

    <label>Student Class:</label>
    <input type="text" name="class" required><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
$host = "localhost";
$databaseName = "school";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$databaseName;charset=utf8";


try {
    $dbconnection = new PDO($dsn, $username, $password);
    $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

        $std_id    = (int)$_POST['id'];
        $std_name  = htmlspecialchars($_POST['name']);
        $std_age   = (int)$_POST['age'];
        $std_class = htmlspecialchars($_POST['class']);
        $std_reg   = rand(1000, 9999);
        $preStmt = $dbconnection->prepare("
            INSERT INTO students (student_id, student_Name, student_Age, student_class, student_reg) 
            VALUES (:student_id, :student_Name, :student_Age, :student_class, :student_reg)
        ");

       $preStmt->bindParam(':student_id', $std_id, PDO::PARAM_INT);
        $preStmt->bindParam(':student_Name', $std_name, PDO::PARAM_STR);
        $preStmt->bindParam(':student_Age', $std_age, PDO::PARAM_INT);
        $preStmt->bindParam(':student_class', $std_class, PDO::PARAM_STR);
        $preStmt->bindParam(':student_reg', $std_reg, PDO::PARAM_INT);

        if ($preStmt->execute()) {
            echo "<p style='color:green;'>Student record inserted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error inserting student record.</p>";
        }
    }
} catch (PDOException $error) {
    echo "Database Error: " . $error->getMessage();
}
?>
