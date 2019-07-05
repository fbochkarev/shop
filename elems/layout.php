<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
<div id="wrapper">
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
        <div class="jumbotron">
            <?= $content ?>
        </div>
    </main>
    <footer>
        <br><br>
        <p>footer</p>
    </footer>
</div>
</body>
</html>