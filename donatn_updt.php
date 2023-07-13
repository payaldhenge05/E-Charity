<?php
include("database.php");
error_reporting(0);

$id = $_GET['id'];
$nn = $_GET['nn'];
$em = $_GET['em'];
$ph = $_GET['ph'];
$ct = $_GET['ct'];
$md = $_GET['md'];
$qt = $_GET['qt'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Donation_Update</title>
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
        <div class="half">
            <div class="item">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo "$em" ?>" required>
            </div>
            <div class="item">
                <label for="">Phone</label>
                <input type="text" name="phone" value="<?php echo "$ph" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">City</label>
                <input type="text" name="city" value="<?php echo "$ct" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Medicine Name</label>
                <input type="text" name="medicine" value="<?php echo "$md" ?>" required>
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
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $medicine = $_POST['medicine'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE donation SET id ='$id', name = '$name', email = '$email', 
    phone = '$phone' , city = '$city', medicine = '$medicine', quantity = '$quantity'
     WHERE id = '$id'";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/donation_tbl.php">
<?php
    } else {
        echo " Failed to Update Record";
    }
}

?>