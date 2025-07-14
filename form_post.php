<!DOCTYPE html>
<html lang="en">
<head><title>POST Example</title></head>
<body>

<?php
if (isset($_POST["name"])) {
    echo "<p>Hi, " . $_POST["name"] . "</p>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label>Name:</label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>
