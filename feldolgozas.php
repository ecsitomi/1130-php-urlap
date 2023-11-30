<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $rendszam=$_POST['rendszam'];
    $marka=$_POST['marka'];
    $modell=$_POST['modell'];
    $gyartas=$_POST['gyartas'];
    $uzemanyag=$_POST['uzemanyag'];
}
?>
<?php
if(empty($rendszam)){
    echo("<br>Adja meg a rendszám adatait.");
    exit();
} elseif(empty($marka)){
    echo("<br>Adja meg a márka adatait.");
} elseif(empty($modell)){
    echo("<br>Adja meg a modell adatait.");
} elseif(empty($gyartas)){
    echo("<br>Adja meg a gyártási évet.");
} elseif(empty($uzemanyag)){
    echo("<br>Adja meg az Üzemanyag adatait.");
} else {
    echo("<p>Minden adat beküldve.</p>");
    $auto=[$rendszam,$marka,$modell,$gyartas,$uzemanyag];
    $file='autok.csv';
    file_put_contents($file, implode(',',$auto).PHP_EOL, FILE_APPEND);
    header("Location: index.php");
    exit();
}
?>
