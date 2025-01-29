<!DOCTYPE html>
<html>
<body>

<?php
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Kapoor", "Ram", "Ranbir", "Ramesh");
echo $a;
?>

</body>
</html>
