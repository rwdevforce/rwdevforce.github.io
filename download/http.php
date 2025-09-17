<?php

$file = 'https://raw.githubusercontent.com/Firmfox/Proxify/refs/heads/main/proxies/http.txt';
$file = 'https://raw.githubusercontent.com/74647/Proxify/main/proxies/http.txt';
header("Cache-Control: public"); 
header("Content-Description: File Transfer"); 
header("Content-Disposition: attachment; filename=$file"); 
header("Content-Type: application/txt"); 
header("Content-Transfer-Encoding: binary"); 
readfile($file);

?>