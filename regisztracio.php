<form action="feldolgozas.php" method="post">
    <label for="rendszam">Rendszám</label>
    <input type="text" name="rendszam">

    <label for="marka">Márka</label>
    <input type="text" name="marka">

    <label for="modell">Modell</label>
    <input type="text" name="modell">

    <label for="gyartas">Gyártási év</label>
    <input type="text" name="gyartas">
    
    <label for="uzemanyag">Üzemanyag típusa</label>
    <select name="uzemanyag" id="">
        <option value="benzin">Benzin</option>
        <option value="dizel">Dízel</option>
        <option value="elektromos">Elektromos</option>
        <option value="hibrid">Hibrid</option>
    </select>
    <br>
    <input type="submit" value="Regisztráció">
</form>