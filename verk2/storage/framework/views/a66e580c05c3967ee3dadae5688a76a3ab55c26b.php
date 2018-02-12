<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Bókahila</title>

        <meta name="description" content="Listi sem heldur utan um bækur">
        <meta name="author" content="Helgi Steinarr Júlíusson">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <main>
            <h1><?php echo e($book_info["name"]); ?></h1>
            <h3>Lýsing:</h3>
            <p><?php echo e($book_info["desc"]); ?></p>
            <p>Höfundur: <?php echo e($book_info["writer"]); ?></p>
            <p>Útgefandi: <?php echo e($book_info["publisher"]); ?></p>
            <p>Útgáfuár: <?php echo e($book_info["year_published"]); ?></p>
            <a href="../">Til baka</a>
        </main>
    </body>
</html>