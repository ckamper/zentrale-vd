<?php snippet('header') ?>

<main class="vd-main">
    <!-- Hero Section -->
    <section class="vd-hero">
        <div class="vd-container">
            <div class="vd-hero__content">
                <?php if ($page->heroOverline()->isNotEmpty()): ?>
                <div class="vd-overline"><?= $page->heroOverline() ?></div>
                <?php endif ?>
                
                <?php if ($page->heroTitle()->isNotEmpty()): ?>
                <h1 class="vd-hero__title"><?= $page->heroTitle() ?></h1>
                <?php endif ?>
                
                <?php if ($page->heroSubline()->isNotEmpty()): ?>
                <p class="vd-hero__subline"><?= $page->heroSubline() ?></p>
                <?php endif ?>
                
                <?php if ($page->heroButtonText()->isNotEmpty() && $page->heroButtonUrl()->isNotEmpty()): ?>
                <a href="<?= $page->heroButtonUrl() ?>" class="vd-btn vd-btn--primary">
                    <?= $page->heroButtonText() ?>
                </a>
                <?php endif ?>
            </div>
        </div>
    </section>
    
    <!-- Additional content sections will be added here -->
    <?= $page->text()->kirbytext() ?>
</main>

<?php snippet('footer') ?>
