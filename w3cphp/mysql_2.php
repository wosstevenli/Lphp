<?php
/* $con = mysql_connect("localhost","root","root");  //���my_sql_01�в�������
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

/* $con = mysql_connect("localhost","root","root");  //��ѯ��my_sql_01����Ŀ
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

/* $con = mysql_connect("localhost","root","root");  //��ѯ��my_sql_01����Ŀ���Ա�����ʽ���
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

/* $con = mysql_connect("localhost","root","root");  //�� "Persons" ����ѡȡ���� FirstName='Peter' ����
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

/* $con = mysql_connect("localhost","root","root");  //��ѯ������ĳһ�ַ�ʽ����,Ĭ��������
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
 /* $con = mysql_connect("localhost","root","root");  //��ѯ������ĳһ�ַ�ʽ���У�DESC�Խ�������
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
  
  /* $con = mysql_connect("localhost","root","root");  //��ѯ�����Զ����������У�ֻ�е�һ����ͬʱ�Ż��õ��ڶ�������
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
  
/* $con = mysql_connect("localhost","root","root");  //��������FirstName = 'Peter' AND LastName = 'Griffin'���˵���͸�Ϊ38��������֮ǰ��35����Ϊ38
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
mysql_query("UPDATE Persons SET Age = '38'
WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
mysql_close($con); */

/* $con = mysql_connect("localhost","root","root");  //ɾ������
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_sql_01", $con);
mysql_query("DELETE FROM Persons WHERE FirstName = 'WAN' ");
mysql_close($con); */


?>