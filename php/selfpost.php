<html>
<head></head>
<body>
<h2>User Info Form</h2>

<form method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>>
Name : <input type=text name="thename"/><br>
Age : <input type=text name="theage"/><br>
<input type=submit name='submit' value="submit"/>
</form>

<?php 
if(isset($_POST['submit'])) {
?>
<h2>User Info</h2>
Name : <?php print $_POST['thename']?><br>
Age : <?php print $_POST['theage']?><br>
<?php } ?>
</body>
</html>