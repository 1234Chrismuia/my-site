<?php
// Simple Application Form Processor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['applicant_name'];
    $email = $_POST['applicant_email'];
    $phone = $_POST['applicant_phone'];
    $linkedin = $_POST['applicant_linkedin'];
    $position = $_POST['position'];
    $message = $_POST['applicant_message'];
    
    // Simple email sending (for testing)
    $to = "jessymuiaa@gmail.com";
    $subject = "Job Application: $position - $name";
    $body = "
    New Job Application Received
    
    Position: $position
    Name: $name
    Email: $email
    Phone: $phone
    LinkedIn: $linkedin
    
    Cover Letter:
    $message
    ";
    
    $headers = "From: $email\r\n";
    
    // Try to send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: careers.php?status=success");
    } else {
        header("Location: careers.php?status=error");
    }
    exit;
} else {
    header("Location: careers.php");
}
?>
