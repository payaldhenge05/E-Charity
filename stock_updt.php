<?php
include("database.php");
error_reporting(0);

$id = $_GET['id'];
$nn = $_GET['nn'];
$ds = $_GET['ds'];
$qt = $_GET['qt'];
$ed = $_GET['ed'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>stock_Update</title>
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
                <label for="">Medicine Name</label>
                <input type="text" name="med_name" value="<?php echo "$nn" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Description</label>
                <input type="text" name="description" value="<?php echo "$ds" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Quantity</label>
                <input type="text" name="quantity" value="<?php echo "$qt" ?>" required>
            </div>
        </div>
        <div class="full">
            <div class="item">
                <label for="">Expiry Date</label>
                <input type="date" name="expiry_dt" value="<?php echo "$ed" ?>" required>
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
    $med_name = $_POST['med_name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $expiry_dt = $_POST['expiry_dt'];

    $query = "UPDATE stock_mgmnt SET id ='$id', med_name = '$med_name', 
    description = '$description' ,quantity = '$quantity' ,expiry_dt = '$expiry_dt' 
    WHERE id = '$id'";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/med_stock_tbl.php">
<?php
    } else {
        echo " Failed to Update Record";
    }
}

?>