<?php

$lines = file("https://raw.githubusercontent.com/Firmfox/Proxify/refs/heads/main/proxies/socks5.txt");

$lines = file("https://raw.githubusercontent.com/74647/Proxify/main/proxies/socks5.txt");

foreach($lines as $line)
{
echo ("$line" . "<br/>"); 
}

?>