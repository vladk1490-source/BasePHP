<html>
<head></head>
<body>
<?php echo "Привет " . @$_GET["fname"] . " " . @$_GET["lname"]; ?>
<br>
<?php var_dump($_GET); ?>
<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" style="width: 200px"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" style="width: 200px"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>