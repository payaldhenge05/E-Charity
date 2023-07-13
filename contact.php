<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $user = mysqli_query($conn, "SELECT * FROM contact WHERE name = '$name' OR email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        echo
        "
    <script> alert('Valid Information'); </script>
    ";
    } else {
        $query = "INSERT INTO contact VALUES('', '$name', '$email', '$subject' , '$message')";
        mysqli_query($conn, $query);
        echo
        "
    <script> alert('Message Sent...!'); </script>
    ";
?>
        <META http-equiv="Refresh" CONTENT="0 ; URL=http://localhost:3000/contact.html">
<?php
    }
}
