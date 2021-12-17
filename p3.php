<?php 
   
  $fb = fopen('t.txt','r'); 
  $txt=fgets($fb,1024);//resource, no of character.....
echo $txt;

?>																																