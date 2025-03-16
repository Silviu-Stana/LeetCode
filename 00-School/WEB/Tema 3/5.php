<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a=0; $b=0;
    if (isset($_POST['a'])) $a = $_POST['a'];
    if (isset($_POST['b'])) $b = $_POST['b'];
    
    $p=$a;
    
    while($b>1){
        $p=$p*$a;
        $b=$b-1;
    }
}

echo "a^b: " . ($p);
?>
