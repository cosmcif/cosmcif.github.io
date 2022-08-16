<!DOCTYPE html>

<head>
	<title>contact me</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../icon/melon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		/*require_once "connessione.php";*/

		$nome = $_POST['nome'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        
        /*$query = "INSERT INTO contact_form VALUES ('$nome', '$mail', '$subject')";
        $result = mysqli_query($conn, $query);*/
        
        $email_from = 'datrisof@gmail.com';
		$email_subject = "Contact request - Sofia d'Atri";
		$email_body = "Hello, $nome.\nThank you for sending me a message!\nYour message:\n$subject\nDon't reply to this email!\nI'll get back to you soon.\nHave an amazing day!\nSofia";

        $to = "$mail";
  		$headers = "From: $email_from \r\n";
  		$headers .= "Reply-To: $mail \r\n";
        mail($to,$email_subject,$email_body,$headers);  
        
        $to = 'datrisof@gmail.com';
        $email_body = "Ciao Sofia.\n$nome ti ha inviato una richiesta di contatto!\nIl suo messaggio:\n$subject\nIl suo indirizzo:\n$mail\nNon dimenticarti di rispondergli!";
  		$headers = "From: $email_from \r\n";
  		$headers .= "Reply-To: $email_from \r\n";
        mail($to,$email_subject,$email_body,$headers);  
?>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js"></script>-->
  <!--<script src="../scripts/script.js"></script>-->
	<div class="titolo"><h1>Sofia's projects</h1></div>
    <div class="intro">
      <p><a href="../index.html">home</a> - <a href="../html/currently.html">work in progress</a> - <a href="../html/whoami.html">whoami</a> - <a href="../html/contacts.html">contacts</a></p>
    </div>
    <div class="progetti">
      <h2>Thank you!</h2>
      <p class="desc">I'll reply as soon as possible. I sent a confirmation email, so keep an eye on your emails (even the spam folder).</p>
      <!--<p class="desc">In the meantime, take a look at this video I made a while ago.</p>
      <div class="wrapper">
      	<iframe class="yt" width="560" height="315" src="https://www.youtube.com/embed/ya8sY76Id-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>-->
    </div>
    <footer>
      <p>Made by <a href="mailto:datrisof@gmail.com">Sofia d'Atri</a></p>
      <p>All rights reserved.</p>
    </footer>
</body>
</html>


