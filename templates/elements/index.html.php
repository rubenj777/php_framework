<?php foreach ($elements as $element) { ?>

    <div class="mt-3 mb-3 p-3 card">
        <h2><?= $element->getContent() ?></h2>
        <a class="btn btn-info w-25" href="?type=element&action=show&id=<?= $element->getId() ?>">Voir l'element</a>
    </div>

<?php } ?>