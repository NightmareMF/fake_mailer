<?php
  $to = $_REQUEST['to'];
  $subject = $_REQUEST['subject'];
  $txt = $_REQUEST['txt'];
  $headers = "From: ".$_REQUEST['from']."\r\n"."CC: ".$_REQUEST['cc']."\r\n"."BCC: ".$_REQUEST['bcc'] ;
  mail($to,$subject,$txt,$headers);
  echo "Mail sent!";
 ?>
