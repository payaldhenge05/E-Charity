<?php
require 'config.php';
if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];

    $user = mysqli_query($conn, "SELECT * FROM donar_reg WHERE name = '$name' OR email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Email Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO donar_reg VALUES('', '$name', '$email', '$phone' , '$address', '$city')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Registration Successful'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/donation_frm.php">
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>USER REGISTER</h2>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Name</label>
                <input type="text" name="name" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Email</label>
                <input type="text" name="email" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Phone</label>
                <input type="tel" name="phone" maxlength="10" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Address</label>
                <input type="text" name="address" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">City</label>
                <input type="text" name="city" required value="">
            </div>
        </div>
        <div class="action">
            <input type="submit" name="register" value="REGISTER">
        </div>
    </form>
</body>

</html>