<?php
$thisPage = basename ($_SERVER['PHP_SELF']); 
?> <!-- search for the name of the current site. -->

<div id="menu1">
<img src="img/header.jpg">
<ul>
<li <?php if ($thisPage=="index.php")   // If the current page is index.php then make the id (for li) "currentpage"
echo " id='currentpage'"; ?>>
<a href="index.php">Registrering</a></li>

<li<?php if ($thisPage=="side2.php") 
echo " id=\"currentpage\""; ?>>
<a href="side2.php">Om Os</a></li>

<li<?php if ($thisPage=="side3.php") 
echo " id=\"currentpage\""; ?>>
<a href="side3.php">Billeder</a></li>

<li<?php if ($thisPage=="side4.php")
echo " id=\"currentpage\""; ?>>
<a href="side4.php">Dagbog</a></li>
</div>




<!-- ########################### LOGIN BEGINS #################################
	 ########################################################################### -->
<!-- avoiding sql injections with the "htmlspecialchars"-->
<form method="post" class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p>Username:<br>
  <input type="text" name="userreg" required><br></p>
  <p>Password:<br>
  <input type="password" name="passreg" required></p>
  <input type="submit" class="button" name="login" value="Login">
</form>

<?php
 if (isset($_POST['login'])) {   // refering to the "login" in the submit input.
    require_once("connect_db.php");
    
 	
	$user = filter_input(INPUT_POST, 'userreg'); //the username written in the form
	$passinput = filter_input(INPUT_POST, 'passreg'); //the password writen in the form
    // formulating the sql queri as PHP string
    $sql = "SELECT id, pass FROM login WHERE user = ?";
    

$stmt = $connection->prepare($sql);
$stmt->bind_param('s', $user);
$stmt->execute();

$stmt->bind_result($uid, $pwHash);

    if($stmt->fetch()){		
        $passinput = $passinput;
		$pwHash = $pwHash;
		// echo "UID = " . $uid . "<br> Password = " . $passinput . "<br> Pass2 = " . $pwHash . "<br>"; // Test echo
		if (password_verify($passinput, $pwHash)) {
			$_SESSION['uid'] = $uid;
		header("Refresh:0");
		} else {
			echo 'det fejlede';
		}
 	}	
 }
 ?> 
 

<!--<form method="post">
<input type="submit" name="logout" value="logout">
</form>
 
<?php if(isset($_POST['logout'])) {
	include("logout.php");
	header("Refresh:0");

}
?>-->

