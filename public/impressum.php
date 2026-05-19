<?php
$base_url = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="utf-8">
    <title>Das Web-Universum der familienfreund KG</title>
    <meta name="robots" content="index,follow">
    <meta name="description"
          content="meinfamilienfreund.de bündelt die digitalen Angebote und Tools der familienfreund KG">
    <meta name="Author" content="familienfreund KG">
    <meta name="Publisher" content="familienfreund KG">
    <meta name="Copyright" content="familienfreund KG">
    <meta name="Page-topic"
          content="Web-Universum der familienfreund KG, Familienfreundlichkeit & Fachkräftesicherung für Arbeitgeber">
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
                <h1>Impressum der familienfreund KG</h1>
            </div>
        </div>
    </section>

    <section class="section-block">
        <div class="container">
            <header class="section-header">
                <h2>Was tut die familienfreund KG?</h2>
                <p>Wir unterstützen den
                    deutschen Mittelstand bei der <a href="https://www.fachkraeftesicherer.de/binden/" target="_blank"
                                                     rel="noreferrer noopener">Mitarbeiterbindung</a> und <a
                            href="https://www.fachkraeftesicherer.de/finden/" target="_blank" rel="noreferrer noopener">Fachkräftegewinnung</a>.
                    In den <a href="https://www.fachkraeftesicherer.de/referenzen-wir-machten-das/" data-type="page"
                              data-id="104656" target="_blank" rel="noreferrer noopener">Referenzen</a> kannst Du dir
                    einen Überblick über erfolgreiche Kundenaufträge und Projekte verschaffen.</p>
            </header>
            <h2 class="wp-block-heading"><span
                        id="wie-lauten-die-gesetzlichen-pflichtangaben"></span>Wie lauten die
                gesetzlichen Pflichtangaben?</h2>
            <p>vertretungsberechtigte Gesellschafter: Jana Schlegel</p>
            <p><?= htmlspecialchars(
                json_decode(file_get_contents(__DIR__ . '/package.json'), true)['anschrift'] ?? '') ?></p>
            <p>Telefon: <a href="tel:+4985121339380" target="_blank" data-type="tel" data-id="tel:+4985121339380"
                           rel="noreferrer noopener nofollow">+49 851 2133938-0</a></p>
            <p>Fax: 0341-355408-19</p>
            <p>E-Mail: <?= htmlspecialchars(
                            json_decode(file_get_contents(__DIR__ . '/package.json'), true)['email'] ?? '') ?>
            </p>
            <h3 class="gb-headline gb-headline-7a1d74e0 gb-headline-text"><span
                        id="handelsregister"></span>Handelsregister<span
                ></span></h3>
            <p>Amtsgericht Leipzig, HRA 14991</p>
            <h3 class="gb-headline gb-headline-df4e17b7 gb-headline-text"><span
                        id="umsatzsteuer-identifikationsnummer"></span>Umsatzsteuer-Identifikationsnummer<span
                ></span></h3>
            <p>DE249137613</p>
            <p>Verantwortlich gemäß §&nbsp;55 RStV:<br>Jana Schlegel<br>Kolonnadenstraße 2<br>04109 Leipzig</p>
            <p>Institutskennzeichen (IK): 461471729</p>
            <h2 class="gb-headline gb-headline-c02fc352 gb-headline-text"><span
                        id="ergaenzende-angaben"></span>Ergänzende
                Angaben</h2>
            <h3 class="wp-block-heading"><span
                        id="gueltigkeit-des-impressums-fuer-andere-angebote-der-familienfreund-kg"></span>Gültigkeit
                des Impressums für andere Angebote der familienfreund KG</h3>
            <p>In sozialen Netzwerken, u.&nbsp;a. XING, Facebook, LinkedIn, X, Fediverse, HRM.de, Pinterest, Instagram,
                YouTube, Google My Business, Yandex und Bing Places werden Profile für die familienfreund KG (aka
                Fachkräftesicherer und Fluktuationsbändiger) bereitgestellt.</p>
            <h3 class="gb-headline gb-headline-1c01b786 gb-headline-text"><span
                        id="gewerbliche-versicherung"></span>Gewerbliche
                Versicherung</h3>
            <div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:30% auto">
                <figure class="wp-block-media-text__media"><img decoding="async" width="800" height="800"
                                                                src="https://www.fachkraeftesicherer.de/wp-content/uploads/2024/06/hiscox-versichert-siegel-2024.png"
                                                                alt="Siegel gewerbliche Versicherung Hiscox"
                                                                class="wp-image-160199 size-full"
                                                                sizes="(max-width: 800px) 100vw, 800px"/></figure>
                <div class="wp-block-media-text__content"><p>Unser Unternehmen ist umfassend durch eine gewerbliche
                        Versicherung der <a
                                href="https://www.hiscox.de/geschaeftskunden/unternehmensberater-versicherung/"
                                target="_blank" rel="noreferrer noopener nofollow">HISCOX</a> abgesichert. Diese
                        Versicherung deckt die Bereiche Vermögensschadenhaftpflicht, Betriebshaftpflicht und
                        Betriebsunterbrechung ab. Somit sind wir als Unternehmens- und Personalberatung bestens
                        geschützt und können Dir unsere Dienstleistungen mit höchster Sicherheit und Professionalität
                        anbieten. Wir vertrauen dem Versicherungsfachmann <a href="https://web.archive.org/web/20240805180148/https://mb-kopsch.de/ansprechpartner.html"
                                                                             target="_blank"
                                                                             rel="noreferrer noopener nofollow">Fred
                            Mängel vom Maklerbüro Kopsch</a>.</p></div>
            </div>
            <p><em><a href="https://business.trustedshops.de/produkte/legalservices/rechtstexter" target="_blank"
                      rel="noreferrer noopener">Impressum</a>&nbsp;erstellt mit dem&nbsp;<a
                            href="https://legal.trustedshops.com/" target="_blank" rel="noreferrer noopener">Trusted
                        Shops</a>&nbsp;Rechtstexter in Kooperation mit&nbsp;<a href="https://foehlisch.com/"
                                                                               target="_blank"
                                                                               rel="noreferrer noopener">FÖHLISCH
                        Rechtsanwälte</a>.</em></p>
            <h2 class="gb-headline gb-headline-8455ed3e gb-headline-text"><span
                        id="7-gruende-fuer-die-zusammenarbeit-mit-der-familienfreund-kg"></span>7
                Gründe für die Zusammenarbeit mit der familienfreund KG</h2>
            <div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:30% auto">
                <figure class="wp-block-media-text__media"><img decoding="async" width="898" height="898"
                                                                src="https://www.fachkraeftesicherer.de/wp-content/uploads/2022/06/david-manifest.png"
                                                                alt="Das David Manifest"
                                                                class="wp-image-111595 size-full"
                                                                sizes="(max-width: 898px) 100vw, 898px"/></figure>
                <div class="wp-block-media-text__content"><p>In Anlehnung an das DAVID-Manifest vom <a
                                href="https://www.sascha-theobald.de/" target="_blank"
                                rel="noreferrer noopener nofollow">Positionierungsprofi Sascha Theobald</a> möchten wir
                        Dir sieben Gründe aufzeigen, warum es sich lohnt, mit der familienfreund KG zusammenzuarbeiten.
                    </p>
                    <ol class="wp-block-list">
                        <li>Wir sind klein, aber unterschätze uns nicht.</li>
                        <li>Uns geht es nicht um Gewinnmaximierung.</li>
                        <li>Wir übernehmen Verantwortung.</li>
                        <li>Wir gehen unseren eigenen Weg.</li>
                        <li>Wir sind Originale.</li>
                        <li>Wir sprechen von Mensch zu Mensch.</li>
                        <li>Wir übernehmen Selbstverantwortung.</li>
                    </ol>
                </div>
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
