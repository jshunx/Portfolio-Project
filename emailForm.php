<!DOCTYPE html>
<html>

<head>
    <title>Contact Me</title>
    <link href="emailForm.css" rel="stylesheet" type="text/css">
</head>

<body>
    <form action="contact.php" method="post">
        <!--need to get some php action here -->
        <div>
            <label for="name">Your Name:</label>
            <input type="text" id="name" />
        </div>
        <div>
            <label for="mail">Your E-mail:</label>
            <input type="email" id="mail" />
        </div>
        <div>
            <label for="msg">Message:</label>
            <textarea id="msg"></textarea>
        </div>

        <div class="button">
            <button type="submit">Send</button>
        </div>
    </form>
    
    <?php
        if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
?>

</body>


</html>