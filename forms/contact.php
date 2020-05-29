<?php
 header("Access-Control-Allow-Origin: *");
  // $receiving_email_address = 'akhilashok405@gmail.com';

  // if( file_exists($php_email_form = 'http://mmpbangalore.com/' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];



  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
  // $ToEmail = 'akhilashok405@gmail.com'; 
  // $EmailSubject = 'Site contact form'; 
  // $mailheader = "From: ".$_POST["email"]."\r\n"; 
  // $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
  // $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
  // $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
  // $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
  // $MESSAGE_BODY .= "Comment: ".nl2br($_POST["subject"]).""; 
  // mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

if(isset($_POST['submit'])){
    $to = "akhilashok405@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['subject'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo(mail)
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>





