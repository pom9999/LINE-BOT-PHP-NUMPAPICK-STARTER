 <?php
  

function send_LINE($msg){
 $access_token = 'fWhCZR9tPczPN0kFQ9yqk9hg62quvsBQRaI4gLSgqOZSFbwiRspmjDBUqArTYqMmSekIWcIVLgPYYVq9ZI99K7GDbDjeEdvt4MrffAhHoLv5xMiAJqwpFXFHA6Jwshd1y4Ab4okbyDDAWrblp7W+zwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U4c04d3b6a02e9e4629230f20293cf6d8',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
