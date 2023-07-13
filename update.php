<?php
include("database.php");
error_reporting(0);

$id = $_GET['id'];
$nn = $_GET['nn'];
$em = $_GET['em'];
$ph = $_GET['ph'];
$ad = $_GET['ad'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>NGo_Update</title>
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
                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo "$ad" ?>" required>
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
    $address = $_POST['address'];

    $query = "UPDATE ngo_reg SET id ='$id', name = '$name', email = '$email', 
    phone = '$phone' , address = '$address' WHERE id = '$id'";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/table.php">
<?php
    } else {
        echo " Failed to Update Record";
    }
}

?>