<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $med_name = $_POST["med_name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $expiry_dt = $_POST["expiry_dt"];

    $user = mysqli_query($conn, "SELECT * FROM stock_mgmnt WHERE med_name = '$med_name' OR description = '$description'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Medicine Name Has Already Taken'); </script>
    ";
    } else {
        $query = "INSERT INTO stock_mgmnt VALUES('', '$med_name', '$description' , '$quantity' , '$expiry_dt')";
        mysqli_query($conn, $query);

        echo
        "
    <script> alert('Successful'); </script>
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
    <title>Stock</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>Medicine Stock</h2>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Medicine Name</label>
                <input type="text" name="med_name" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Description</label>
                <input type="text" name="description" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Quantity</label>
                <input type="text" name="quantity" required value="">
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Expiry Date</label>
                <input type="date" name="expiry_dt" required value="">
            </div>
        </div>
        <div class="action">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>

</html>