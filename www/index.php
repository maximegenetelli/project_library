<?php ob_start() ?>

Accueil

<?php

$content = ob_get_clean();
$title = 'Ma bibliotheque';

require_once 'template.php';

