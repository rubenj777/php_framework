<form action="?type=element&action=edit" method="post" class="d-flex flex-column w-25">

    <input type="text" name="content" value="<?= $element->getContent() ?>" class="mb-2">

    <button type="submit" class="btn btn-success" name="id" value="<?= $element->getId() ?>">Enregistrer</button>

</form>