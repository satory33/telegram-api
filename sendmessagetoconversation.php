<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.telegram.org/bot*TOKEN*/sendMessage?chat_id=*CHAT_ID*&text=*MESSAGE TEXT*");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, GET);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$result_curl = json_decode(curl_exec($curl), true);
$error_curl = curl_error($curl);
if(isset($result_curl)) {
curl_close($curl);
mysqli_close($link);
}
?>
