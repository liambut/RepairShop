<?php
if(isset($_POST['submit'])){
    $to = "liampb@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wants a quote for the following " . "\n" . "at " . $address . ": \n\n" . $_POST['message'] .  "contact them at: " . $number;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
