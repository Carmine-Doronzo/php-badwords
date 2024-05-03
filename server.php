<?php 

$message = $_GET['message'];
$messageLenght = strlen($message);
$censoredMessage = str_replace($message[3],'***',$message);
$censoredMessageLenght = strlen($censoredMessage)

?>

<h1>Messaggio: <?php echo $message ?></h1>
<h2>Lunghezza: <?php echo $messageLenght ?> </h2>
<h3>Messaggio censurato: <?php echo $censoredMessage ?></h3>
<h4>lunghezza Messaggio censurato: <?php echo $censoredMessageLenght ?></h4>