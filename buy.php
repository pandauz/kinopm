<?php
include("index.php");
$update = json_decode(file_get_contents('php://input'));

$userid = $update->CustomField;
$title = $update->Title;
$code = $update->Code;
$name = $update->Name;
$amount = $update->Amount;

SendMessage("621617473","Siz bilan yangi to'lov edi $amount .
Ixtiyoriy maydon: $userid");

if ($title == "buy50") {
          $fle = file_get_contents("data/$userid/shoklat.txt");
               $getshe = $fle + 50;
                file_put_contents("data/$userid/shoklat.txt", $getshe);
	SendMessage($userid," foydalanuvchi
Sizning sotib olish muvaffaqiyatli yakunlandi.
100 tanga hisobingizga tushdi
Sotib olish uchun rahmat.");
}
elseif ($title == "buy100") {
          $fle = file_get_contents("data/$userid/shoklat.txt");
               $getshe = $fle + 100;
                file_put_contents("data/$userid/shoklat.txt", $getshe);
	SendMessage($userid," foydalanuvchi
Sizning sotib olish muvaffaqiyatli yakunlandi.
250 tanga hisobingizga tushdi
Sotib olish uchun rahmat.");
}
elseif ($title == "buy150") {
          $fle = file_get_contents("data/$userid/shoklat.txt");
               $getshe = $fle + 150;
                file_put_contents("data/$userid/shoklat.txt", $getshe);
	SendMessage($userid," foydalanuvchi
Sizning sotib olish muvaffaqiyatli yakunlandi.
500 tanga hisobingizga tushdi
Sotib olish uchun rahmat.");
}
 elseif ($title == "buy200") {
          $fle = file_get_contents("data/$userid/shoklat.txt");
               $getshe = $fle + 200;
                file_put_contents("data/$userid/shoklat.txt", $getshe);
	SendMessage($userid," foydalanuvchi
Sizning sotib olish muvaffaqiyatli yakunlandi.
700 tanga hisobingizga tushdi
Sotib olish uchun rahmat.");
}
?>
