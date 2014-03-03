<?php
phpinfo();
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = getRealIpAddr();
$date = date ("d/m/Y:H:i:s");
$page = $_SERVER['SCRIPT_FILENAME'];
$message = "$date _ $ip _ $page\n"; 
$File = "log.txt";
$Open = fopen($File, "a+"); 
if ($Open){ 
    fwrite($Open, "$message"); 
    fclose ($Open); 
}
?>
