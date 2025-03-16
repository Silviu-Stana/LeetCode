<?php
$raspunsuri_corecte = [0,2, 1, 2, 3, 1, 2, 3, 1, 2, 3]; //primul indice este 0 ca sa incepem de la 1
$scor=0;
$raspunsuri_text = [
    "1" => "b) Acordă prioritate vehiculelor din drumul principal",
    "2" => "b) Oprire obligatorie la intersecție",
    "3" => "c) Viteză maximă admisă",
    "4" => "b) Intersecție cu drum fără prioritate",
    "5" => "b) Interzis a vira la stânga",
    "6" => "a) Loc unde pietonii au prioritate",
    "7" => "a) Drum în reparații",
    "8" => "a) Interzis pentru vehicule",
    "9" => "a) Cale ferată fără bariere",
    "10" => "b) Circulație într-un singur sens"
];


//For de la Buton1 la Buton10
for ($i = 1; $i < 11; $i++) {
    $buton = $_POST["Buton$i"];
    echo "<hr/>Răspuns întrebare " . ($i) . ": ";
    if ($buton == $raspunsuri_corecte[$i]) {
        echo "CORECT<br/><br/><br/>";
        $scor += 1;
    } else {
        echo "GRESIT<br/>";
        echo "Raspunsul corect era: <br/>";
        echo "<b>" . ($raspunsuri_text[$i]) . "</b><br/><br/>";
    }
}

echo "<br><br><br>Punctaj final: " . ($scor) . "/10";
?>
