<?php
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
?>
<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="utf-8">
    <title>Das Web-Universum der familienfreund KG</title>
    <meta name="robots" content="index,follow">
    <meta name="description" content="meinfamilienfreund.de bündelt die digitalen Angebote und Tools der familienfreund KG">
    <meta name="Author" content="familienfreund KG">
    <meta name="Publisher" content="familienfreund KG">
    <meta name="Copyright" content="familienfreund KG">
    <meta name="Page-topic" content="Web-Universum der familienfreund KG, Familienfreundlichkeit & Fachkräftesicherung für Arbeitgeber">
    <meta name="Page-type" content="Produktinfo">
    <link rel="stylesheet" href="<?= $base_url ?>styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#005f9e">
    <!-- Modernes Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?= $base_url ?>bilder/favicon.svg" sizes="any">

    <!-- PNG-Fallbacks -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $base_url ?>bilder/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url ?>bilder/favicon-16x16.png">

    <!-- Legacy ICO -->
    <link rel="icon" type="image/x-icon" href="<?= $base_url ?>bilder/favicon.ico">

    <!-- Apple Touch Icon (reicht meistens) -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= $base_url ?>bilder/apple-touch-icon-180x180.png">

    <!-- Optional: Windows / Edge Tiles -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content=<?= $base_url ?>bilder/win8-tile-144x144.png">
    <meta name="msapplication-config"
          content=<?= $base_url ?>bilder/browserconfig.xml">

</head>
<body>
<a href="#main" class="skip-link">Zum Hauptinhalt springen</a>
<header>
    <nav>
        <?php
        include __DIR__ . '/templates/navigation.php' ?>
    </nav>
</header>

<main id="main">
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-text">
                    <h1>Das Web-Universum der familienfreund KG</h1>
                    <p>
                        meinfamilienfreund.de bündelt alle Webseiten und digitalen Werkzeuge der familienfreund KG
                    </p>
                    <p>
                        Darüber hinaus werden alle rechtlichen Dokumente zentral zur Verfügung gestellt.
                    </p>
                </div>
            </div>
        </section>

        <section id="webseiten" class="section-block">
            <div class="container">
                <header class="section-header">
                    <h2>Webseiten</h2>
                    <p>Verschiedene Zielgruppen erfordern unterschiedliche Webpräsenzen</p>
                </header>
                <div id="webseiten-grid" class="card-grid" aria-live="polite">
                    <!-- Karten werden dynamisch per JS eingefügt -->
                </div>
            </div>
        </section>

        <section id="tools" class="section-block section-alt">
            <div class="container">
                <header class="section-header">
                    <h2>Arbeite klug, nicht hart</h2>
                    <p>Digitale Tools, die alle Stakeholder der familienfreund KG seit 2006 unterstützen.</p>
                </header>
                <div id="tools-grid" class="card-grid" aria-live="polite">
                    <!-- Karten werden dynamisch per JS eingefügt -->
                </div>
            </div>
        </section>
    </main>
<!-- FOOTER -->
<?php include __DIR__ . '/templates/footer.php' ?>
<!-- Hamburger Menü Kopf -->
<script src="<?= $base_url ?>js/nav-header.js" defer></script>
<!-- Hamburger Menue Fuss -->
<script src="<?= $base_url ?>js/nav-footer.js" defer></script>
<!-- Daten für die Kacheln laden und rendern-->
<script src="<?= $base_url ?>js/data.js" defer></script>
</body>
</html>
