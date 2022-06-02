<select>
    <option> -- Selecione o Ano --</option>
    <?php 
        $i = 2022;
        // while($i >= 1900) {
        //     echo "<option>{$i}</option>";
        //     $i--;
        // }
        for(;$i >= 1900; $i--) {
            echo "<option>{$i}</option>";
        }
    ?>
</select>