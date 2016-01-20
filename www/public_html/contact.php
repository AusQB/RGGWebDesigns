<?php
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

session_start();

//If the form is submitted
if(isset($_POST['submitted'])) {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $company = trim($_POST['company']);
  $message = trim($_POST['message']);
  // $errors = [];
  
  // require a name from user
  if($name === '') {
    // array_push($errors, 'Name is required'); 
    $hasError = true;
  }
  
  // need valid email
  if($email === '')  {
    // array_push($errors, 'Email address is required');
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $email)) {
    // array_push($errors, 'Email address is invalid');
    $hasError = true;
  }

  if(!preg_match('\d{8,}', $phone)) {
    $hasError = true;
  }
    
  // we need at least some content
  if($message === '') {
    // array_push($errors, 'A message is required');
    $hasError = true;
  } else if(function_exists('stripslashes')) {
    $message = stripslashes($message);
  }

  if($_POST['answer'] != $_SESSION['answer']) {
      array_push($errors, 'Incorrect answer');
      $hasError = true;
  }
    
  // upon no failure errors let's email now!
  if(!isset($hasError)) {
    if(isset($_POST['url']) && $_POST['url'] === '') {
    
      $emailTo = 'rob@rggwebdesigns.com';
      $subject = 'RGG Web Designs Contact Form';
      $body = "Name: $name\n\nEmail: $email";
      if($phone !== '') $body .= "\n\nPhone: $phone";
      if($company !== '') $body .= "\n\nCompany: $company";
      $body .= "\n\nMessage: $message";
      // $body .= "\n\nURL: $_POST['url']";
      // $body .= "\n\nCAPTCHA: $_SESSION['answer'] = $_POST['answer']";
      $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

      mail($emailTo, $subject, $body, $headers);
          
          // set our boolean completion value to TRUE
      $emailSent = true;

    }
  } else {

    // foreach ($errors as $key) {
    //   echo $errors[$key];
    //   return false;
    // }

  }
}
?>