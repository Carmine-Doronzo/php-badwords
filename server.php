<?php 

$message = $_GET['message'];
$word = $_GET['word'];
$messageLenght = strlen($message);
$censoredMessage = str_replace($word,'***',$message,$count);
$censoredMessageLenght = strlen($censoredMessage)

?>

<h1>Messaggio: <?php echo $message ?></h1>
<h2>Lunghezza: <?php echo $messageLenght ?> </h2>
<h3>Messaggio censurato: <?php echo $censoredMessage ?></h3>
<h4>lunghezza Messaggio censurato: <?php echo $censoredMessageLenght ?></h4>
<h5>numero di sostituzioni: <?php echo $count ?></h5>