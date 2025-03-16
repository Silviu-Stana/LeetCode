<?php
$suma=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n'])) {
        $n = $_POST['n'];

        for($i=1; $i<=$n; $i++) if($i % 2 == 0) $suma+=$i;
    }
    echo "Suma nr pare mai mici decat n este: " . ($suma);
}
?>
