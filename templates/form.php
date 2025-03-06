<form method="GET" action="">
    <select name="genre">
        <?php foreach (genres as $g): ?>
            <!-- <option value="rock">Rock</option>
            <option value="pop" selected>Pop</option> // Añade selected a la opción seleccionada, para mantener la elección cuando se actualiza la página
            <option value="hiphop">Hiphop</option>-->
            <option value="<?= $g ?>" <?= ($g == $data['genre']) ? 'selected' : '' ?>> 
            <?= ucfirst($g) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Submit</button>
</form>