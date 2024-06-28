<?php ob_start() ?>

<form>

  <fieldset>

    <div>
      <label for="exampleTextarea" class="form-label mt-4">Titre</label>
      <input type="text" name="titre" class="form-control" id="exampleTextarea" placeholder="Titre de votre livre">
    </div>
    <div>
      <label for="formFile" class="form-label mt-4">Image</label>
      <input class="form-control" name="image" type="file" id="formFile">
    </div>

    <div class="mt-4">
        <label class="form-label" for="typeNumber">Nombre de pages</label>
        <input type="number" name="nbr_pages" id="typeNumber" class="form-control" placeholder="Nombre de pages que contient le livre">
    </div>

  </fieldset>

</form>

<a href="#" class="btn btn-success mt-3 d-block fs-4">Ajouter le livre</a>

<?php

$content = ob_get_clean();
$title = 'Créer un livre';

require_once 'template.php';

