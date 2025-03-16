<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n=0;
    if (isset($_POST['n'])) $n = $_POST['n'];
    for ($i=0; $i <= $n ; $i++) { 
        if($i % 2 == 0) echo ($i) . ", ";
    }
}?>
