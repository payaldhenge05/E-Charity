<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $medicine = $_POST["medicine"];
    $quantity = $_POST["quantity"];

    $user = mysqli_query($conn, "SELECT * FROM receiver_tbl WHERE name = '$name' OR phone = '$phone'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Name Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO receiver_tbl VALUES('', '$name', '$phone' , '$address' , '$medicine' , '$quantity')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Donation Successful'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/view_info.php">
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Receiver</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>RECEIVER FORM</h2>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Name</label>
                <input type="text" name="name" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Phone</label>
                <input type="text" name="phone" maxlength="10" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Address</label>
                <input type="text" name="address" required value="">
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
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>

</html>