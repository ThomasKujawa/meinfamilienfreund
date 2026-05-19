<?php
/** @var string $base_url */
?>
<!-- KOMPAKTE NAVIGATION -->
<div class="header-container">
    <a href="<?= $base_url ?>" class="logo">
        <img src="<?= $base_url ?>bilder/ff_blau.svg"
             alt="Logo meinfamilienfreund.de"
             title="Logo meinfamilienfreund.de"
             class="logo-icon">
    </a>
    <nav class="mobile-nav" aria-label="Hauptmenü">
        <button class="menu-toggle" aria-expanded="false" aria-label="Menü öffnen">☰</button>
        <div class="nav-menu" role="menubar">
            <a class="nav-link" href="<?= $base_url ?>#webseiten">Webseiten</a>
            <a class="nav-link" href="<?= $base_url ?>#tools"> Tools</a>
            <a class="nav-link" href="<?= $base_url ?>#rechtliches"> Rechtliches</a>
        </div>
    </nav>
</div>
