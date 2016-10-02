<?php session_start(); ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<title>Hello Kitty</title>
</head>
<body>


<div id="menu">
<?php if (!isset($_SESSION['uid'])){
 include 'menu.php'; // benyt filen "menu.php"
 } else {  
 include 'menu-restricted.php';}
?>
</div>

<!-- #######################################################################
     ############################# REGISTRATION ############################
     ####################################################################### -->
<form class="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username:<br>
  <input type="text" name="user" required><br>
  Password:<br>
  <input type="text" name="pass" required style="clear:both;">
  <input type="submit" value="Registrer" name="registrer" class="reg-button">
</form>

<?php

if (isset($_POST['registrer'])) { // If the submit button (registrer) has been clicked, then run the code in the {}. 
require_once("connect_db.php");
$user = filter_input(INPUT_POST, 'user'); //the username written in the form
$passinput = filter_input(INPUT_POST, 'pass'); //the password writen in the form
$pass = password_hash($passinput, PASSWORD_DEFAULT);// the password given to us after it's been through the Hash-algorithm

$sql = "INSERT INTO login (user, pass) VALUES (?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param('ss', $user, $pass);
$stmt->execute();

// user feedback
echo password_verify($passinput, $pass) ? 'Bruger oprettet' : 'Noget gik galt!';
}
?>
<!-- ########################### REGISTRATION ENDS ############################# -->




</body>
</html>
