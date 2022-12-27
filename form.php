<?php
  $name = trim(strip_tags($_POST["name"]));
  $phone = trim(strip_tags($_POST["phone"]));
  $email = trim(strip_tags($_POST["email"]));
  $problem = trim(strip_tags($_POST["problem"]));
  $subject = "Запрос на звонок с сайта FactsgeniX";
  $msg = "Ваши данные формы запроса:\n" ."Имя: $name\n" ."Номер теоефона: $phone\n" ."Ваш email: $email\n" ."Описание проблемы: $problem";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Владимир <factsgenix@mail.ru>" . "\r\n";
  $headers .= "Bcc: factsgenix@mail.ru". "\r\n";
  if(!empty($name) && !empty($phone) && !empty($email) && !empty($problem) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Спасибо за ваше обращение! Вам обязательно перезвонят.";
    }
?>