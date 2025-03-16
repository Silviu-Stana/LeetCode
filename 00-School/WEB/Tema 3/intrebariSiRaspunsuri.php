<?php

$scor = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['1a'])) {
        $a1 = $_POST['1a'];
        $b1 = $_POST['1b'];

        if ($a1 === '1') {
            $scor += 1;
        }
    }

    if (isset($_POST['2a']) || isset($_POST['2b'])) {
        $a2 = $_POST['2a'];
        $b2 = $_POST['2b'];

        if ($a2 === '1') $scor += 1;
    }

    echo "Scor final: " . ($scor) . "/2";
}
