<?php
session_start();
if (!isset($_SESSION['uid'])) {
?>
 <meta http-equiv="refresh" content="0; url=../index.php"  />  
<?php
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<title>side5</title>
</head>
<body>

<div id="menu">
<?php if (!isset($_SESSION['uid'])){
 include 'menu.php'; // benyt filen "menu.php"
 } else {  
 include 'menu-restricted.php';}
?>
</div>

<h1>Så er der ikke flere sider :) </h1>

</body>
</html>
