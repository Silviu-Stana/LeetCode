<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($b == $a + 1 && $c == $b + 1) {
            echo "DA sunt consecutive";
        } else {
            echo "NU sunt consecutive";
        }
    }
}
?>
