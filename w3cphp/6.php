<?php 
setcookie("user", "Alex Porter", time()+3600);  //设置cookie
?>
<html>
<body>
<?php
if (isset($_COOKIE["user"]))   //检测是否设置cookie，如果有显示cookie名称，如果没有则显示为guest用户
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>
</body>
</html>