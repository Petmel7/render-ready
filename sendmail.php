<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "your@email.com";
    $subject = "New message from contact form";
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"] . "\n";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
<form method="post">
  <input type="text" name="name" placeholder="Your Name" required><br>
  <input type="email" name="email" placeholder="Your Email" required><br>
  <textarea name="message" placeholder="Your Message" required></textarea><br>
  <button type="submit">Send</button>
</form>
