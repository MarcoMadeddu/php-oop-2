<?php
include_once __DIR__ . '/magazzino.php';
include_once __DIR__ . '/classes/informatica.php';
include_once __DIR__ . '/classes/capo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h2>Magazzini principali</h2>
        <div class="mag-container">
            <div class="mag">
               <?php
                  $magazzino1->show();
                  $reparto1->show();
                  $capo1->show();
                ?>
            </div>

            <div class="mag">
                <?php
                  $magazzino2->show();
                  $reparto2->show();
                  $capo2->show();
                ?>
            </div>

            <div class="mag">
            <?php
                  $magazzino3->show();
                  $reparto3->show();
                  $capo3->show();
                ?>
            </div>
        </div>
       
        
    </main>
</body>
</html>