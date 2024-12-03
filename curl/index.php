<?php
 
// From URL to get webpage contents.
$url = "https://dummyjson.com/todos";
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
 
$result = curl_exec($ch);
 
// echo $result;

$data = json_decode($result, true);

// echo '<pre>';
// print_r($data);
// echo '</pre>';

$todos = $data['todos'];

foreach($todos as $todo) {
  echo $todo['id'] . ' - ' . $todo['todo'] . '<br/>';
}

