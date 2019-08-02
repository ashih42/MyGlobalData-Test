<?php

// Get user input values from POST request.
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$hourly_rate = number_format($_POST['hourly_rate'], 2, '.', '');
$hours_per_week = number_format($_POST['hours_per_week'], 2, '.', '');

// Prepare email parameters.
$email_to = 'admin@gmail.com';
$email_subject = 'Form Received';
$email_headers = "From: $name <$email>";

// Format email body.
$email_body = <<<END
Name: $name
Birthdate: $birthdate
Phone Number: $phone_number
Email: $email
Hourly Rate: $$hourly_rate/hr
Available Hours Per Week: $hours_per_week
END;

// Send email.
$mail_sent = mail($email_to, $email_subject, $email_body, $email_headers);

// Alert the user whether the form was submitted successfully.
if ($mail_sent)
    echo 'You have submitted the form. Thank you.';
else
    echo 'Your form could not be sent. Please try again.';

?>
