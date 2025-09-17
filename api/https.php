<?php

$lines = file("https://raw.githubusercontent.com/Firmfox/Proxify/refs/heads/main/proxies/https.txt");

$lines = file("https://raw.githubusercontent.com/74647/Proxify/main/proxies/https.txt");

foreach($lines as $line)
{
echo ("$line" . "<br/>"); 
}

?>