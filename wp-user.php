<?php

    echo "##############################\n";
    echo "#      Search User WP        #\n";
    echo "#  MarsHall - AnarchoXploit  #\n";
    echo "##############################\n";
    echo "Target : ";
    $target = trim(fgets(STDIN));
    
 
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}
$kontol = http_request("https://ostc.herokuapp.com/api/v1/userwp?q=$target");
$kontol = json_decode($kontol, TRUE);

print_r($kontol);
?>