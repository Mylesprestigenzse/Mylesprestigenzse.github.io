<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $from = $_POST['email'];
    $phoneNumber = $_POST['phone-number'];
    $message = $_POST['message'];

    $subject = "New Sign Up";

    $mailTo = "mojeeb.noutash@gmail.com";
    $headers = "From: ". $from;
    $txt = "Name: ".$firstName." ".$lastName."\n"."Email: ".$from."\nPhone Number: ".$phoneNumber."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
}


//if(isset($_POST['submit'])){
//    $to = "mojeeb.noutash@gmail.com";
//    $from = $_POST['email'];
//    $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
//    $phone_number = $_POST['phone-number'];
//    $subject = "New Sign Up";
//    // $subject2 = "Copy of your form submission";
//    $message = "Name: " . $first_name . " " . $last_name . "\n Email: " . $email . "\n" . "Phone Number: " . $phone_number . "\n\n" . $_POST['message'];
//    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
//
//    $headers = "From:" . $from;
//    // $headers2 = "From:" . $to;
//    mail($to,$subject,$message,$headers);
//    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//    // You can also use header('Location: thank_you.php'); to redirect to another page.
//}

/*
$errors = [];

if (!empty($_POST)) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone-number'];
    $message = $_POST['message'];

    if (empty($firstName)) {
        $errors[] = 'First Name is empty';
    }

    if (empty($lastName)) {
        $errors[] = 'Last Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($phoneNumber)) {
        $errors[] = 'Email is empty';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
}

if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}
*/