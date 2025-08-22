<?php

include_once('config.php');

if(isset($_POST['send']))
{
    include_once('config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];

    $result = mysqli_query($connection, "INSERT INTO employes (name, email) VALUES ('$name', '$email')");

    header('Location: config.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Imaginarium</title>
</head>
<body>
    <h4>Job Form Application</h4>
    
    <input type="text" name="">
    <label for="">Name</label>

    <input type="text" name="">
    <label for="">E-mail</label>



</body>
</html>