<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['a'])) $a = $_POST['a'];
    if (isset($_POST['b'])) $b = $_POST['b'];
}

echo "Perimetru: " . (2 * ($a + $b)) . "<br>";
echo "Aria: " . ($a * $b);
?>
