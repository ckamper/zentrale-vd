    <footer class="vd-footer">
        <div class="vd-container">
            <div class="vd-footer__content">
                <div class="vd-footer__brand">
                    <h3 class="vd-footer__title"><?= $site->title() ?></h3>
                    <?php if ($site->description()->isNotEmpty()): ?>
                    <p class="vd-footer__description"><?= $site->description() ?></p>
                    <?php endif ?>
                </div>
                
                <nav class="vd-footer__nav">
                    <ul class="vd-footer__menu">
                        <?php foreach ($site->children()->listed() as $item): ?>
                        <li>
                            <a href="<?= $item->url() ?>" class="vd-footer__link">
                                <?= $item->title() ?>
                            </a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
            
            <div class="vd-footer__bottom">
                <p class="vd-footer__copyright">
                    © <?= date('Y') ?> <?= $site->title() ?>. Alle Rechte vorbehalten.
                </p>
            </div>
        </div>
    </footer>

    <?= js('assets/js/main.js') ?>
</body>
</html>
