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
        if(isset($_POST['submit2'])) {
                
                $filenameee =  $_FILES['attachment']['name'];
                $fileName = $_FILES['attachment']['tmp_name']; 
                $name = $_POST['sender_name'];
                $email = $_POST['sender_email'];
                $LinkedinPro = $_POST['LinkedinPro'];
                $usermessage = $_POST['message'];
                
                $message ="Name = ". $name . "\r\n  Linkedin Profile = " . $LinkedinPro . "\r\n Message =" . $usermessage; 
                
                $subject ="Join Our Tribute";
                $fromname ="Cognived";
                $fromemail = 'noreply@cognived.com';  //if u dont have an email create one on your cpanel
                $mailto = 'contactus@cognived.com';  //the email which u want to recv this email
                $content = file_get_contents($fileName);
                $content = chunk_split(base64_encode($content));
                // a random hash will be necessary to send mixed content
                $separator = md5(time());
                // carriage return type (RFC)
                $eol = "\r\n";
                // main header (multipart mandatory)
                $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
                $headers .= "MIME-Version: 1.0" . $eol;
                $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                $headers .= "This is a MIME encoded message." . $eol;
                // message
                $body = "--" . $separator . $eol;
                $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                $body .= $message . $eol;
                // attachment
                $body .= "--" . $separator . $eol;
                $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
                $body .= "Content-Transfer-Encoding: base64" . $eol;
                $body .= "Content-Disposition: attachment" . $eol;
                $body .= $content . $eol;
                $body .= "--" . $separator . "--";
               
                //SEND Mail
                     if(mail($mailto, $subject, $body, $headers)){
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