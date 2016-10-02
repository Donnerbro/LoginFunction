<?php session_start(); ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<title>side4</title>
</head>
<body>

<div id="menu">
<?php if (!isset($_SESSION['uid'])){
 include 'menu.php'; // benyt filen "menu.php"
 } else {  
 include 'menu-restricted.php';}
?>
</div>

<h1>Ti hi, det her er side 4</h1>

</body>
</html>
