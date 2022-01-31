<div class="mt-3 mb-5 p-3 card">

    <h2><?= $element->getContent() ?></h2>

    <div class="d-flex">
        <a class="btn btn-info w-25 me-2" href="?type=element&action=edit&id=<?= $element->getId() ?>">Modifier l'élément</a>
        <form action="?type=element&action=delete" method="post">
            <button type="submit" name="id" value="<?= $element->getId() ?>" class="btn btn-danger">Supprimer l'élément</button>
        </form>
    </div>
</div>

<!-- ici le formulaire et l'affichage des commentaires -->

<?php if (!$comments) { ?>
    <p>Soyez le premier à commenter le <?= $element->getContent() ?> !</p>
<?php } ?>

<form class="" action="?type=comment&action=new" method="post">
    <div class="form-group mb-2">
        <input type="text" name="author" id="" placeholder="Votre nom">
    </div>
    <div class="form-group mb-2">
        <textarea type="text" name="content" id="" placeholder="Votre commentaire"></textarea>
    </div>
    <div class="form-group mb-2">
        <button type="submit" name="id" value="<?= $cocktail->getId() ?>" class="btn btn-success">Poster</button>
    </div>
</form>

<?php foreach ($comments as $comment) { ?>
    <div class="row p-2 mt-2 mb-2 card">
        <h5><?= $comment->getAuthor() ?></h5>
        <p><?= $comment->getContent() ?></p>
        <form action="?type=comment&action=delete" method="post">
            <button type="submit" name="id" value="<?= $comment->getId() ?>" class="btn btn-warning">Supprimer le commentaire</button>
        </form>
    </div>
<?php } ?>