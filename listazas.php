<?php
$autok=[];
$file='autok.csv';
if(file_exists($file)){
    $autok=array_map('str_getcsv', file($file));
}
?>

<table>
    <tr>
        <th>Rendszám</th>
        <th>Márka</th>
        <th>Modell</th>
        <th>Gyártás</th>
        <th>Üzemanyag</th>
    </tr>
    <?php foreach ($autok as $auto): ?>
        <tr>
            <?php foreach ($auto as $adat): ?>
                <td><?php echo htmlspecialchars($adat); ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>