<?php
if (isset($_POST['submit'])) {
    $to = 'radiantroyals@gmail.com'; //email address
    $subject = 'FC Application';
    
    $message .= 'Q1: ' . $_POST['Q1'] . "\r\n\r\n";
    $message .= 'Q2: ' . $_POST['Q2'] . "\r\n\r\n";
    $message .= 'Q3: ' . $_POST['Q3'] . "\r\n\r\n";
    $message .= 'Q4: ' . $_POST['Q4'] . "\r\n\r\n";
    $message .= 'Q5: ' . $_POST['Q5'] . "\r\n\r\n";
    $message .= 'Q6: ' . $_POST['Q6'] . "\r\n\r\n";
    $message .= 'Q7: ' . $_POST['Q7'] . "\r\n\r\n";
    $message .= 'Q8: ' . $_POST['Q8'] . "\r\n\r\n";
    $message .= 'Q9: ' . $_POST['Q9'];
    
    $success = mail($to, $subject, $message);
}
?>

  <body>
    <?php if (isset($success) && $success) { ?>
      <h1 style="text-align: center;">Thank you</h1>
      <p style="text-align: center;">Your application has been sent. Please allow up to 24 hours to hear back from us.</p>
      <br>
      <p style="text-align: center;"><a href="http://www.radiantroyals.com">Go back to our Promotion site</a></p>
      <?php } else { ?>
        <h1 style="text-align: center;">Oops!</h1>
        <p style="text-align: center;">Sorry, there was a problem sending your application. Please go back and try again.</p>
        <br>
        <p style="text-align: center;"><a href="http://www.radiantroyals.com">Go back to our Promotion site</a></p>
        <?php } ?>
  </body>