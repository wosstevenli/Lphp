<?php
/* $con = mysql_connect("localhost","root","root");  //向表单my_sql_01中插入数据
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')");
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')");
mysql_close($con); */

/* $con = mysql_connect("localhost","root","root");  //查询表单my_sql_01中项目
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT * FROM Persons");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }
mysql_close($con); */

/* $con = mysql_connect("localhost","root","root");  //查询表单my_sql_01中项目，以表格的形式输出
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT * FROM Persons");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con); */

/* $con = mysql_connect("localhost","root","root");  //从 "Persons" 表中选取所有 FirstName='Peter' 的行
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT * FROM Persons WHERE FirstName='Peter'");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  } */

/* $con = mysql_connect("localhost","root","root");  //查询数据以某一种方式排列,默认以升序
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT * FROM Persons order by age");
while($row = mysql_fetch_array($result))
  {
 echo $row['FirstName'];
  echo " " . $row['LastName'];
  echo " " . $row['Age'];
  echo "<br />";
  } */
 /* $con = mysql_connect("localhost","root","root");  //查询数据以某一种方式排列，DESC以降序排列
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT * FROM Persons order by age DESC");
while($row = mysql_fetch_array($result))
  {
 echo $row['FirstName'];
  echo " " . $row['LastName'];
  echo " " . $row['Age'];
  echo "<br />";
  }  */
  
  /* $con = mysql_connect("localhost","root","root");  //查询数据以多种条件排列，只有第一种相同时才会用到第二个条件
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
$result = mysql_query("SELECT Peter FROM Persons order by column_name1, column_name2");
while($row = mysql_fetch_array($result))
  {
 echo $row['FirstName'];
  echo " " . $row['LastName'];
  echo " " . $row['Age'];
  echo "<br />";
  }  */
  
/* $con = mysql_connect("localhost","root","root");  //更新数据FirstName = 'Peter' AND LastName = 'Griffin'的人的年纪改为38，数据由之前的35更新为38
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
mysql_query("UPDATE Persons SET Age = '38'
WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
mysql_close($con); */

/* $con = mysql_connect("localhost","root","root");  //删除数据
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
mysql_query("DELETE FROM Persons WHERE FirstName = 'WAN' ");
mysql_close($con); */


?>