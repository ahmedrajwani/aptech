
<?php
$favcolor = "green";

switch ($favcolor) {
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "red":
    echo "Your favorite color is red!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";

$d = 3;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}