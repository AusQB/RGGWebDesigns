<?php

session_start();

$digit1 = mt_rand(1,20);
$digit2 = mt_rand(1,20);
if(mt_rand(0,1) === 1) {
  $math = "$digit1 + $digit2";
  $_SESSION['answer'] = $digit1 + $digit2;
} else {
  $math = "$digit1 - $digit2";
  $_SESSION['answer'] = $digit1 - $digit2;
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RGG Web Designs</title>
  <meta name="description" content="Simple website design and development in Perth, Australia.">
  <meta name="keywords" content="Web Design, Web Development, Perth, Australia">
  <meta name="google-site-verification" content="u_g3snkcZd81zXheJh310TwkMxdVbKaCWuXv0_l1zF4" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="assets/img/apple_icon.png" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700|Roboto:400,500,700,300,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
  <link rel="stylesheet" href="assets/css/slick-theme.css" />
  <link rel="stylesheet" href="assets/css/foundation.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <script src="assets/js/vendor/modernizr.js"></script>
</head>
<body>

<div id="header" class="row">
  <div class="large-12 columns">
    <img id="logo" class="hide-for-small-only" src="assets/img/rgg_logo.png" alt="" />
    <img id="logo-text" src="assets/img/rgg_logo_text.png" alt="" />
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div id="slider">

      <div>
        <a href="http://elementimages.net.au/" target="_blank">
          <img src="assets/img/portfolio/element_full.jpg" alt="Element Images" />
        </a>
      </div>

      <div>
        <a href="http://juicecreative.com.au" target="_blank">
          <img src="assets/img/portfolio/juice_full.jpg" alt="Juice Creative" />
        </a>
      </div>

      <div>
        <a href="http://integratedconcept.com.au" target="_blank">
          <img src="assets/img/portfolio/ic_full.jpg" alt="Integrated Concept" />
        </a>
      </div>

      <div>
        <a href="http://catalanos.net.au/home" target="_blank">
          <img src="assets/img/portfolio/catalanos_full.jpg" alt="Catalano's Seafood" />
        </a>
      </div>

      <div>
        <a href="http://homestart.net.au" target="_blank">
          <img src="assets/img/portfolio/homestart_full.jpg" alt="HomeStart" />
        </a>
      </div>

      <div>
        <a href="http://ewillsaustralia.com.au" target="_blank">
          <img src="assets/img/portfolio/ewills_full.jpg" alt="eWills Australia" />
        </a>
      </div>

      <div>
        <a href="http://bosarchitects.com" target="_blank">
          <img src="assets/img/portfolio/bos_full.jpg" alt="Bos Architects" />
        </a>
      </div>

      <div>
        <a href="http://kanakado.kanjiro.com" target="_blank">
          <img src="assets/img/portfolio/kanakado_full.jpg" alt="KanaKado" />
        </a>
      </div>

      <div>
        <a href="http://missionctrl.com.au" target="_blank">
          <img src="assets/img/portfolio/mission_full.jpg" alt="Mission Ctrl" />
        </a>
      </div>

      <div>
        <a href="http://geocontainersolutions.com.au" target="_blank">
          <img src="assets/img/portfolio/geo_full.jpg" alt="Geo Container Solutions" />
        </a>
      </div>

      <div>
        <a href="http://odessaresources.com" target="_blank">
          <img src="assets/img/portfolio/odessa_full.jpg" alt="Odessa Resources" />
        </a>
      </div>

    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns text-center">
    <button id="contact-btn"><i class="fa fa-envelope"></i></button>
    <form action="contact.php" accept-charset="utf-8" id="contact-form" method="post">
      <div class="row">
        <div class="medium-6 columns">
          <div class="row">
            <div class="large-12 columns">
              <label data-label="name">Name</label>
              <input type="text" name="name" class="required-field" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" id="cf-name" maxlength="150" placeholder="Name (required)" required>
              <? if($nameError != '') : ?>  
                <span class="error"><?= $nameError ?></span>   
              <? endif; ?>  
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label data-label="email address">Email</label>
              <input type="email" name="email" class="required-field email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" id="cf-email" maxlength="150" placeholder="Email (required)" required>
              <? if($emailError != '') : ?>  
                <span class="error"><?= $emailError ?></span>   
              <? endif; ?>  
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label data-label="phone number">Phone</label>
              <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" id="cf-phone" maxlength="16" placeholder="Phone" pattern="\d{8,}" title="Minimum 8 digits">
              <? if($phoneError != '') : ?>  
                <span class="error"><?= $phoneError ?></span>   
              <? endif; ?>  
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label data-label="company">Company</label>
              <input type="text" name="company" value="<?php if(isset($_POST['company'])) echo $_POST['company']; ?>" id="cf-company" maxlength="150" placeholder="Company">
              <? if($companyError != '') : ?>  
                <span class="error"><?= $companyError ?></span>   
              <? endif; ?> 
            </div>
          </div>
        </div>
        <div class="medium-6 columns">
          <div class="row">
            <div class="large-12 columns">
              <label data-label="message">Message</label>
              <textarea name="message" class="required-field" cols="50" rows="6" id="cf-message" placeholder="Message" required><?php if(isset($_POST['message'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message']); } else { echo $_POST['message']; } } ?></textarea>
              <? if($messageError != '') : ?>  
                <span class="error"><?= $messageError ?></span>   
              <? endif; ?>
            </div>
          </div>
          <div class="row">
            <div class="small-8 columns text-left">
              <label data-label="answer">Anti-spam</label>
              <span><?= $math ?> = </span><input class="required-field answer" style="display:inline-block;width:40px;margin-right:5px;" type="text" name="answer" required>
            </div>
            <div class="small-4 columns clearfix">
              <div style="display:none;position:absolute;top:-10000px;">
                <label>Leave this empty</label>
                <input type="text" name="url">
              </div>
              <button class="right" type="submit" name="submit">Submit</button>
              <input type="hidden" name="submitted" id="submitted" value="true">
            </div>
          </div>
        </div>
      </div>
    </form>

    <div id="contact-sent" style="display:none;">
      <p style="font-size:1.1rem;font-weight:500;"><i class="fa fa-check-circle" style="color:#95D725;"></i> Form submitted successfully</h2>
      <p>Thanks for enquiring, I'll be in touch as soon as possible.</h3>
    </div>

  </div>
</div>

<div id="copyright">
  <p><small>&copy; RGG Web Designs <?= date('Y') ?></small></p> 
</div>
  
<script src="assets/js/vendor/jquery.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
<script>
  $(document).ready(function() {

    $('#slider').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      centerMode: true,
      centerPadding: '0px',
      dots: true,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 737,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 481,
          settings: {
            centerMode: false,
            slidesToShow: 1
          }
        }
      ]
    });

    $('#contact-btn').click(function() {
      $('#contact-sent').hide();
      $('#contact-form').find('button[type=submit]').html('Submit');
      $('#contact-form').fadeIn(400);
      $('html, body').animate({
        scrollTop: $(document).height()
      }, 1000);
    });

    $('#contact-form').submit(function(e) {
      e.preventDefault();
      $('#contact-form .error').remove();
      var hasError = false;
      $('.required-field').each(function() {
        if($.trim($(this).val()) == '') {
          var labelText = $(this).prev('label').data('label');
          // $(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
          $(this).addClass('input-error');
          hasError = true;
        } else if($(this).hasClass('email')) {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if(!emailReg.test($.trim($(this).val()))) {
            var labelText = $(this).prev('label').text();
            // $(this).parent().append('<span class="error">You\'ve entered an invalid email address</span>');
            $(this).addClass('input-error');
            hasError = true;
          }
        } else if($(this).hasClass('answer')) {
          if($(this).val() != <?= $_SESSION['answer'] ?>) {
            // $(this).parent().append('<span class="error">Incorrect</span>');
            $(this).addClass('input-error');
            hasError = true;
          }
        }
      });
      if(!hasError) {
        $(this).find('button[type=submit]').html('<i class="fa fa-circle-o-notch fa-spin"></i> Sending...');
        var url = $(this).attr('action'),
        data = $(this).serialize();
        $.post(url, data, function() {
          $('#contact-form').fadeOut(400, function() {
            $('#contact-sent').fadeIn(400);
          });
        });
      }
    });

  });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72426348-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>

</body>
</html>