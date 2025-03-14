<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['question'])) {
  $curl = curl_init();
  $str = $_POST['question'];
  $tone = 'you are a web developper looking to help small businesses, explain things simply, in the shortest way possible. You are able to help with bash scripts, python scripts, are familiar with automation and frameworks. Answer this question : '. $str;


// you are a web developper looking to help small businesses, explain things simply, in the shortest way possible. You are able to help with bash scripts, python scripts, are familiar with automation and frameworks.
     // Prepare the payload based on the curl example
    $postdata = array(
        "model" => "command-r-plus-08-2024", // Your model choice
        "messages" => array(
            array(
                "role" => "user",  // This tells the API the message is from the user
                "content" => $tone  // The content of the message
            )
        ),
        "max_tokens" => 100
    );

  $postdata = json_encode($postdata);
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.cohere.com/v2/chat',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postdata,
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer MKwduAmSCejLfi6uZrtlpabDMYolSUKtPE7KKEiD',
       'Accept: application/json' 
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  //echo $response;
  $result = json_decode($response, true);
  $newdate = date('Y-m-d');
  if (array_key_exists("error", $result)) {
    $message = "Oops!  We ran into an issue in :" . $result['error']['message'];
  } else {
    $message =  $result['message']['content'][0]['text'];
  }
  
  $botreply = array("answer" => $message, "received_date" => $newdate);
  
  
  $message_send = $_POST['question'];
  $send_date = date('Y-m-d');
  $message_received = $botreply['answer'];
  $received_date = $botreply['received_date'];
  
?>

  <div class="message sent">
    <div class="text"><?= $message_send; ?></div>
    <div class="time"><?= $send_date ?></div>
  </div>
  <div class="message received">
    <div class="avatar"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="User Avatar"></div>
    <div class="text"><?= $message_received ?></div>
    <div class="time"><?= $received_date ?></div>
  </div>

<?php
}
?>