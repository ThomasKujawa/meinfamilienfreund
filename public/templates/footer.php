<footer id="rechtliches" class="footer-container">
    <?php include __DIR__ . '/footer-logo.php' ?>
    <?php
    $footerLinks = [
        ['url' => 'agb.php',            'label' => 'AGB'],
        ['url' => 'widerruf.php',       'label' => 'Widerruf'],
        ['url' => 'datenschutz.php',    'label' => 'Datenschutz'],
        ['url' => 'impressum.php',      'label' => 'Impressum']
    ];
    ?>
    <nav class="foot-mobile-nav" role="navigation" aria-label="Fussmenue">
        <button class="foot-menu-toggle" aria-expanded="false" aria-label="Menü öffnen">☰</button>
        <div class="foot-nav-menu" role="menubar">
            <?php foreach ($footerLinks as $link) : ?>
                <?php
                $url   = $link['url'];
                $label = $link['label'];
                include __DIR__ . '/footer-link.php';
                ?>
            <?php endforeach ?>
        </div>
    </nav>
</footer>
