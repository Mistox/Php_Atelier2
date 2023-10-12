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
                                <input type="radio" id="star5" name="rate" value="5" checked="checked">
                                <label for="star5" title="5 étoiles">5 étoiles</label>
                                <input type="radio" id="star4" name="rate" value="4">
                                <label for="star4" title="4 étoiles">4 étoiles</label>
                                <input type="radio" id="star3" name="rate" value="3">
                                <label for="star3" title="3 étoiles">3 étoiles</label>
                                <input type="radio" id="star2" name="rate" value="2">
                                <label for="star2" title="2 étoiles">2 étoiles</label>
                                <input type="radio" id="star1" name="rate" value="1">
                                <label for="star1" title="1 étoiles">1 étoiles</label>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="book_id" value="82">
                <input type="hidden" name="user_id" value="2">

                <input type="hidden" name="id" value="8">



                <div class="mb-3">
                    <input type="submit" name="saveRating" class="btn btn-primary form-control " value="Noter">
                </div>

            </form>
        </div>



    </div>
</div>