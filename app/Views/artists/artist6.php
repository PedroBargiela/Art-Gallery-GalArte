<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorge Barbi</title>
    <link rel="stylesheet" href="/css/artists/all-artists.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div class="part_artists">
        <?= view('partials/part_artists.php') ?>
    </div>


    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>