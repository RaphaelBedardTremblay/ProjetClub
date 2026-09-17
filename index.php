<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <?php require_once __DIR__ . "/inc/header.inc.php"; ?>
    </header>
    <main>
        <h1 class="">Hello World</h1>
        <ul>
            <li><p><a href="apropos.php">À propos</a></p></li>
            <li><p><a href="contact.php">Contact</a></p></li>
            <li><p><a href="equipe.php">Equipe</a></p></li>
            <li><p><a href="evenement.php">Évenement</a></p></li>
            <li><p><a href="partenaire.php">Partenaire</a></p></li>
        </ul>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>