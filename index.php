<?php

$appTitle = 'Postani Programer';
$navigationLinks = ['glavna', 'o nama', 'kontakt']

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
            <a href="/">
                <?= $navigationLinks[0] ?>
            </a>
            <a href="/">
                <?= $navigationLinks[1] ?>
            </a>
            <a href="/">
                <?= $navigationLinks[2] ?>
            </a>
        </nav>
    </header>

    <main>
        <h1>
            <?= $appTitle ?>
        </h1>
    </main>
</body>

</html>