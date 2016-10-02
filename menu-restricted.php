<?php 
$thisPage = basename ($_SERVER['PHP_SELF']); 
?> 
<!-- search for the name of the current site. -->
<div id="menu2">
<img src="img/header.jpg">
<ul>
<li <?php if ($thisPage=="index.php")   // If the current page is index.php then make the id (for li) "currentpage"
echo " id=\"currentpage\""; ?>>
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

<li<?php if ($thisPage=="side5.php") 
echo " id=\"currentpage\""; ?>>
<a href="side5.php">Hemmelig side</a></li>
</ul>
</div>

<form method="post">
<input type="submit" name="logout" value="logout" class="logout">
</form>
 
<?php if(isset($_POST['logout'])) {
	include("logout.php");
	header ('Location: index.php');

}
?>