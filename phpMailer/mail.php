<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
       //Load Composer's autoloader
    require 'vendor/autoload.php';

if(isset($_POST['submit']))
{
    extract($_POST);
    $file_name = $_FILES['myfile']['name'];
    $file_tmp_name = $_FILES['myfile']['tmp_name'];
    $store = "Upload/".$file_name;
    move_uploaded_file($file_tmp_name, $store);
    
    $mail = new PHPMailer(true);

    try
    {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'anshu4any1@gmail.com';                     //SMTP username
        $mail->Password   = 'Anshu123@';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('anshu4any1@gmail.com', 'PHP Mail');
        $mail->addAddress($to, 'Anshu Sharma');     //Add a recipient
      
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment($store);    //Optional name
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);

        echo $mail->send();
        echo "<script>window.location='index.php'</script>";
        }
    catch (Exception $e)
    {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}