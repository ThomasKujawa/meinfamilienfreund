<?php
/** @var array $config */
?>
<span class="footerlogo">
    &copy; <?= date('Y') ?>
    <?= '&nbsp;' . 'familienfreund KG' ?>
    <?= '&nbsp;Version ' . htmlspecialchars(
        json_decode(file_get_contents(__DIR__ . '/../package.json'), true)['version'] ?? ''
    ) ?>
</span>
