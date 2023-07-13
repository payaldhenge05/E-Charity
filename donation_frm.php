<?php
require 'config.php';
if (isset($_POST["donation"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $medicine = $_POST["medicine"];
    $quantity = $_POST["quantity"];

    $user = mysqli_query($conn, "SELECT * FROM donation WHERE name = '$name' OR email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Email Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO donation VALUES('', '$name', '$email', '$phone' , '$city' , '$medicine' , '$quantity')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Donation Successful'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/index.html">
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Donation</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>DONATION FORM</h2>
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
                <label for="">Phone</label>
                <input type="text" name="phone" maxlength="10" required value="">
            </div>
            <div class="item">
                <label for="">City</label>
                <input type="text" name="city" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Medicine Name</label>
                <input type="text" name="medicine" required value="">
            </div>
            <div class="item">
                <label for="">Quantity</label>
                <input type="text" name="quantity" required value="">
            </div>
        </div>
        <div class="action">
            <input type="submit" name="donation" value="Donation">
        </div>
    </form>
</body>

</html>