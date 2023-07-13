<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $user = mysqli_query($conn, "SELECT * FROM signup WHERE name = '$name' OR email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Email Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO signup VALUES('', '$name', '$email', '$password')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Sign Up Successfully'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/login.php">
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>SIGN UP</h2>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Name</label>
                <input type="text" name="name" required value="">
            </div>
            <div class="item">
                <label for="">Email</label>
                <input type="text" name="email" required value="">
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
        <div class="action">
            <input type="submit" name="submit" value="SIGN UP">
        </div>
    </form>
</body>

</html>