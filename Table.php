<!DOCTYPE html>
<html>
<body>

<?php
$books = array("Mathematics", "Sains", "English", "Java", "Social");
$colors = array("blue", "green", "black", "pink", "yellow");
$page = array("thick", "thin", "thin", "thick", "thin");

echo "<table border='1'>";
for($i=0; $i < count($books); $i++) {
echo "<tr><td> $books[$i] </td><td> $colors[$i] </td><td> $page[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>