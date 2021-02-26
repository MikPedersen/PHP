<html>
<body>
<h1>Velkommen til pære beregneren</h1>
<h2>Hvis du skriver dit navn kan vi beregne hvor mange venner du skal ringe til for at skifte en el-pære
</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Husk at udfylde dit navn";
  } else {

    echo "Super ". $name. " , du skal ringe til " . rand(5, 15) . " venner, bare for at være sikker! :)";
  }
}
?>

</body>
</html>