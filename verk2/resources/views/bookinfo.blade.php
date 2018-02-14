<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Bókahila</title>

        <meta name="description" content="Listi sem heldur utan um bækur">
        <meta name="author" content="Helgi Steinarr Júlíusson">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">         <!-- General css for the whole website -->
        <link rel="stylesheet" href="/css/bookinfo.css">    <!-- css specialized for this page only -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <main>
            <h1>{{$book_info["name"]}}</h1>
            <h3>Lýsing:</h3>
            <p>{{$book_info["desc"]}}</p>
            <p>Höfundur: {{$book_info["writer"]}}</p>
            <p>Útgefandi: {{$book_info["publisher"]}}</p>
            <p>Útgáfuár: {{$book_info["year_published"]}}</p>
            <a href="../">Til baka</a>
        </main>
    </body>
</html>