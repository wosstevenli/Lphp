<?php 
setcookie("user", "Alex Porter", time()+3600);  //����cookie
?>
<html>
<body>
<?php
if (isset($_COOKIE["user"]))   //����Ƿ�����cookie���������ʾcookie���ƣ����û������ʾΪguest�û�
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>
</body>
</html>