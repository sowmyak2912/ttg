<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobilenumber = $_POST["mobilenumber"];
    $interested = $_POST["interested"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sowmyak2912@gmail.com.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\n";
    $messageBody .= "Mobile Number: $mobilenumber\n";
    $messageBody .= "Interested In: $interested\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message: $message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for your submission. We will get in touch with you shortly.";
    } else {
        echo "Sorry, there was an error while processing your request. Please try again later.";
    }
} else {
    echo "Invalid request method. Please use the form to submit your details.";
}
?>
