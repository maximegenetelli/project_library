<?php

require_once 'Livre.class.php';


$l1 = new Livre(1, 'Apprendre PHP', 'public/images/apprendre-php.png', 180);
$l2 = new Livre(2, 'Apprendre Java', 'public/images/apprendre-java.png', 90);
$l3 = new Livre(3, 'Apprendre JavaScript', 'public/images/apprendre-js.png', 120);

require_once 'LivreManager.class.php';

$livreManager = new LivreManager;
$livreManager->addLivre($l1);
$livreManager->addLivre($l2);
$livreManager->addLivre($l3);

ob_start() ?>

<a class="btn btn-success my-3" href="create_livres.php">Ajouter un livre</a>

<table class="table text-center">
    <tr class="table-info">
        <th>Images</th>
        <th>Titres</th>
        <th>Nombres de pages</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php 
    $livreTab = $livreManager->getLivres();
    foreach ($livreTab as $livre) : ?>
        <tr>
            <td class="align-middle"><img width="80px" src="<?= $livre->getUrlImage() ?>" alt="apprendre-php"></td>
            <td class="align-middle"><?= $livre->getTitle() ?></td>
            <td class="align-middle"><?= $livre->getNb_Pages() ?></td>
            <td class="align-middle"><a class="btn btn-warning" href="">Modifier</a></td>
            <td class="align-middle"><a class="btn btn-danger" href="">Supprimer</a></td>
        </tr>
    <?php endforeach ?>
</table>

<?php

$content = ob_get_clean();
$title = 'Ma liste de livres';

require_once 'template.php';
