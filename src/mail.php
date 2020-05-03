<?php

    $name = $_POST['name'];
    $contacts = $_POST['contacts'];
 
    if($name&&$contacts){     
        $message  = "Имя: ".$name."<br/>";
        $message .= "Телефон: ".$contacts."<br/>";

            
        send_mail($message); 
        $msg = "<h3 style='color: green;'>Сообщение успешно отправлено!</h3>";
    } else {
        $msg = "<h3 style='color: red;'>Заполните имя и телефон!</h3>";
    }
    
    
    echo $msg;
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "all-coolers@yandex.ru"; 
        // тема письма
        $subject = "Заявка с сайта aquaborn.ru";
         
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Питьевая вода AquaBorn <no-reply@aquaborn.ru>\r\n"; // от кого письмо
       
        mail($mail_to, $subject, $message, $headers);
    }
?>