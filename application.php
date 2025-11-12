<?php
// Simple Application Form Processor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = filter_input(INPUT_POST, 'applicant_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'applicant_email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'applicant_phone', FILTER_SANITIZE_STRING);
    $linkedin = filter_input(INPUT_POST, 'applicant_linkedin', FILTER_SANITIZE_URL);
    $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'applicant_message', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (!$name || !$email || !$position || !$message) {
        header("Location: careers.html?status=error");
        exit;
    }
    
    // Email to business
    $to = "jessymuiaa@gmail.com";
    $subject = "Job Application: " . $position . " - " . $name;
    $body = "
    New Job Application
    
    Position: $position
    Name: $name
    Email: $email
    Phone: $phone
    LinkedIn: $linkedin
    
    Cover Letter:
    $message
    ";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        // Auto-reply to applicant
        $user_subject = "Application Received - Jespher Tech";
        $user_body = "
        Hello $name,
        
        Thank you for applying for the $position position at Jespher Tech.
        
        We've received your application and will review it carefully. 
        If your profile matches our requirements, we'll contact you within 5-7 business days.
        
        Best regards,
        Jespher Tech Hiring Team
        ";
        
        $user_headers = "From: careers@jesphertech.com\r\n";
        mail($email, $user_subject, $user_body, $user_headers);
        
        header("Location: careers.html?status=success");
    } else {
        header("Location: careers.html?status=error");
    }
} else {
    header("Location: careers.html");
}
exit;
?>