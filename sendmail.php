<?php

// Include WP functions.
include('../../../wp-load.php');

if (isset($_POST['name']) && isset($_POST['email'])) {

    $admin_email = get_option( 'admin_email' );

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $subject = "Name: $name - $subject";
    $content = "";

    wp_mail( $admin_email , $subject, $content, null, null );

    echo "Email sent successfully!";
} else {
    echo "No email to send!";
}

?>