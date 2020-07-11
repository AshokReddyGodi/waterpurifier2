<?php
    $to = 'support@emsoftware.in';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $message= $_POST["message"];
    $subject= "Online Enquiry Form";
    $ccemail = "ashokgodi1996@gmail.com";

    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= "Cc:" .$ccemail. "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$subject.'</td>
        </tr>
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>subject: '.$message.'</td></tr>
       
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
        header("Location: http://kanzaemsoftware.com/demo/waterpurifier/thankyou.html");
    }else{
        echo 'failed';
    }

?>