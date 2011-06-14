<html>
<head></head>
<body id="userHome">
<?php

?>
<div id = "container">
	<div id="site_header">
		<h1>FavCollect</h1>
	</div>
	<div id="main_nav">
		<li>
			<ul>Home</ul>
			<ul>About</ul>
			<ul>Sign up</ul>
			<ul>Login</ul>
		</li>
	</div>
	<div id="page_header">
		<h2>User Home</h2>
	</div>
	<form method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
	Link : <input type=text name="thelink"/><br>
	tag : <input type=text name="thetags"/><br>
	<input type=submit name='submit' value="submit"/>
	</form>

	<?php 
	if(isset($_POST['submit'])) {
	?>
	
	<h2>Recent Link Added</h2>
	Link : <?php print $_POST['thelink']?><br>
	Tag: <?php print $_POST['thetags']?><br>
	<?php } ?>
</div>
</body>
</html>