<?php 
        if(isset($_POST['submit'])){
            $to = "contactus@cognived.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $company = $_POST['company'];
            
            $subject = "Contact Form";
            $message = "Name:". $name .  "<br>"."Phone: ". $phone . "<br>"."Company: ". $company . "<br>". $_POST['describe'];
            
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            
            
                if(mail($to,$subject,$message,$headers)){
                        echo "<script> Swal.fire(
                        'Success!',
                        'Your query successfully submitted.',
                        'success'
                        ) </script>";
                }
                else{
                        echo "<script> Swal.fire(
                        'Error!',
                        'Something went wrong!',
                        'warning'
                        ) </script>";
                }
            
        }
    ?>