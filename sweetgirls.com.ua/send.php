<?php
$fio = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);
$fio = urldecode($fio);
$phone = urldecode($phone);
$message = urldecode($message);
$fio = trim($fio);
$phone = trim($phone);
$message = trim($message);
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $phone;
if (mail("sweetgirlskiev@gmail.com", "Заявка с сайта", "Name:".$fio. "Message:".$message." Phone: ".$phone ,"From: manager@topgirls.kiev.ua \r\n"))
{     echo "Thanks for send";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>