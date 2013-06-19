<?php
$meta_name = "JFMD";
$content= "Contact Page";
$title = "Contact Submission";
$page = 'contact_submission';
require_once 'header.php';     
include("header.php"); ?>
		<h1 class="page-header">Contact Submission</h1>


	<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){

$emailTo = 'brianyhan@gmail.com';
$subject = 'Contact Form';

$name=(isset($_POST['name'])?$_POST['name']:null);
$email=(isset($_POST['email'])?$_POST['email']:null);
$phone=(isset($_POST['phone'])?$_POST['phone']:null);
$site=(isset($_POST['site'])?$_POST['site']:null);
$call=(isset($_POST['call'])?$_POST['call']:null);
$interest=(isset($_POST['interest'])?$_POST['interest']:null);
$message=(isset($_POST['message'])?$_POST['message']:null);

$error=array();
$cont=true;
//name
if(isset($name)){
    if(strlen($name)<=1){
        $cont=false;
        $error['error_name']='Enter your real name!';
    }else{
        $name=preg_replace('/[^a-zA-Z0-9\(\)\:\?.\&,_ -]/s', '', $name);
    }
}else{
    $error['error_name']='Enter your name!';
    $cont=false;
}

//email
if(isset($email)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    }else{
        $cont=false;
        $error['error_email']='Email Invalid';
    }
}else{
    $cont=false;
    $error['error_email']='Please enter your email!';
}

//phone
if(isset($phone)){
    if(strlen($phone)<=1){
        $cont=false;
        $error['error_phone']='Enter your real number!';
    }else{
        $phone=preg_replace('/[^0-9]/s', '', $phone);
    }
}else{
    $error['error_phone']='Enter your number!';
    $cont=false;
}

//message
if(isset($message)){
    if(strlen($message)<=1){
        $cont=false;
        $error['error_message']='Enter your real message!';
    }else{
        $message=preg_replace('/[^a-zA-Z0-9\(\)\:\?.\&,_ -]/s', '', $message);
    }
}else{
    $error['error_message']='Enter your message!';
    $cont=false;
}

if(empty($error) && $cont ==true){
    //send mail
    $body = "Name: $name \n\n
         Email: $email \n\n
         Site URL: $site \n\n
         Phone: $phone \n\n
         Call: $call \n\n
         Interest: $interest \n\n
         Message: $message";

    // Additional headers
    $headers ='MIME-Version: 1.0'."\r\n";
    $headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers.='Reply-To: '.$email."\r\n";
    $headers.='From: '.$name.' <'.$email.'>'."\r\n";
    $headers.="X-Mailer: Remote Mail\r\n";
    // Mail it
    $status = (mail($emailTo, $subject, $body, $headers))?'Mail Was Sent':'Error Sending email';
}else{

  //error with form values
  $status='';
  foreach($error as $type=>$reason){
    $status .= $reason.'<br />';
  }
}

//Echo your form or status page
echo $status;
}else{
    //Echo your form
}

?>

	<?php include("footer.php");?>

</html>