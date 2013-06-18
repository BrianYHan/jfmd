<html>
  <head>
    <title>James Franklin Marketing and Designs</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href="stylesheets/bootstrap.css" rel="stylesheet" type="text/css" /> 
    <link href="stylesheets/bootstrap-responsive.css"  rel="stylesheet" type="text/css" /> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<!-- 	<?php include("header.php");?>
		<h1 class="page-header">Contact Submission</h1>
			<?php
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$call = $_POST['call'];
				$site = $_POST['site'];
				$interest = $_POST['interest'];
				$message = $_POST['message'];
				$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Current Site: $site \n Reason for contact: $interest \n Message: $message";
				$recipient = "brianyhan@gmail.COM";
				$subject = "Contact Form";
				$mailheader = "From: $email \r\n";
				mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
				echo "Thank You!" . " -" . "<a href='contact_us.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
	?> -->

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
if(isset($msg)){
    if(strlen($msg)<=1){
        $cont=false;
        $error['error_message']='Enter your real message!';
    }else{
        $msg=preg_replace('/[^a-zA-Z0-9\(\)\:\?.\&,_ -]/s', '', $msg);
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
</body>
</html>