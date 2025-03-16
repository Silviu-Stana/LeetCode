<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a=0; $b=0;
    if (isset($_POST['a'])) $a = $_POST['a'];
    if (isset($_POST['b'])) $b = $_POST['b'];
    
    if($a>=$b) echo "'a' trebuie sa fie mai mic decat 'b'";
    else{
        for ($i=$a; $i <$b ; $i++) { 
            if($i % 2 == 1) echo ($i) . "  ";
        }
    }
}
?>
