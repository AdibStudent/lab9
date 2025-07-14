<!DOCTYPE html>
<html>
<head><title>GET Example</title></head>
<body>

<?php
if (isset($_GET["name"])) {
    echo "<p>Hi, " . $_GET["name"] . "</p>";
}
?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label>Name:</label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>
