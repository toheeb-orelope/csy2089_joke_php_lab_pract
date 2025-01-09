<?php foreach ($jokes as $joke) { ?>
    <blockquote>

        <p> <?= '<a href="edit?id=' . $joke['id'] .
            '">' . $joke['jokestext'] . ' ' . $joke['jokedate'] . '</a>' ?></p>
    </blockquote>


    <div class="container">
        <a href="edit?id=<?= $joke['id'] ?>">
            <button type="button" class="btn btn-sm">Edite</button>
        </a>
        <a href="deleteJoke?id=<?= $joke['id'] ?>&delete=1">
            <button type="button" class="btn btn-info btn-sm"
                onclick="return confirm('Are you sure you want to delete this joke?');">Delete</button>
        </a>
    </div>
<?php } ?>