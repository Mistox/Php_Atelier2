<?php

use App\Entity\User;

?>

<div class="card">
    <div class="card-body p-4">

        <div class="row mb-3">
            <h2>Note des utilisateurs</h2>
            <div class="row align-items-center justify-content-center">
                <div class="rate col-6">
                    <?php for ($i = 5; $i >= 1; $i--) : ?>
                        <input disabled="disabled" type="radio" id="avgstar<?= $i; ?>" name="averageRate" value="<?= $i; ?>" <?= $i == $averageRate ? 'checked="checked"' : ''; ?>>
                        <label for="$averageRate<?= $i; ?>" title="<?= $i; ?> étoiles"><?= $i; ?> étoiles</label>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <h3>Noter ce livre</h3>

            <form method="POST">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-4 py-2">
                            <label for="rate" class="form-label">Votre note :</label>

                        </div>
                        <div class="col-8">
                            <div class="rate enabled">
                                <?php for ($i = 5; $i >= 1; $i--) : ?>
                                    <input type="radio" id="star<?= $i; ?>" name="rate" value="<?= $i; ?>" <?= ($i == htmlspecialchars($rating->getRate())) ? 'checked="checked"' : ($i == 5 ? 'checked="checked"' : ''); ?>>
                                    <label for="star<?= $i; ?>" title="<?= $i; ?> étoiles"><?= $i; ?> étoiles</label>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="book_id" value="<?= htmlspecialchars($book->getId()); ?>">
                <input type="hidden" name="user_id" value="<?= htmlspecialchars(User::getCurrentUserId())?>">

                <input type="hidden" name="id" value="8">



                <div class="mb-3">
                    <input type="submit" name="saveRating" class="btn btn-primary form-control " value="Noter">
                </div>

            </form>
        </div>



    </div>
</div>