<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "John Doe";
        $age = 30;
        $height = 5.9;
        $is_student = false;

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Height: " . $height . " feet<br>";
        echo "Is Student: " . ($is_student ? 'Yes' : 'No') . "<br>";?>
</body>
</html>