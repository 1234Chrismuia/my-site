<?php
// SMTP Configuration for Render
return [
    'host' => getenv('SMTP_HOST') ?: 'smtp.gmail.com',
    'smtp_auth' => true,
    'username' => getenv('SMTP_USERNAME') ?: 'jessymuiaa@gmail.com',
    'password' => getenv('SMTP_PASSWORD') ?: 'tlbozjflsjukzwer',
    'secure' => 'tls',
    'port' => 587,
    'from_email' => 'noreply@jesphertech.com',
    'from_name' => 'Jespher Tech',
    'reply_to' => 'jessymuiaa@gmail.com'
];
?>
