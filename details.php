<?php
    $pageTitle = "The List";

    include "incl/header.php";
    include "incl/listArray.php";
?>

    <?php
        echo "<h1>" . $_GET["game"] . "</h1>";
        echo "<p>" . $list[$_GET["game"]] . "</p>";
    ?>

<?php
    include "incl/footer.php";
?>