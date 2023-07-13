<?php
include("database.php");
error_reporting(0);

$id = $_GET['id'];
$nn = $_GET['nn'];
$ph = $_GET['ph'];
$ad = $_GET['ad'];
$mn = $_GET['mn'];
$qt = $_GET['qt'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>receiver_Update</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
    <form class="" action="" method="post">
        <div class="title">
        </div>
        <div class="half">
            <div class="item">
                <label for="">Id</label>
                <input type="text" name="id" value="<?php echo "$id" ?>" required>
            </div>
            <div class=" item">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo "$nn" ?>" required>
            </div>
        </div>
        <div class="item">
            <label for="">Phone</label>
            <input type="text" name="phone" value="<?php echo "$ph" ?>" required>
        </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo "$ad" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Medicine Name</label>
                <input type="text" name="medicine" value="<?php echo "$mn" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Quantity</label>
                <input type="text" name="quantity" value="<?php echo "$qt" ?>" required>
            </div>
        </div>
        <center>
            <div class="action">
                <input type="submit" name="submit" value="Update Details">
            </div>
        </center>
    </form>
</body>

</html>
<?php
if ($_POST['submit']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $medicine = $_POST['medicine'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE receiver_tbl SET id ='$id', name = '$name', 
    phone = '$phone' , address = '$address' , medicine = '$medicine' ,quantity = '$quantity' 
    WHERE id = '$id'";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/receiver.php">
<?php
    } else {
        echo " Failed to Update Record";
    }
}

?>