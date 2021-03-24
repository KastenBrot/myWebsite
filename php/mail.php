<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$company = $_POST['company'];
$msg = $_POST['msg'];

$my_mail = "fabian@cuntz.eu";

mail($my_mail, $subject, $msg, "From: " . $name . "<" . $mail . ">");

header('Location: /fabi');