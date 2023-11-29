<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favhouse"] = "villa s+3";
$_SESSION["favlocation"] = "sousse";
echo "Session variables are set.";
?>
<?php
echo $_SESSION["favhouse"];
echo $_SESSION ["favlocation"];

?>

</body>
</html>