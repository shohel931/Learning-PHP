<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $age = htmlspecialchars($_POST['age']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
</head>
<body>



<div class="form_area">
    <form action="welcome.php" method="POST">
        Name: <br> </Name:br> <input type="text" name="name" id="" placeholder="Name" required><br><br>
        Father's Name:<br> <input type="text" name="fname" id="" placeholder="Father's Name" required><br><br>
        Mother's Name:<br> <input type="text" name="mname" id="" placeholder="Mother's Name" required><br><br>
        Date of birth:<br> <input type="number" name="age" id="" placeholder="31/01/2000" required> <br><br>
        Phone:<br> <input type="number" name="phone" id="" placeholder="Phone" required> <br><br>
        Email(optinal) :<br> <input type="email" name="email" id="" placeholder="Email" > <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<style>
    .form_area {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
</style>


    
</body>
</html>