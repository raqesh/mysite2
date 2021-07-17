<?php
    if(isset($_POST['send'])){
        if( filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
            $number = $_POST['number'];
            $message = $_POST['message'];

            $to_email = "rakesh@maaeend.com";
            $subject = "Response from Maaeend.com | Contact Form";
            $body = "Details : \n Email Id : ".$email."\n Contact number : ".$number. "\n Message : " . $message ;
            $headers = "From: sender email";

            if (mail($to_email, $subject, $body, $headers)) {
                ?>
                    <script>
                        alert("Thank You for contacting with us!!!");
                    </script>
                <?php 
                header("location:main.html"); exit();
            } else {
                header("location:main.html"); exit();
                ?>
                    <script>
                        alert("Error");
                    </script>
                <?php 
            }
            
        }

    }       
?>