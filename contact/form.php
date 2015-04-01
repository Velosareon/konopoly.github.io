<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: Web design client <noreply@yourwebsite.com>' . "\n"; // Add EOL character

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ( isset( $_POST['submit'] ) ) { // Check if submit variable is set
    if (mail ('kman239@gmail.com', 'Client', $body, $headers)) 
    { 
        header("Location: http://polyashenko.me");
        die();
    } 
    else 
    { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}

?>
