<?php snippet('header') ?>

<main class="vd-main">
  <section class="vd-hero">
    <div class="vd-hero__container">
      <div class="vd-hero__content">
        <h1 class="vd-hero__title"><?= $page->title() ?></h1>
        <?php if ($page->subline()->isNotEmpty()): ?>
          <p class="vd-hero__subline"><?= $page->subline() ?></p>
        <?php endif ?>
        <?php if ($page->text()->isNotEmpty()): ?>
          <div class="vd-hero__text">
            <?= $page->text()->kt() ?>
          </div>
        <?php endif ?>
        <div class="vd-hero__actions">
          <a href="#kontakt" class="vd-btn vd-btn--primary">Jetzt starten</a>
          <a href="#leistungen" class="vd-btn vd-btn--ghost">Mehr erfahren</a>
        </div>
      </div>
    </div>
  </section>
  
  <section class="vd-section vd-section--light">
    <div class="vd-container">
      <div class="vd-section__header">
        <div class="vd-overline">Unsere Expertise</div>
        <h2 class="vd-section__title">Datenqualität auf höchstem Niveau</h2>
        <p class="vd-section__subline">
          Mit über 15 Jahren Erfahrung entwickeln wir maßgeschneiderte Lösungen 
          für Ihre Herausforderungen im Datenmanagement.
        </p>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>
