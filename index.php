<?php
$expire=time()+60*60*24*30;
$name="Jonas Oestman";
setcookie("user", $name, $expire);
?>
<html>
<body>


<?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>

</body>
</html> 