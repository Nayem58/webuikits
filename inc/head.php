<?php

include_once 'config.php';


function head($title, $metaDesc = "A collection of web UI kits.", $additionalCSS = null, $additionalScripts = null)
{
?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $metaDesc; ?>" />
    <meta name="robots" content="index, follow" />

    <title><?= $title; ?></title>

    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="shortcut icon" href="<?= BASE_URL . "/images/favicon.ico"; ?>" />
    <link rel="stylesheet" href="<?= BASE_URL . "/css/main.css" ?>" />

    <?= $additionalCSS; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <?= $additionalScripts; ?>
  </head>

<?php
}
