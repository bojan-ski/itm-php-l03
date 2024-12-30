<?php

$appTitle = 'Postani Programer';

$navigationLinks = [
    'glavna' => 'home',
    'o nama' => 'about_us',
    'kontakt' => 'contact',
];

$navigationLinksKeys = array_keys($navigationLinks);

$currentYear = date('Y')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>
        <?= $appTitle ?>
    </title>
</head>

<body>
    <header>
        <nav>
            <a href="<?= "{$navigationLinks['glavna']}" ?>.php">
                <?= $navigationLinksKeys[0] ?>
            </a>
            <a href="<?= "{$navigationLinks['o nama']}" ?>.php">
                <?= $navigationLinksKeys[1] ?>
            </a>
            <a href="<?= "{$navigationLinks['kontakt']}" ?>.php">
                <?= $navigationLinksKeys[2] ?>
            </a>
        </nav>
    </header>

    <main>
        <h1>
            <?= $appTitle ?>
        </h1>
    </main>

    <footer>
        <p>
            Copyright @moj_sajt
            <span>
                <?= $currentYear ?>
            </span>
        </p>
    </footer>
</body>

</html>