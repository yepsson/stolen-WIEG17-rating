<?php
    $pageTitle = "The List";

    include "incl/header.php";
    include "incl/listArray.php";
?>

<?php
        echo "<h1>" . $list[$_GET["game"]]["namn"] . "</h1>";
        echo "<p>" . $list[$_GET["game"]]["Info"] . "</p>";
    ?>

<?php
    include "incl/footer.php";
?>