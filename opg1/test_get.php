<?php
$cookie_name = "user";
$cookie_value = $_GET["firstName"] . ' ' . $_GET["surName"];
setcookie($cookie_name, $cookie_value, time() + (600 * 30), "/"); // tiden vi gemmer cookien 600 = 10 mins
?>
<html>
<body>

Velkommen <?php echo $_GET["firstName"] . ' ' .$_GET["surName"]; ?><br>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
}
?>
Jeg vil kalde dig: <?php echo 'Fjodor Dostoyevsky!'; ?>

</body>
</html>