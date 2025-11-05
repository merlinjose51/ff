<?php
include 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

if(mysqli_connect_errno()){
    die("connection error: ".mysql_connect_error());
}
$sql = "INSERT INTO contact_messages(name, email, message)
        VALUES (?,?,?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"sss",$name,$email,$message);
mysqli_stmt_execute($stmt);

echo "Record saved.";
