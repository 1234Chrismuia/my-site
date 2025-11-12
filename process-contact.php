<?php
// Simple Contact Form Processor without PHPMailer
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (!$name || !$email || !$subject || !$message) {
        header("Location: contact.php?status=error");
        exit;
    }
    
    // Email configuration
    $to = "jessymuiaa@gmail.com";
    $email_subject = "Jespher Tech Contact: " . $subject;
    
    // Email content
    $email_body = "
    New Contact Form Submission
    
    Name: $name
    Email: $email
    Company: $company
    Subject: $subject
    
    Message:
    $message
    
    ---
    Sent from Jespher Tech contact form
    ";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Send auto-reply to user
        $user_subject = "Thank you for contacting Jespher Tech!";
        $user_message = "
        Hello $name,
        
        Thank you for contacting Jespher Tech regarding: $subject
        
        We've received your message and will get back to you within 24 hours.
        
        Best regards,
        Jespher Tech Team
        ";
        
        $user_headers = "From: noreply@jesphertech.com\r\n";
        mail($email, $user_subject, $user_message, $user_headers);
        
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }
} else {
    header("Location: contact.php");
}
exit;
?>