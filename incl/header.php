<?php

    define("PAGE_NAME", "BestList.obvs");

    include "incl/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <header>
            <div id="headerCont">
                <h1>Välkommen till <?php echo PAGE_NAME; ?>!</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact</a>
                    <a href="list.php">List</a>
                </nav>
            </div>
        </header>
        <div id="content">