<?php
require_once('model/message.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        // Reset values for variables
        $first_name = '';
        $last_name = '';
        $phone = '';
        $email = '';

        // Load view
        include 'view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $email = trim(filter_input(INPUT_POST, 'email'));

        // Set up email variables
        $to_address = $email;
        $to_name = $first_name . ' ' . $last_name;
        $from_address = 'custserv@myguitarshop.com';
        $from_name = 'My Guitar Shop';
        $subject = 'My Guitar Shop - Registration Complete';
        $body = '<p>Thanks for registering with our site.</p>' .
                '<p>Sincerely,</p>' .
                '<p>My Guitar Shop</p>';
        $is_body_html = true;
        
        // Send email
        try {
            send_email($to_address, $to_name, 
                    $from_address, $from_name, 
                    $subject, $body, $is_body_html);
            include 'view/success.php';
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include 'view/register.php';
        }        
        break;
}
?>