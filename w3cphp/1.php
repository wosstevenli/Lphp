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

/* $txt="Hello World";  //�������
echo $txt;
 */

/* $txt1="Hello World";  //��������� (.) ���ڰ������ַ���ֵ����������
$txt2="1234";
echo $txt1 . " " . $txt2; */
//echo strlen("Hello world!");  //strlen() �������ڼ����ַ����ĳ��ȡ�����������ַ��� "Hello world!" �ĳ��ȣ�

//echo strpos("Hello moto!","moto");//strpos() �����������ַ����ڼ���һ���ַ�����һ���ַ���������ַ������ҵ�ƥ�䣬�ú����᷵�ص�һ��ƥ���λ�á����δ�ҵ�ƥ�䣬�򷵻� FALSE����������һ�£��ǲ��������ַ������ҵ����ַ��� "moto"��

/* $d=date("D");  //if....else��� date����D����Ϊ�����ж����
if ($d=="Fri")
  echo "Have a nice weekend!"; 
else
  echo "Have a nice day!";  */
  
/* $d=date("D");  //������
if ($d=="Fri")
  {
  echo "Hello!<br>"; 
  echo "Have a nice weekend!<br>";
  echo "See you on Monday!<br>";
  } */
  
/*  $d=date("D");  //������1
if ($d=="Fri")
  {
  echo "Hello!Have a nice weekend!See you on Monday!";
  } */
  
/*   $d=date("D");  //if...else  elseif��ʹ�÷���
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
echo "���ܻ�������";
break;
case tuesday:
echo "���ܻ�������";
break;
case wednesday:
echo "���ܻ�������";
break;
case thursday:
echo "���ܻ���һ��";
break;
case ��fri��:
echo "���������ͷż���";
break;
case saturday:
echo "����˯������";
break;
case sunday:
echo "����������Ҫ�ϰ��ˣ�";
break;
default:
  echo "�ѵ��������ڰ˰���";
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