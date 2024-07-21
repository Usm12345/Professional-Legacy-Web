<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Professionalslegacyofficial@gmail.com"; // Replace with your email address
    $subject = "Prof Legacy Website Message";
    
    // Sanitize form data
    $full_name = htmlspecialchars($_POST["full_name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $whatsapp_number = htmlspecialchars($_POST["whatsapp_number"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $body = "Full Name: $full_name\nEmail: $email\nWhatsApp Number: $whatsapp_number\n\nMessage:\n$message";
    
    // Additional headers
    $headers = "From: $email\r\n";
    
    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect or display a thank you message
    header("Location: thank_you.html"); // Replace with your thank you page
    exit();
}
?>
