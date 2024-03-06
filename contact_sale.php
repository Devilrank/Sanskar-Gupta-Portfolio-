<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    require'config.php';

    $conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("connection failed: ".$conn->connect_error);

    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobilenumber = $_POST["mobile-number"];
    $subject = $_POST["subject"];
    $message = $_POST["textbox"];

    $sql = "INSERT INTO `contact_sale` (`Name`, `E-mail`, `Mobile_number`, `E-mail_sub`, `Message`) VALUES ('$name ', '$email', '$mobilenumber', '$subject ', '$message ');";
    if(mysqli_query($conn, $sql))
    {
        contact_mail($name,$email);
        header("location: index.html");
    }
    else
    {
        echo "Error: $sql<br> " . mysqli_error($con);
    }
}
?>