<?php
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
?>
    <!DOCTYPE html>
    <html lang="de-DE">
    <head>
        <meta charset="utf-8">
        <title>Widerrufsmöglichkeit für Verbraucher</title>
        <meta name="robots" content="index,follow">
        <meta name="description" content="Hier finden Verbraucher die Möglichkeit zum Widerruf">
        <meta name="Author" content="familienfreund KG">
        <meta name="Publisher" content="familienfreund KG">
        <meta name="Copyright" content="familienfreund KG">
        <meta name="Page-topic" content="Widerruf, Rechtstexte">
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
                    <h1>Widerrufsmöglichkeit für Verbraucher</h1>
                </div>
            </div>
        </section>

        <section class="section-block">
            <div class="container">
                <header class="section-header">
                    <h2>Widerrufsbelehrung</h2>
                    <p>Verbraucher haben ein vierzehnt&auml;giges Widerrufsrecht.
                    </p>
                    <h2>Widerrufsrecht</h2><br /> Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gr&uuml;nden diesen Vertrag zu widerrufen. Die Widerrufsfrist betr&auml;gt  vierzehn Tage ab dem Tag des Vertragsabschlusses.
                    <p>Um Ihr Widerrufsrecht auszuüben, müssen Sie uns (familienfreund KG, Kolonnadenstraße 2, 04109 Leipzig, Deutschland, buchhaltung@familienfreund.de, Telefon: 0341-355408-12, Fax: 0341-355408-19) mittels einer eindeutigen Erklärung (z. B. ein mit der Post versandter Brief, Telefax oder E-Mail) über Ihren Entschluss, diesen Vertrag zu widerrufen, informieren. Sie können dafür das beigefügte Muster-Widerrufsformular verwenden, das jedoch nicht vorgeschrieben ist.
                    </p>
                    <p>Zur Wahrung der Widerrufsfrist reicht es aus, dass Sie die Mitteilung &uuml;ber die Aus&uuml;bung des Widerrufsrechts vor Ablauf der Widerrufsfrist absenden.
                    <h2>Folgen des Widerrufs </h2>
                    <p>Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, die wir von Ihnen erhalten haben, einschlie&szlig;lich der Lieferkosten (mit Ausnahme der zus&auml;tzlichen Kosten, die sich daraus ergeben, dass Sie eine andere Art der Lieferung als die von uns angebotene, g&uuml;nstigste Standardlieferung gew&auml;hlt haben), unverz&uuml;glich und sp&auml;testens binnen vierzehn Tagen ab dem Tag zur&uuml;ckzuzahlen, an dem die Mitteilung &uuml;ber Ihren Widerruf dieses Vertrags bei uns eingegangen ist. F&uuml;r diese R&uuml;ckzahlung verwenden wir dasselbe Zahlungsmittel, das Sie bei der urspr&uuml;nglichen Transaktion eingesetzt haben, es sei denn, mit Ihnen wurde ausdr&uuml;cklich etwas anderes vereinbart; in keinem Fall werden Ihnen wegen dieser R&uuml;ckzahlung Entgelte berechnet.
                    </p>
                    <p>Das Widerrufsrecht erlischt bei einem Vertrag &uuml;ber die Lieferung von nicht auf einem k&ouml;rperlichen Datentr&auml;ger befindlichen digitalen Inhalten auch dann, wenn wir mit der Ausf&uuml;hrung des Vertrags begonnen haben, nachdem Sie ausdr&uuml;cklich zugestimmt haben, dass wir mit der Ausf&uuml;hrung des Vertrags vor Ablauf der Widerrufsfrist beginnen, und Ihre Kenntnis davon best&auml;tigt haben, dass Sie durch Ihre Zustimmung mit Beginn der Ausf&uuml;hrung des Vertrags Ihr Widerrufsrecht verlieren.
                    </p>
                    <table id="widerruf">
                        <tbody>
                        <tr> <td>
                                <p><strong>Muster-Widerrufsformular</strong>
                                </p>
                                <p>
                                    <em>(Wenn Sie den Vertrag widerrufen wollen, dann f&uuml;llen Sie bitte dieses Formular aus und senden Sie es zur&uuml;ck.)
                                    </em>
                                </p>
                                <p>&ndash; An<?= '&nbsp;'
                                . htmlspecialchars(
                            json_decode(file_get_contents(__DIR__ . '/package.json'), true)['unternehmen'] ?? '')
                                . ',&nbsp; '
                                . htmlspecialchars(
                            json_decode(file_get_contents(__DIR__ . '/package.json'), true)['anschrift'] ?? '')
                                . ',&nbsp; '
                                . htmlspecialchars(
                            json_decode(file_get_contents(__DIR__ . '/package.json'), true)['email'] ?? '')
                                ?>
                                </p>
                                <p>&ndash; Hiermit widerrufe(n) ich/wir (*) den von mir/uns (*) abgeschlossenen Vertrag &uuml;ber den Kauf der folgenden<br /> Waren (*)/die Erbringung der folgenden Dienstleistung (*)
                                </p>
                                <p>&ndash; Bestellt am (*)/erhalten am (*)
                                </p>
                                <p>&ndash; Name des/der Verbraucher(s)
                                </p>
                                <p>&ndash; Anschrift des/der Verbraucher(s)
                                </p>
                                <p>&ndash; Unterschrift des/der Verbraucher(s) (nur bei Mitteilung auf Papier)
                                </p>
                                <p>&ndash; Datum<br /> <br />
                                    <em>(*) Unzutreffendes streichen.
                                    </em>
                                </p> </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <p><i>
                            <a target="_blank" title="Widerrufsbelehrung" href="https://shop.trustedshops.com/de/rechtstexte/">Widerrufsbelehrung</a> erstellt mit dem
                            <a target="_blank" title="Trusted Shops" href="https://shop.trustedshops.com/de/">Trusted Shops</a> Rechtstexter in Kooperation mit
                            <a target="_blank" title="FÖHLISCH Rechtsanwälte" href="https://foehlisch.com" rel="nofollow">FÖHLISCH Rechtsanwälte</a>.</i>
                    </p>                </header>
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
<?php
