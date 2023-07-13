<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "medicine_donation";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to delete a record
$sql = "DELETE FROM donation WHERE id='1'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully')</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
<META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/donation_tbl.php">
<?php
$conn->close();
