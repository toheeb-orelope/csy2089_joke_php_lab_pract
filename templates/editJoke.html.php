<form action="editJoke.php" method="POST">
    <input type="hidden" name="jokes[id]" value="<?= $joke['id'] ?? '' ?>">

    <label for="">Edit joke</label>
    <textarea name="jokes[jokestext]" id="" rows="3" cols="40"> <?= $joke['jokestext'] ?? '' ?> </textarea>

    <label for="">Edit date</label>
    <input type="text" name="jokes[jokedate]"
        value="<?= $joke['jokedate'] ?? (new DateTime())->format('Y-m-d H:i:s') ?>">

    <label for="">Input your name</label>
    <textarea name="jokes[authorName]" id="" rows="3" cols="40"> <?= $joke['authorName'] ?? '' ?> </textarea>

    <input type="submit" name="edit" value="Save">
</form>