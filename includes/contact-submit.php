<?php
    if($_POST){
        function trim_value(&$value) {
            $value = trim($value);
         }
        array_filter($_POST, 'trim_value');

        $name = "";
        $email = "";
        $message = "";
        $sent = 0;

        if(isset($_POST['user_name']) && !empty($_POST['user_name'])) {
            $name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
        }
        if(isset($_POST['user_email']) && !empty($_POST['user_email'])) {
            $email = filter_var($_POST['user_name'], FILTER_SANITIZE_EMAIL);
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
            }
        }
        if(isset($_POST['user_message']) && !empty($_POST['user_message'])) {
            $message = "Message from $name: ";
            $message .= filter_var($_POST['user_message'], FILTER_SANITIZE_STRING);
        }

        $headers = [
            'From' => $email,
        ];
        if(mail('cu.janeway@gmail.com', 'Website Message', $message, $headers) == true) $sent = 1;
    }
?>