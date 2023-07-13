<?php
require 'config.php';
if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $user = mysqli_query($conn, "SELECT * FROM ngo_reg WHERE name = '$name' OR email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Email Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO ngo_reg VALUES('', '$name', '$email', '$password' , '$phone' , '$address')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Registration Successful'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/ngo_log.php">
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
            <h2>NGO REGISTER</h2>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Name</label>
                <input type="text" name="name" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Email</label>
                <input type="text" name="email" required value="">
            </div>
            <div class="item">
                <label for="">Phone</label>
                <input type="text" name="phone" maxlength="10" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Password</label>
                <input type="password" name="password" required value="">
            </div>
            <div class="item">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmpassword" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Address</label>
                <input type="text" name="address" required value="">
            </div>
        </div>
        <div class="action">
            <input type="submit" name="register" value="REGISTER">
        </div>
    </form>
</body>

</html>