<html>
<body>

<?php
//echo "Hello World";

//This is a comment

/*
This is
a comment
block
*/

/* $txt="Hello World";  //输出变量
echo $txt;
 */

/* $txt1="Hello World";  //并置运算符 (.) 用于把两个字符串值连接起来。
$txt2="1234";
echo $txt1 . " " . $txt2; */
//echo strlen("Hello world!");  //strlen() 函数用于计算字符串的长度。让我们算出字符串 "Hello world!" 的长度：

//echo strpos("Hello moto!","moto");//strpos() 函数用于在字符串内检索一段字符串或一个字符。如果在字符串中找到匹配，该函数会返回第一个匹配的位置。如果未找到匹配，则返回 FALSE。让我们试一下，是不是能在字符串中找到子字符串 "moto"：

/* $d=date("D");  //if....else语句 date（“D”）为星期判断语句
if ($d=="Fri")
  echo "Have a nice weekend!"; 
else
  echo "Have a nice day!";  */
  
/* $d=date("D");  //多段输出
if ($d=="Fri")
  {
  echo "Hello!<br>"; 
  echo "Have a nice weekend!<br>";
  echo "See you on Monday!<br>";
  } */
  
/*  $d=date("D");  //多段输出1
if ($d=="Fri")
  {
  echo "Hello!Have a nice weekend!See you on Monday!";
  } */
  
/*   $d=date("D");  //if...else  elseif的使用方法
if ($d=="Fri")
  echo "Have a nice weekend!"; 
elseif ($d=="Sun")
  echo "Have a nice Sunday!"; 
else
  echo "Have a nice day!";  */
  
/*   switch ($x)
{
case 1:
  echo "Number 1";
  break;
case 2:
  echo "Number 2";
  break;
case 3:
  echo "Number 3";
  break;
default:
  echo "No number between 1 and 3";
} */
  
 /*  $d=date("D"); 
switch ($d)  
{
case monday:
echo "本周还有四天";
break;
case tuesday:
echo "本周还有三天";
break;
case wednesday:
echo "本周还有两天";
break;
case thursday:
echo "本周还有一天";
break;
case “fri”:
echo "今天上完班就放假了";
break;
case saturday:
echo "今天睡懒觉了";
break;
case sunday:
echo "哎！明天又要上班了！";
break;
default:
  echo "难道还有星期八啊！";
}  */

/* $names[0] = "Peter";
$names[1] = "Quagmire";
$names[2] = "Joe";
echo $names[1] . " and " . $names[2] . " are ". $names[0] . "'s neighbors"; */

/* $families = array
(
  "Griffin"=>array
  (
  "Peter",
  "Lois",
  "Megan"
  ),
  "Quagmire"=>array
  (
  "Glenn"
  ),
  "Brown"=>array
  (
  "Cleveland",
  "Loretta",
  "Junior"
  )
);
echo "Is " . $families['Griffin'][2] . 
" a part of the Griffin family?";  */

/* $i=1;
while($i<=5)
  {
  echo "The number is " . $i . "<br />";
  $i++;
  } */

 /*  $i=0;
do
  {
  $i++;
  echo "The number is " . $i . "<br />";
  }
while ($i<5); */

/* for ($i=1; $i<=5; $i++)
{
  echo "Hello World!<br />";
} */
  
 /*  $arr=array("one", "two", "three");

foreach ($arr as $value)
{
  echo "Value: " . $value . "<br />";
} */

/* function writeMyName()
  {
  echo "stevenli";
  }

writeMyName();
 */  
 
 /* function writeMyName()
  {
  echo "David Yang";
  }

echo "Hello world!<br />";
echo "My name is ";
writeMyName();
echo ".<br />That's right, ";
writeMyName();
echo " is my name."; */

/* function writeMyName($fname)
  {
  echo $fname . " Yang.<br />";
  }

echo "My name is ";
writeMyName("David");

echo "My name is ";
writeMyName("Mike");

echo "My name is ";
writeMyName("John"); */

/* function writeMyName($fname,$punctuation)
  {
  echo $fname . " Yang" . $punctuation . "<br />";
  }

echo "My name is ";
writeMyName("David",".");

echo "My name is ";
writeMyName("Mike","!");

echo "My name is ";
writeMyName("John","..."); */

/* function add($x,$y)
  {
  $total = $x + $y;
  return $total;
  }

echo "1 + 16 = " . add(1,16); */


 
?>
</body>
</html>