<?php

if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "le_jeremy@live.ca";
  $headers = "From: ".$mailFrom;
  $txt = "You have reveived an e-mail from ".$name.".\n\n".$message;

  mail($mailTp, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}



 ?>
