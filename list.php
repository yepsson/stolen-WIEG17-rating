<?php
    $pageTitle = "The List";

    include "incl/header.php";
    include "incl/listArray.php";
?>

    <h1>The List</h1>

    <?php
        printSortedArray($list);
    ?>

    <br/>

    <form method="GET" action="details.php">
        <?php
            printDropDown($list);
        ?>
        <button type="submit">Get me details!</button>
    </form>

<?php
    include "incl/footer.php";
?>