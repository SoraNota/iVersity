;-)

<?php


 $to = "soranota@gmail.com";
 $subject = "Hi!";
 $body = "OK";
 if (mail($to, $subject, $body)) {
   echo("<p>Email successfully sent!</p>");
  } else {
   echo("<p>Email delivery failed…</p>");
  }

?>