<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
    }

    $b = $_POST['b'];
}



echo "Suma 2 nr: " . ($a + $b);
