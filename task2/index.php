<?php
include_once "address.php";

$object = new address();
$object->showContenents();
$object->showChildren(1);
$object->showChildren(2);
echo '<form action="" method="POST" >
Select contenent: <select name="selectContenent">';
$object->contenentOptions();

echo '</select> <br>';

echo 'Select country: <select name="selectCountry">';
$object->childrenOptions(1);

echo '</select>';

echo '<br><input type="submit" value="no action">
</form><br>';

echo '<form action="addChild.php" method="POST" >
child address? <input type="text" name="child"> <br> <br>
parent ID? <input type="text" name="parent">
<input type="submit" >
<br><br>P.S: parent ID = 0 to add a new continent';

?>