<?php
    $name = "Mark";
?>

    <?php include "partials/header.php"?>
    <h1>Hello world <?=$name?></h1>
    <ul>
        <?php for($i=0; $1<10; $i++): ?>
            <li><?=$i?></li>
        <?php endfor; ?>
    </ul>
    <?php include "partials/footer.php"?>