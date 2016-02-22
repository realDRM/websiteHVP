<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  // Please specify your Mail Server - Example: mail.example.com.
  ini_set("SMTP","aspmx.l.google.com");
  // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
  ini_set("smtp_port","25");
  // Please specify the return address to use
  ini_set('sendmail_from', 'HetVrijePodium@gmail.com');
  //Email information
  $admin_email = "schudder@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>