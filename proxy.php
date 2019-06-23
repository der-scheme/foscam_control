<?php
  error_reporting(E_ALL);

  $redirect_url = $_REQUEST['url'];
   $ch = curl_init();
   
   curl_setopt($ch, CURLOPT_URL, $redirect_url);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   
   print curl_exec($ch);
   
   curl_close($ch);
  
?>
