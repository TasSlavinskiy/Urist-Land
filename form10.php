﻿<?php
$name = $_POST['fio'];
$phone = $_POST['phone'];
$REMOTE_ADDR = $_POST['REMOTE_ADDR'];
$comm = $_POST['message'];
$to = "Sochiirina26@mail.ru";
$subject = "Заказ бесплатной консультации";
$message = "Имя пославшего письмо: $name\nТелефон: $phone\nКомментарий: $comm\nIP-адрес: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = utf-8");
echo "<center><br>
<br>
<strong>Благодарим за обращение!</strong><br>
Мы свяжемся с Вами в ближайшее время.<br>
<br>
<strong>Спасибо, что выбрали нас! <a href='index.html'>Вернуться на сайт</a></strong></center>";
exit;
?>