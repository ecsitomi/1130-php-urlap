<form action="feldolgozas.php" method="post">
    <div class="form-group">
        <label for="rendszam" >Rendszám</label>
        <input type="text" name="rendszam"  class="form-text text-muted">
    </div>
    <div class="form-group">
        <label for="marka" >Márka</label>
        <input type="text" name="marka"  class="form-text text-muted">
    </div>
    <div class="form-group">
        <label for="modell" >Modell</label>
        <input type="text" name="modell"  class="form-text text-muted">
    </div>
    <div class="form-group">
        <label for="gyartas" >Gyártási év</label>
        <input type="text" name="gyartas"  class="form-text text-muted">
    </div>
    <div class="form-group">
        <label for="uzemanyag" >Üzemanyag típusa</label>
        <select name="uzemanyag" id="">
             <option value="benzin">Benzin</option>
            <option value="dizel">Dízel</option>
            <option value="elektromos">Elektromos</option>
            <option value="hibrid">Hibrid</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" value="Regisztráció" class="form-text text-muted">
    </div>
</form>