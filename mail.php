<?php 

  $firstname = $_POST["first-name"];
  $lastname = $_POST["last-name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $comment = $_POST["comment"];
  $headers = "From: " . $firstname . " " . $lastname . " <" . $email . ">" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail("codescream@markogilo.com", $subject, $comment, $headers);
?>