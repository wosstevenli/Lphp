<html>
<body>
<?php  //打开文件
//$file=fopen("welcome1.txt","r"); 
/* function customError($errno, $errstr) //自定义错误处理
 { 
 echo "<b>Error:</b> [$errno] $errstr<br />";
 echo "Ending Script";
 die();
 } */

//$file=fopen("welcome.txt","r") or exit("Unable to open file!");if(!file_exists("welcome.txt"))
/* if(!file_exists("welcome.txt"))  //检测文件是否存在的错误处理问题
 {
 die("File not found");
 }
else
 {
 $file=fopen("welcome.txt","r");
 } */
 
/*  //error handler function
function customError($errno, $errstr)
 { 
 echo "<b>Error:</b> [$errno] $errstr";
 }

//set error handler
set_error_handler("customError");

//trigger error
echo($test); */

/* $test=2;
if ($test>1)
{
trigger_error("Value must be 1 or below");
} */

/* //error handler function
function customError($errno, $errstr)
 { 
 echo "<b>Error:</b> [$errno] $errstr<br />";
 echo "Ending Script";
 die();
 }

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>1)
 {
 trigger_error("Value must be 1 or below",E_USER_WARNING);
 } */
 
 /* //error handler function  //通过 E-Mail 发送错误消息
function customError($errno, $errstr)
 { 
 echo "<b>Error:</b> [$errno] $errstr<br />";
 echo "Webmaster has been notified";
 error_log("Error: [$errno] $errstr",1,
 "someone@example.com","From: webmaster@example.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>1)
 {
 trigger_error("Value must be 1 or below",E_USER_WARNING);
 } */
 
?>
</body>
</html>