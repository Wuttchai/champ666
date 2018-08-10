<!DOCTYPE html>
<html>
<body>

<?php
$numon = rand(0,9);
$numdown = rand(0,9);

echo(" วิ่งบน : " .$numon . "<br>");
$numold = [];
$numold2 = [];
for ($i=0; $i < 4; $i++) {

if ($i == 0) {
  do {
      $numrand = rand(0,9).$numon;
  } while ($numrand == $numold);
}
if ($i == 1) {
  do {
      $numrand = rand(0,9).$numon;
  } while ($numrand == $numold[$i-1]);
}
if ($i == 2) {
  do {
      $numrand = rand(0,9).$numon;
  } while ($numrand == $numold[$i-1] || $numrand == $numold[$i-2]);
}
if ($i == 3) {

  do {
      $numrand = rand(0,9).$numon;
  } while ($numrand == $numold[$i-1] || $numrand == $numold[$i-2] || $numrand == $numold[$i-3]);
}
  echo($numrand);  echo "  ";
  $numold[$i] = $numrand;
}

echo "<br>";

echo(" วิ่งล่าง : " .$numdown . "<br>");
for ($i=0; $i < 4; $i++) {
  if ($i == 0) {
    do {
        $numrand = rand(0,9).$numdown;
    } while ($numrand == $numold2);
  }
  if ($i == 1) {
    do {
        $numrand = rand(0,9).$numdown;
    } while ($numrand == $numold2[$i-1]);
  }
  if ($i == 2) {
    do {
        $numrand = rand(0,9).$numdown;
    } while ($numrand == $numold2[$i-1] || $numrand == $numold2[$i-2]);
  }
  if ($i == 3) {

    do {
        $numrand = rand(0,9).$numdown;
    } while ($numrand == $numold2[$i-1] || $numrand == $numold2[$i-2] || $numrand == $numold2[$i-3]);
  }

    echo($numrand);  echo "  ";
    $numold2[$i] = $numrand;
}
echo "<br>";

?>

</body>
</html>
