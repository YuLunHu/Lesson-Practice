<?php 
session_start();
if (isset($_SESSION["userName"]))
  $sUserName = $_SESSION["userName"];
else 
  $sUserName = "Guest";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF"><?php echo "會員系統 - 首頁" ?></font></td>
  </tr>
  <tr>
  
  <?php if ($sUserName == "Guest"): ?>
    <td align="center" valign="baseline"><a href="login.php">登入</a> 
  <?php else: ?>
    <td align="center" valign="baseline"><a href="login.php?logout=1">登出</a>
  <?php endif; ?>
    
    | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><?php echo "Welcome! " . $sUserName ?> </td>
  </tr>
</table>


</body>
</html>