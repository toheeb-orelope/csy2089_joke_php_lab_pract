<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="jokes.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <title><?= $title ?></title>
</head>

<body>
  <nav>
    <header>
      <h1>Internet Joke Database</h1>
    </header>
    <ul>
      <li><a href="/home">Home</a></li>
      <li><a href="/jokes">Jokes List</a></li>
      <li><a href="/editJoke">Add a new Joke</a></li>
    </ul>
  </nav>

  <main>
    <?= $output ?>
  </main>

  <footer>
    &copy; IJDB <?= date('Y'); ?>
  </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>