<?php

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $message = "Sender: ".$email."\r\n"."Message: ".$message;

  if(mail($email,$subject,$message)){
    echo 'success';
  }else{
    echo 'failed';
  }
}
?>

<form class="" action="index.php" method="post">
  <input type="email" name="email" value="" placeholder="Email"><br>
  <input type="text" name="subject" value="" placeholder="Subject"><br>
  <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea><br>

  <input type="submit" name="submit" value="Send Email">
</form>
