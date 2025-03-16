<?php

$sum = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n'])) {
        $n = $_POST['n'];

        for ($i = 0; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "Suma de la 1 la " . ($n) . " este " . ($sum);
    }
}
