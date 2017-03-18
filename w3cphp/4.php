<?php
/* require("wrongFile.php");
echo "Hello World!"; */
/* include("wrongFile.php");
echo "Hello World!"; */
//$file=fopen("welcome.txt","r");
/* $file = fopen("welcome.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file); */
$file=fopen("welcome.txt","r") or exit("Unable to open file!");
while (!feof($file)) 
  { 
  echo fgetc($file); 
  }
fclose($file);
?>
