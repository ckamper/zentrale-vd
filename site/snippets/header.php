<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?> | validdata GmbH</title>
  <meta name="description" content="<?= $page->description()->or('validdata GmbH – Ihr Partner für Datenqualität und digitale Transformation') ?>">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/klavika-web.css">
  
  <!-- Styles -->
  <?= css('assets/css/main.css') ?>
</head>
<body>
  <header class="vd-header">
    <div class="vd-header__container">
      <a href="<?= $site->url() ?>" class="vd-header__logo">
        <strong>validdata</strong>
      </a>
      <nav class="vd-header__nav">
        <a href="#leistungen">Leistungen</a>
        <a href="#unternehmen">Unternehmen</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
    </div>
  </header>
