<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $reciever = "sammcaddy@gmail.com";
            $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\nRegards,\n$name";
            $sender = "From: $email";

            if(mail($reciever, $subject, $body, $sender)){
                echo "Your message was sent successfully!";
            }else{
                echo "Sorry, failed to send your message!";
            }

        }else{
            echo "Enter a valid email address!";
        }
    }else{
        echo "Email and message field is required!";
    }
?>