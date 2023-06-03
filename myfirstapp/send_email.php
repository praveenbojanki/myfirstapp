<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    
    $to = "praveenbojanki@gmail.com";  // Update with your email address
    $subject = "Skydiving Booking";
    $message = "Booking Details:\n\nName: $name\nEmail: $email\nDate: $date";
    $headers = "From: praveenbojanki@gmail.com";  // Update with your email address
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
    
    if ($success) {
        http_response_code(200);  // Send a success response
    } else {
        http_response_code(500);  // Send an error response
    }
} else {
    http_response_code(400);  // Send an error response for invalid request
}
?>

