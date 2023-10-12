<?php require_once _ROOTPATH_ . '/templates/header.php'; ?>

<h1>Liste complète</h1>

<div class="row text-center mb-3">
    <?php foreach ($books as $book) : ?> 
        <div class="col-md-4 my-2 d-flex">
            <div class="card">
                <img src="<?= htmlspecialchars($book->getImagePath()) ?>" class="card-img-top" alt="<?= htmlspecialchars($book->getTitle()) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($book->getTitle()) ?></h5>
                    <p class="card-text"><?= htmlspecialchars(substr($book->getDescription(), 0, 100)) ?>...</p>
                    <a href="index.php?controller=book&action=show&id=<?= htmlspecialchars($book->getId()) ?>" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<div class="row">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item">
                    <a class="page-link <?= ($page == $i) ? "active" : "" ?>" href="index.php?controller=book&action=list&page=<?= htmlspecialchars($i) ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>




<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>