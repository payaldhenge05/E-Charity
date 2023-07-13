<?php
require 'config.php';
if (isset($_POST["login"])) {


    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM ngo_reg WHERE email = '$email' OR password = '$password'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row['password']) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

            echo
            "<script> alert('Login Successfully'); </script>";
?>
            <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/view_info.php">
<?php
        } else {

            echo
            "<script> alert('Wrong Password'); </script>";
        }
    } else {
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ngo login</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>NGO LOGIN</h2>
        </div>
        <div class="half">
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
        </div>
        <div class="action">
            <!-- <input type="submit" name="login" value="LOGIN"> -->
            <input type="submit" name="login" value="LOGIN">
        </div>
    </form>
</body>

</html>