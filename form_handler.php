<?php
    if(isset($_POST["submit"])) {
      $vorname = $_POST["vorname"];
      $name = $_POST["name"];
      $mailFrom = $_POST["email"];
      $subject = $_POST["betreff"];
      $message = $_POST["msg"];

      $mailTo = "elias.hirschl@hotmail.com";
      $headers = "From: ".$mailFrom;
      $txt = "Du hast eine Nachricht von ".$vorname." ".$name." erhalten."."\n\n".$message;

      mail($mailTo, $subject, $txt, $headers);
      header("Location: index.php?mailsend");
    }
?>
