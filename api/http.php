<?php

$lines = file("https://raw.githubusercontent.com/Firmfox/Proxify/refs/heads/main/proxies/http.txt");

$lines = file("https://raw.githubusercontent.com/74647/Proxify/main/proxies/http.txt");

foreach($lines as $line)
{
echo ("$line" . "<br/>"); 
}

?>