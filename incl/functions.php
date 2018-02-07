<?php
    function printSortedArray($array)
    {
        krsort($array, SORT_NUMERIC);

        echo "<ul>";
        
        foreach($array as $key => $value)
        {
            echo "<li>" . $value["namn"] . "</li>";
        }

        echo "</ul>";
    }

    function printDropDown($array)
    {
        krsort($array, SORT_NUMERIC);

        echo "<select name='game'>";

        foreach($array as $key => $value)
        {
            echo '<option value="' . $key . '">' . $value["namn"] . '</option>';
        }
        
        echo "</select>";
    }
?>