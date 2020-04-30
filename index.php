<?php


set_time_limit(0);

ob_start();

include("jdf.php");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$API_KEY = '1111497043:AAFfeF6vMDCbVpBD6hhX6dXtcsYrMHPVuis';
##---------@Hacker_Qasoskorlar----------##
define('API_KEY', $API_KEY);
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function sendmessage($apichatssu, $text)
{
    bot('sendMessage', [
        'chat_id' => $apichatssu,
        'text' => $text,
        'parse_mode' => "MarkDown"
    ]);
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function deletemessage($apichatssu, $messageid)
{
    bot('deletemessage', [
        'chat_id' => $apichatssu,
        'message_id' => $messageid,
    ]);
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function sendaction($apichatssu, $action)
{
    bot('sendchataction', [
        'chat_id' => $apichatssu,
        'action' => $action
    ]);
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function sendphoto($apichatssu, $photo, $action)
{
    bot('sendphoto', [
        'chat_id' => $apichatssu,
        'photo' => $photo,
        'action' => $action
    ]);
}
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
function objectToArrays($object)
{
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}

// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 

// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$chatsUP = json_decode(file_get_contents('php://input'));
$chatsMS = $chatsUP->message;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$post = $chatsUP->message->channel_post;
$codes = file_get_contents("data/code.txt");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$codes2 = file_get_contents("data/code2.txt");
$chid = $chatsUP->channel_post->message->message_id;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$apichatssu = $chatsMS->chat->id;
$messageid = $chatsMS->message_id;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$from_id = $chatsMS->from->id;
$c_id = $chatsMS->forward_from_chat->id;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$forward = $chatsUP->message->forward_from->id;
$schat = $chatsUP->message->forward_from_chat;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$schat_username = $chatsUP->message->forward_from_chat->username;
$schat_msg_id = $chatsUP->message->forward_from_message_id;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
@$shoklt = file_get_contents("data/$apichatssu/shoklat.txt");
@$penlist = file_get_contents("data/pen.txt");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$text = $chatsMS->text;
@mkdir("data/$apichatssu");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
@$ali = file_get_contents("data/$apichatssu/ali.txt");
@$list = file_get_contents("users.txt");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 



// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 


// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 


$ADMIN = "1139073652"; //Admin ID
$bot = "KinoPMBot"; // Bot Botname
$mychannel = "KinoPM"; // Kanal username
$myadmin = "Alimardon7755"; // Admin username


// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 


// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 



// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$channel = file_get_contents("data/channel.txt");
$channe2l = file_get_contents("data/channel2.txt");
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$chatid = $chatsUP->callback_query->message->chat->id;
$data = $chatsUP->callback_query->data;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$messageid2 = $chatsUP->callback_query->message->message_id;
$fromm_id = $chatsUP->inline_query->from->id;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$username = $chatsUP->inline_query->from->username;
$inline_query = $chatsUP->inline_query;
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$qid = $inline_query->id;
$fatime = date('H:i', strtotime('2 hour'));
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$fadate = date('d-M Y',strtotime('2 hour'));
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$mychannel&user_id=".$from_id);
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
if($chatsMS && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: vvssr"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$apichatssu,
'text'=>"👋🏻┇ Salom $name botga xush kelibsiz!

🌟┇Botdan to'liq foydalanish uchun kanalimizga a'zo bo'ling!

📡┇Kanal: @$mychannel

📌┇ A'zo bo'lib /start ni bosing!",
'reply_to_message_id'=>$msid,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "🔥A'zo bo'lish🔥", 'url' => "t.me/$mychannel"]],]])
]);return false;}

// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
$ptn = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "1⃣", 'callback_data' => "c1"], ['text' => "2⃣", 'callback_data' => "c2"], ['text' => "3⃣", 'callback_data' => "c3"]
        ],
        [
            ['text' => "4⃣", 'callback_data' => "c4"], ['text' => "5⃣", 'callback_data' => "c5"], ['text' => "6⃣", 'callback_data' => "c6"]
        ],
        [
            ['text' => "7⃣", 'callback_data' => "c7"], ['text' => "8⃣", 'callback_data' => "c8"], ['text' => "9⃣", 'callback_data' => "c9"]
        ],
        [
            ['text' => "✔️Tasdiqlash", 'callback_data' => "chk"], ['text' => "0⃣", 'callback_data' => "c0"]
        ],
        [
            ['text' => "🔙Orqaga", 'callback_data' => "home"]
        ],
    ]
]);
////_________
if ($text == "/start") {
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
        $user = file_get_contents('users.txt');
        $members = explode("n", $user);
        if (!in_array($from_id, $members)) {
            $add_user = file_get_contents('users.txt');
            $add_user .= $from_id . "n";
            file_put_contents("data/$apichatssu/membrs.txt", "0");
            file_put_contents("data/$apichatssu/shoklat.txt", "10");
            file_put_contents('users.txt', $add_user);
        }
        file_put_contents("data/$apichatssu/ali.txt", "no");
        sendAction($apichatssu, 'typing');
        bot('sendmessage', [
            'chat_id' => $apichatssu,
            'text' => "*👋🏻Salom $name. Botimizga xush kelibisiz!
            
Siz ushbu botda kanalingiz postidagi ko'rish(view)larni osongina oshirishingiz mumkin.

Botni kanalingizga admin qiling bo'lmasa botimiz ishlamaydi!

Ishni boshlash uchun quyidagi menyulardan birini tanlang🔻*",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "💰Ball to'plash", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "🔗Referal", 'callback_data' => "b"], ['text' => "⚙️Profilim", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "👁️Buyurtma", 'callback_data' => "e"], ['text' => "💰Tanga berish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "🏢Do'kon", 'callback_data' => "f"], ['text' => "⁉️Yordam", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => "🔎Buyurtmani kuzatish", 'callback_data' => "h"], ['text' => "🗝️Maxsus kod", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "🎁Bonus", 'callback_data' => "j"]
                    ],
                    
                ]
            ])
        ]);
    } elseif (strpos($penlist, "$from_id")) {
        SendMessage($apichatssu, "Do'stim, biz serverni to'sib qo'ydik, yangi xabarlar yo'q.");
    } elseif (strpos($text, '/start') !== false && $schat_username == null) {
        $newid = str_replace("/start ", "", $text);
        if ($from_id == $newid) {
            bot('sendMessage', [
                'chat_id' => $apichatssu,
                'text' => "Siz o'zingizning referalingizga kira olmaysiz!",
            ]);
        } elseif (strpos($list, "$from_id") !== false) {
            SendMessage($apichatssu, "Siz allaqachon ushbu botga azo bo'lgansiz va a'zolik aloqangiz bilan bot a'zosi bo'la 😑 ");
        } else {
            sendAction($apichatssu, 'typing');
            @$sho = file_get_contents("data/$newid/shoklat.txt");
$ran = rand(5, 20);
            $getsho = $sho + $ran;
            file_put_contents("data/$newid/shoklat.txt", $getsho);
            @$sea = file_get_contents("data/$newid/membrs.txt");
            $getsea = $sea + 1;
            file_put_contents("data/$newid/membrs.txt", $getsea);
            $user = file_get_contents('users.txt');
            $members = explode("n", $user);
            if (!in_array($from_id, $members)) {
                $add_user = file_get_contents('users.txt');
                $add_user .= $from_id . "n";
                file_put_contents("data/$apichatssu/membrs.txt", "0");
                file_put_contents("data/$apichatssu/shoklat.txt", "10");
                file_put_contents('users.txt', $add_user);
            }
            file_put_contents("data/$apichatssu/ali.txt", "No");
            sendmessage($apichatssu, "newid$");
            bot('sendmessage', [
                'chat_id' => $apichatssu,
          'text' => "*👋🏻Salom $name. Botimizga xush kelibisiz!
            
Siz ushbu botda kanalingiz postidagi ko'rish(view)larni osongina oshirishingiz mumkin.

Botni kanalingizga admin qiling bo'lmasa botimiz ishlamaydi!

Ishni boshlash uchun quyidagi menyulardan birini tanlang🔻*",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "💰Ball to'plash", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "🔗Referal", 'callback_data' => "b"], ['text' => "⚙️Profilim", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "👁️Buyurtma", 'callback_data' => "e"], ['text' => "💰Tanga berish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "🏢Do'kon", 'callback_data' => "f"], ['text' => "⁉️Yordam", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => "🔎Buyurtmani kuzatish", 'callback_data' => "h"], ['text' => "🗝️Maxsus kod", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "🎁Bonus", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
            SendMessage($newid, "🎉Tabriklaymiz, hozir sizning maxsus referalingiz orqali bir kishi botga kirdi.
Sizda 10 bepul tanga bor. ");
        }
    }
    // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
    elseif ($data == "home") {
    unlink("cod/$chatid.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "🏠Siz bosh menyuga qaytdingiz",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "no");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "*Siz bosh menyuga qaytdingiz!
Quyidagi menyulardan birini tanlang*🔻",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "💰Ball to'plash", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "🔗Referal", 'callback_data' => "b"], ['text' => "⚙️Profilim", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "👁️Buyurtma", 'callback_data' => "e"], ['text' => "💰Tanga berish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "🏢Do'kon", 'callback_data' => "f"], ['text' => "⁉️Yordam", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => "🔎Buyurtmani kuzatish", 'callback_data' => "h"], ['text' => "🗝️Maxsus kod", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "🎁Bonus", 'callback_data' => "j"]
                    ],
                ]
            ])
        ]);
    } elseif ($data == "a") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "💰Siz ball to'plash bo'limidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "💰Ball to'plash bo'limiga xush kelibsiz!


👁️Bu yerda botning kanaliga tashrif buyurib, har bir postning ostidagi •💰BALL💰• tugmasini bosish orqali ball to'plashingiz mumkin.
👁️Kanaldagi faoliyatingiz robot bilan birlashtirilgan bo'lib, sizning hisobingizga darhol ballar yuboriladi.
👁️Ko'rsatilgan reklamalar kanaliga kirish uchun quyidagi  •👁️Kanalga kirish• tugmasini bosishingiz mumkin ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "👁‍Kanalga kirish", 'url' => "https://t.me/$mychannel"]
                    ],
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } elseif ($data == "k") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "🗝️Siz maxsus kod bo'limidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🔻Quyidagi klaviatura yordamida ball ko'paytirish uchun kanalga yuborilgan kodni yuboring!
✔️Keyin tasdiqlash tugmasini bosing, ",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c1") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "1");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c2") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "2");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️
",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c3") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "3");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️
",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c4") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "4");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️
",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c5") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "5");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c6") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "6");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c7") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "7");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c8") {
        $fromm_id = $chatsUP->inline_query->from->id;
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "8");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c9") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "9");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "c0") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "0");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kiritilgan kod:🔻
♣️$cod♣️",
            'reply_markup' => $ptn
        ]);
    } elseif ($data == "chk") {
        $fromm_id = $chatsUP->inline_query->from->id;
        $cod = file_get_contents("cod/$chatid.txt");
        $codes2 = file_get_contents("data/code2.txt");
        if ($cod == $codes && $cod != null) {
            @$sho = file_get_contents("data/$chatid/shoklat.txt");
            $getsho = $sho + $codes2;
            file_put_contents("data/$chatid/shoklat.txt", $getsho);
            unlink("cod/$chatid.txt");
            file_put_contents("data/code.txt", "");
            file_put_contents("data/code2.txt", "");
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "🎉Sovg'a kodi bilan tabriklaymiz!
        $codes2 kodidan olingan tangalar hisobingizga qo'shildi.",
                'show_alert' => true
            ]);
            bot('sendMessage', [
                'chat_id' => $channel2,
                'text' => "$codi kodidan foydalanildi!
 
📄Ma'lumot: 
🆔ID: $chatid
⌚Soat: $fatime

❗Endi bu koddan boshqa foydalanib bo'lmaydi. ",

            ]);
            file_put_contents("data/$chatid/ali.txt", "no");
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "*Siz bosh menyuga qaytdingiz!
Quyidagi menyulardan birini tanlang*🔻",
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "💰Ball to'plash", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "🔗Referal", 'callback_data' => "b"], ['text' => "⚙️Profilim", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "👁️Buyurtma", 'callback_data' => "e"], ['text' => "💰Tanga berish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "🏢Do'kon", 'callback_data' => "f"], ['text' => "⁉️Yordam", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => "🔎Buyurtmani kuzatish", 'callback_data' => "h"], ['text' => "🗝️Maxsus kod", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "🎁Bonus", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
        } else {
            unlink("cod/$chatid.txt");
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗Kiritilgan kod noto'g'ri yoki allaqachon ishlatilgan. Kanalimizni kuzatishda davom eting.",
                'show_alert' => true
            ]);
            file_put_contents("data/$chatid/ali.txt", "no");
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "*Siz bosh menyuga qaytdingiz!
Quyidagi menyulardan birini tanlang*🔻",
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "💰Ball to'plash", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "🔗Referal", 'callback_data' => "b"], ['text' => "⚙️Profilim", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "👁️Buyurtma", 'callback_data' => "e"], ['text' => "💰Tanga berish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "🏢Do'kon", 'callback_data' => "f"], ['text' => "⁉️Yordam", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => "🔎Buyurtmani kuzatish", 'callback_data' => "h"], ['text' => "🗝️Maxsus kod", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "🎁Bonus", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
        }
    } elseif ($data == "b") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "🔗Siz referal bo'limidasiz.",
            'show_alert' => false
        ]);
        bot('sendmessage', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "✔️Postingizdagi ko'rishlarni ko'paytiring!

🔹Kanalingizda postlarni kam ko'rilishidan charchadingizmi?

🔹Odamlar sizning kanalingiz aktiv ekanligini biladimi?

🔹Kanalingizdagi postlar ko'rishini ko'paytirishni xohlaysizmi?

🔹Siz bular uchun tayyormisiz? 


👁️View ko'paytirish uchun botga qo'shiling.
🍁Ball to'plang va kanal ko'rishlarini ko'paytiring!♥ ️

•👁️•   http://telegram.me/$bot?start=$chatid   •👁️•",
        ]);
        bot('sendmessage', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Salom aziz do'stim, referal bo'limiga xush kelibsiz!

Siz do'stlaringizni botga taklif qiling va bepul 10tanga oling.

🔺Tepadagi xabarni do'stlaringizga yuboring ♥",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($data == "j") {
        date_default_timezone_set('Asia/Dushanbe');
        $date = date('Ymd');
        @$gettime = file_get_contents("data/$chatid/dates.txt");
        if ($gettime == $date) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❌Siz kunlik bonus olgansiz, ertagacha kuting⏳",
                'show_alert' => true
            ]);
        } else {
            file_put_contents("data/$chatid/dates.txt", $date);
            @$sho = file_get_contents("data/$chatid/shoklat.txt");
            $ran = rand(10, 30, 25, 55, 15, 70);
            $getsho = $sho + $ran;
            file_put_contents("data/$chatid/shoklat.txt", $getsho);
            $sho2 = file_get_contents("data/$chatid/shoklat.txt");
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "🎉Tabriklaymiz, sizga $ran ball qo'shildi!",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "f") {
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🏢Do'konga xush kelibsiz!

🎯Tanga sotib olish uchun admin ga murojaat qiling ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "💰Sotib olish", 'url' => "https://t.me/$myadmin"]
                    ],
                    [
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.                         
                    ],
                    [
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.                         
                    ],
                        [
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.                         
                    ],
                    [
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.                         
                    ],
                ]
            ])
        ]);
    } elseif ($data == "c") {
        @$sho = file_get_contents("data/$chatid/shoklat.txt");
        @$sea = file_get_contents("data/$chatid/membrs.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "🎯Profilingiz haqida ma'lumotlar🎯
        
🆔ID Manzilingiz: $chatid
💰Hisobingiz: $sho
🔧Obunangiz: $sea",
            'show_alert' => true
        ]);
    } elseif ($data == "g") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⁉️Siz yordam bo'limidasiz.",
            'show_alert' => false
        ]);
        bot('editmessageText', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Menyulardan birini tanlang🔻",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
               [['text' => "📄Qo'llanma", 'callback_data' => "qol"], ['text' => "❗Qoida", 'callback_data' => "pus"]],
[['text' => "🔙Orqaga",'callback_data' => "home"]],
                ]
            ])
        ]);
    }elseif ($data == "qol") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "📄Siz qo'llanma bo'limidasiz.",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Siz bu bot orqali kanalingiz postlarini ko'rish sifatini oshirishingiz mumkin.

Buning uchun •💰Ball to'plash• ni bosing va bot kanaliga kiring!
Bot kanalidagi har bir post tagidagi •💰BALL💰• tugmasini bosib ball to'plang.

Hisobingizdagi ball yetsa siz postingizni kanalimizga joylay olasiz!

Post joylash uchun •👁️Buyurtma• tugmasini bosing va o'zingizga kerakli hisobni tanlang va kanalinigizga aloqador biror postni Forward qilib yuboring.

Bizda •🎁Bonus• ham mavjud har kuni bir marotaba tasodifiy bonus beriladi qancha berishi omadingizga qarab!

Bizda o'zingizni hisobingizdagi tangalarni do'stingizga transfer qilishingiz ham mumkin buning uchun `💰Tanga berish` ni bosing va do'stingiz ID raqamini yuboring!",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "❗Qoida", 'callback_data' => "pus"]
                    ],
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } elseif ($data == "pus") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "♣️Siz qoida bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "❗Bizning talab va shartlarimiz bilan tanishib chiqing!

1⃣ Turli xil diniy, siyosiy va terroristik postlarni tashlash

2⃣ Pornografik turdagi videolar, rasmlar, giflar va boshqa pronografik narsalar tashlash

3⃣ Inson ruhiyatiga zarba beruvchi postlar tashlash

4⃣ Davlat siyosatiga qarshi, millatchilikka aloqador postlar tashlash

5⃣ Yolg'ondan tayyorlangan postlar tashlash

❗Qat'iyan man etiladi va shu hol kuzatilsa siz va kanalingiz bloklanadi!🚫 ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "📄Qo'llanma", 'callback_data' => "qol"]
                    ],
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } 

 elseif ($data == "d") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "📍Tanga transfer qilish bo'limi.",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "for");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "📍Tangangizni transfer qilmoqchi bo'lgan foydalanuvchi ID raqamini yuboring!",
        ]);
    } elseif ($ali == "for") {
        if ($from_id == $forward) {
            SendMessage($apichatssu, "❗Xabaringizni buzmang!");
        } else {
            if (strpos($list, "$forward") !== false) {
                file_put_contents("data/$apichatssu/ali.txt", "fore");
                file_put_contents("data/$apichatssu/for.txt", $forward);
                bot('sendMessage', [
                    'chat_id' => $apichatssu,
                    'text' => "📍$forward foydalanuvchiga transfer qilinadigan tangalar sonini yuboring!",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [
                                ['text' => "🔙Orqaga", 'callback_data' => "home"]
                            ],
                        ]
                    ])
                ]);
            } else {
                SendMessage($apichatssu, "❗Foydalanuvchi bot a'zosi emas");
            }
        }
    } elseif ($ali == "fore") {
        if (preg_match('/^([0-9])/', $text)) {
            if ($shoklt > $text) {
                $fr = file_get_contents("data/$apichatssu/for.txt");
                $fle = file_get_contents("data/$fr/shoklat.txt");
                $fl = file_get_contents("data/$apichatssu/shoklat.txt");
                $s = $text;
                $getsh = $fl - $s;
                file_put_contents("data/$apichatssu/shoklat.txt", $getsh);
                SendMessage($apichatssu, "✔️Sizning tangalaringiz muvaffaqiyatli tranfer qilindi.");
                $getshe = $fle + $s;
                file_put_contents("data/$fr/shoklat.txt", $getshe);
                SendMessage($fr, "🎉Tabriklaymiz, $apichatssu sizga $text tanga transfer qildi.✔️");
            } else {
                SendMessage($apichatssu, "❗Sizda yetarli mablag' yo'q. Sizda minimal 1 tanga qolishi kerak.");
            }
        } else {
            SendMessage($apichatssu, "❗Kechirasiz faqat raqam yuboring!");
        }
    } elseif ($data == "e") {
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $message_id2,
            'text' => "👁️Hurmatli foydalanuvchi kanalingiz postini ko'rish kerak bo'lgan raqamni tanlang✔️",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
               [['text' => "10👁", 'callback_data' => "seen10"],['text' => "20👁", 'callback_data' => "seen20"]],
                    [['text' => "45👁", 'callback_data' => "seen45"],['text' => "80👁", 'callback_data' => "seen80"]],
                    [['text' => "100👁", 'callback_data' => "seen100"],['text' => "130👁", 'callback_data' => "seen130"]],
              [['text' => "200👁", 'callback_data' => "seen200"],['text' => "240👁", 'callback_data' => "seen240"]],
                 [['text' => "300👁", 'callback_data' => "seen300"],['text' => "500👁", 'callback_data' => "seen500"]],
              [['text' => "700👁", 'callback_data' => "seen700"],['text' => "1000👁", 'callback_data' => "seen1000"]],
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    }
elseif ($data == "seen10") {
        file_put_contents("data/$chatid/ted.txt", "10");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } 
        elseif ($data == "seen20") {
        file_put_contents("data/$chatid/ted.txt", "20");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen45") {
        file_put_contents("data/$chatid/ted.txt", "45");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen80") {
        file_put_contents("data/$chatid/ted.txt", "80");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen130") {
        file_put_contents("data/$chatid/ted.txt", "130");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen240") {
        file_put_contents("data/$chatid/ted.txt", "240");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢 ",

                'show_alert' => true
            ]);
        }
    }

elseif ($data == "seen100") {
        file_put_contents("data/$chatid/ted.txt", "100");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen200") {
        file_put_contents("data/$chatid/ted.txt", "200");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen500") {
        file_put_contents("data/$chatid/ted.txt", "500");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen700") {
        file_put_contents("data/$chatid/ted.txt", "700");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢 ",

                'show_alert' => true
            ]);
        }
    } elseif ($data == "seen1000") {
        file_put_contents("data/$chatid/ted.txt", "1000");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        }
    } 

elseif ($data == "seen300") {
        file_put_contents("data/$chatid/ted.txt", "300");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt < $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz yetarli emas💢",
                'show_alert' => true
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "⏳ Kutib turing...",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $messageid2,
                'text' => "📡Reklamangizni ommaviy kanaldan tarqating✔️",
            ]);
        }
    } elseif ($ali == "seen2") {
        if ($schat_username != null) {
            $msg_id = bot('ForwardMessage', [
                'chat_id' => $channel,
                'from_chat_id' => "@$schat_username",
                'message_id' => $schat_msg_id
            ])->result->message_id;
            bot('sendMessage', [
                'chat_id' => $channel,
                'text' => "‌🔺🔺🔺🔘🔻🔻🔻",
                'reply_to_message_id' => $msg_id,
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "💰BALL💰", 'callback_data' => "ok"]
                        ],
                        [['text' => "🤖BOT🤖", 'url' => "https://t.me/$bot"]],
                    ]
                ])
            ]);

            @$al = file_get_contents("data/$apichatssu/ted.txt");
            @$sho = file_get_contents("data/$apichatssu/shoklat.txt");
            $getsho = $sho - $al;
            file_put_contents("data/$apichatssu/shoklat.txt", $getsho);
            @$don = file_get_contents("data/done.txt");
$ran = rand(1, 3);
            $getdon = $don + $ran;
            file_put_contents("data/done.txt", $getdon);
            file_put_contents("ads/cont/$msg_id.txt", $al);
            file_put_contents("ads/date/$msg_id.txt", $fadate);
            file_put_contents("ads/time/$msg_id.txt", $fatime);
            file_put_contents("ads/admin/$msg_id.txt", $apichatssu);
            file_put_contents("ads/seen/$msg_id.txt", "0");
            file_put_contents("ads/user/$msg_id.txt", "");
            file_put_contents("data/$apichatssu/ali.txt", "no");
            bot('sendMessage', [
                'chat_id' => $apichatssu,
                'text' => "✔️Reklamangiz kanalimizga muvaffaqiyatli joylandi!

🔹Reklama shartlari:
🔎Kuzatuv kodi: $msg_id
👁Ko'rish raqami: $al
⏰ So'rovlarni yuborish vaqtlari: $fatime
📆Sana: $fadate

📌Kanalimizga joylangan xabaringizni ko'rish uchun bosing

🔥 http://telegram.me/$mychannel/$msg_id 🔥
",
            ]);
        } else {
            sendmessage($apichatssu, "❗Iltimos, xabarni forward qilib yuboring.");
        }
    }
    // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
    if ($data == "ok") {
        $messageid12 = $chatsUP->callback_query->message->reply_to_message->message_id;
        $fromm_id = $chatsUP->callback_query->from->id;
        @$ue = file_get_contents("ads/user/$messageid12.txt");
        @$se = file_get_contents("ads/seen/$messageid12.txt");
        if (strpos($ue, "$fromm_id") !== false) {
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "Siz allaqachon bu postni qabul qildingiz.❗️",
                'show_alert' => false
            ]);
        } else {
            $user = file_get_contents("ads/user/$messageid12.txt");
            $members = explode("n", $user);
            if (!in_array($fromm_id, $members)) {
                $add_user = file_get_contents("ads/user/$messageid12.txt");
                $add_user .= $fromm_id . "n";
                file_put_contents("ads/user/$messageid12.txt", $add_user);
            }
            $getse = $se + 1;
            file_put_contents("ads/seen/$messageid12.txt", $getse);
            @$sho = file_get_contents("data/$fromm_id/shoklat.txt");
            $getsho = $sho + 1;
            file_put_contents("data/$fromm_id/shoklat.txt", $getsho);
            bot('answercallbackquery', [
                'callback_query_id' => $chatsUP->callback_query->id,
                'text' => "🎉Tabriklaymiz, siz 1 tanga oldingiz!",
                'show_alert' => false
            ]);
        }
        $end = file_get_contents("ads/seen/$messageid12.txt");
        $ad = file_get_contents("ads/admin/$messageid12.txt");
        $co = file_get_contents("ads/cont/$messageid12.txt");
        $te = file_get_contents("ads/time/$messageid12.txt");
        $de = file_get_contents("ads/date/$messageid12.txt");
        if ($end == $co) {
            file_put_contents("data/$apichatssu/ali.txt", "no");
            bot('sendMessage', [
                'chat_id' => $ad,
                'text' => "_Sizning buyurtmangiz_ **$messageid12** _yakunlandi!_

*👁 Siz so'ragan ko'rishlar soni:* $co
*⌚So'rov soati:* $te
*📆So'rov sanasi:* $de
*⏰So'rov tugashi:* $fatme",
                'parse_mode' => "MarkDown"
            ]);
            @$don = file_get_contents("data/done.txt");
            $getdon = $don - 1;
            file_put_contents("data/done.txt", $getdon);
            @$enn = file_get_contents("data/enf.txt");
            $getenf = $enn + 1;
            file_put_contents("data/enf.txt", $getenf);
            $de = $messageid12 + 1;
            deletemessage($channel, $messageid12);
            deletemessage($channel, $de);
            unlink("ads/seen/$messageid12.txt");
            unlink("ads/admin/$messageid12.txt");
            unlink("ads/cont/$messageid12.txt");
            unlink("ads/time/$messageid12.txt");
            unlink("ads/user/$messageid12.txt");
            unlink("ads/date/$messageid12.txt");
        }
    } elseif ($data == "h") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳ Biroz kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "mlm");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "💡Keyingi kodni yuboring.",
        ]);
    } elseif ($ali == "mlm") {
        file_put_contents("data/$apichatssu/ali.txt", "");
        if (file_exists("ads/admin/$text.txt")) {
            $ge = file_get_contents("ads/seen/$text.txt");
            $ad = file_get_contents("ads/admin/$text.txt");
            $co = file_get_contents("ads/cont/$text.txt");
            $te = file_get_contents("ads/time/$text.txt");
            $de = file_get_contents("ads/date/$text.txt");
            bot('sendMessage', [
                'chat_id' => $apichatssu,
                'text' => "$text kuzatish uchun kod quyidagicha!
👁Sizning so'ralgan tashrifingiz: $co
⏰So'rov soati: $te
📆So'rov sanasi: $de
👁️Siz hozirga qadar topgan ko'rishlar soni: $ge
⌚So'rovni bajarilish vaqti: $fatime ",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "🔙Orqaga", 'callback_data' => "home"]
                        ],
                    ]
                ])
            ]);
        } else {
            bot('sendMessage', [
                'chat_id' => $apichatssu,
                'text' => "❗Sizning amaldagi kodingiz noto'g'ri yoki buyurtma bekor qilindi.",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "🔙Orqaga", 'callback_data' => "home"]
                        ],
                    ]
                ])
            ]);
        }
    }

////----
if ($chatid == $ADMIN or $apichatssu == $ADMIN) {
    if ($text == "/panel") {
        file_put_contents("data/$apichatssu/ali.txt", "no");
        sendAction($apichatssu, 'typing');
        bot('sendmessage', [
            'chat_id' => $apichatssu,
            'text' => "🔹Salom. Admin boshqaruv paneliga xush kelibisiz.",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                            ['text' => "👁️Buyurtmalar", 'callback_data' => "am"]
                    ],
                    [
                        ['text' => "💌Xabar yuborish", 'callback_data' => "send"], ['text' => "📬Forward", 'callback_data' => "fwd"]
                    ],
                    [
                        ['text' => "🔐Ban", 'callback_data' => "pen"], ['text' => "🔓Unban", 'callback_data' => "unpen"]
                    ],
                    [
                        ['text' => "🗝️Maxsus kod", 'callback_data' => "crl"],['text' => "👁️Reklama kanali", 'callback_data' => "setc"]
                    ],
                       [
                        ['text' => "🎁Sovg'a", 'callback_data' => "buy"],['text' => "🗝️Maxsus kod kanali", 'callback_data' => "setc2"]
                    ]
                ]
            ])
        ]);
    } elseif ($data == "am") {
        $user = file_get_contents("users.txt");
        $member_id = explode("n", $user);
        $member_count = count($member_id) - 1;
        @$don = file_get_contents("data/done.txt");
        @$enf = file_get_contents("data/enf.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "👥Robot a'zolari soni: $member_count
📣Amaldagi reklamalarning soni: $don
📢Qilingan reklamalar soni: $enf",

            'show_alert' => true
        ]);
    } elseif ($data == "send") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "send");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "♣️Xabaringizni yozing",
        ]);
    } elseif ($ali == "send") {
        file_put_contents("data/$apichatssu/ali.txt", "no");
        $fp = fopen("users.txt", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            sendmessage($ckar, $text);
        }
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "✔️Yuborildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($data == "fwd") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "fwd");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🖊️Xabaringizni yozing",
        ]);
    } elseif ($ali == 'fwd') {
        file_put_contents("data/$apichatssu/ali.txt", "no");
        $forp = fopen("users.txt", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            Forward($fakar, $apichatssu, $messageid);
        }
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "✔️Yuborildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($data == "pen") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "pen");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🆔Kerakli foydalanuchi ID manzilini kiriting",
        ]);
    } elseif ($ali == 'pen') {
        $myfile2 = fopen("data/pen.txt", 'a') or die("Unable to open file!");
        fwrite($myfile2, "$textn");
        fclose($myfile2);
        file_put_contents("data/$apichatssu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "❌Foydalanuvchi bloklandi: $text ",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($data == "unpen") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "unpen");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🆔Kerakli foydalanuchi ID manzilini kiriting",
        ]);
    } elseif ($ali == 'unpen') {
        $newlist = str_replace($text, "", $penlist);
        file_put_contents("data/pen.txt", $newlist);
        file_put_contents("data/$apichatssu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "🔓Foydalanuvchi blokdan olindi: $text ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
    elseif ($data == "setc") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "setc");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "📡Kanalni kiriting
            Misol uchun: @$mychannel",
        ]);
    } elseif ($ali == 'setc') {
        file_put_contents("data/channel.txt", $text);
        file_put_contents("data/$apichatssu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "✔️Kanal kiritildi: $text ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
     elseif ($data == "setc2") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "setc2");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "📡Kanal kiriting
Misol: @$mychannel",
        ]);
    } elseif ($ali == 'setc2') {
        file_put_contents("data/channel2.txt", $text);
        file_put_contents("data/$apichatssu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "✔️Kanal kiritildi: $text ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
    elseif ($data == "crl") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "crl");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "🗝️Kodni kiriting",
        ]);
    } elseif ($ali == 'crl') {
        file_put_contents("data/code.txt", $text);
        file_put_contents("data/$apichatssu/ali.txt", "crl2");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "💰Tanga miqdorini kiriting",
            'parse_mode' => "MarkDown"
        ]);
    } elseif ($ali == 'crl2') {
        $codes = file_get_contents("data/code.txt");
        $codes2 = file_get_contents("data/code2.txt");
        file_put_contents("data/code2.txt", $text);
        file_put_contents("data/$apichatssu/ali.txt", "");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "🎉Kod yaratildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
               $codes = file_get_contents("data/code.txt");
        $codes2 = file_get_contents("data/code2.txt");
        bot('sendMessage', [
            'chat_id' => "@$mychannel",
            'text' => "🔰MAXSUS KOD!🔰

💎Homiy: @KINOUNIVERSE

🔰Kod: $codes

💰Tanga miqdori: $codes2

⌚Vaqti: $fatme

❗Koddan faqatgina bir marta foydalanish mumkin. ",
            ]);
        
        
   // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.  // Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi.      
        
        
    }
     elseif ($data == "buy") {
        bot('answercallbackquery', [
            'callback_query_id' => $chatsUP->callback_query->id,
            'text' => "⏳Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "buy");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $messageid2,
            'text' => "Kerakli ID ni yuboring",
        ]);
    } elseif ($ali == 'buy') {
        file_put_contents("data/buy.txt", $text);
        file_put_contents("data/$apichatssu/ali.txt", "buy2");
        bot('sendMessage', [
            'chat_id' => $apichatssu,
            'text' => "💰Tanga soni",
            'parse_mode' => "MarkDown"
        ]);
    } elseif ($ali == 'buy2') {
    $buy = file_get_contents("data/buy.txt");
          $fle = file_get_contents("data/$buy/shoklat.txt");
               $getshe = $fle + $text;
                file_put_contents("data/$buy/shoklat.txt", $getshe);
        file_put_contents("data/$apichatssu/ali.txt", "");
        bot('sendMessage', [
            'chat_id' => $buy,
            'text' => "🎉Tabriklaymiz, sizga admin tomondan hisobingizga $text tangalar qo'shildi.",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
        bot('sendMessage', [
                    'chat_id' => $apichatssu,
            'text' => "✔️Bajarildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "🔙Orqaga", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    }
// Bu kod @Strongest0305 tomondan @Hacker_Qasoskorlar uchun qayta tuzildi. 
}
?>