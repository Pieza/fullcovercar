<?php 
    $to = "fullcovercar@gmail.com"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $name = $_GET['name'];
    $phoneNumber = $_GET['phone'];
    $subject = "Mensaje recibido desde la página web";
    $message = $name . "\n\n" . "Número de teléfono: ". $phoneNumber . "\n\n" . " Envío el siguiente mensaje a traves de la página web:" . "\n\n" . $_GET['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_GET['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    echo htmlspecialchars($_SERVER['PHP_SELF']);
?>