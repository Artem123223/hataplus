<?php
if($_POST) {
    try {
        $text = $_POST['text'];
        $tel = $_POST['tel'];
        $textmessage = $_POST['textmessage'];
        $whatyouwant = $_POST['textwhatyouwant'];
        $tick = $_POST['tick'];
    } catch (\Throwable $th) {
        $userName ="error";
        $userEmail ="error";
        $textmessage = "error";
        $whatyouwant = "error";
        $tick = "error";
    }

    $token = "8199305973:AAGkQQiRpAmv8dkxTWnUcY6BjO40SnXU8dg"; // Token, generated by Bot Father
    $chat_id =  1911483244; // Number of active chat from https://api.telegram.org/bot7634612042:AAEPXNEI2Qnr0RwW_z5KB57zakFm893lEak/getUpdates

    $text = urlencode("$text");
    $tel = urlencode("$tel");
    $textmessage = urlencode("$textmessage");
    $whatyouwant = urlencode("$whatyouwant");
    $tick = urlencode("$tick");

    // echo("$textMessage");
    $urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=".
    "<b>Ваші дані \xE2\x9C\x89</b>" . "%0A". 
    "Ім'я: ". $text . "%0A".
    "Телефон: ". $tel . "%0A".
    "Тема повідомлення: ". $textmessage . "%0A".
    "Текст з вашим бажанням: ". $whatyouwant . "%0A".
    "Галочка \xE2\x9C\x94: ". $tick . "%0A".
    "----------------------". "%0A".
    "<b>Заявка надіслана</b>"
    ;

    $urlQuery .= "&parse_mode=HTML";
    $result = file_get_contents($urlQuery);
}
?>