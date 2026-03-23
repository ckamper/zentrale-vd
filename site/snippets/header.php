<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?> | <?= $page->title() ?></title>
    <meta name="description" content="<?= $page->metaDescription()->or($site->description()) ?>">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/klavika-web.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <?= css('assets/css/main.css') ?>
</head>

<body class="vd-page">
    <header class="vd-header">
        <div class="vd-container">
            <nav class="vd-nav">
                <a href="<?= $site->url() ?>" class="vd-nav__logo">
                    <?= $site->title() ?>
                </a>
                
                <ul class="vd-nav__menu">
                    <?php foreach ($site->children()->listed() as $item): ?>
                    <li class="vd-nav__item">
                        <a href="<?= $item->url() ?>" 
                           class="vd-nav__link<?= e($item->isOpen(), ' vd-nav__link--active') ?>">
                            <?= $item->title() ?>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>
                
                <button class="vd-nav__toggle" aria-label="Menü">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
