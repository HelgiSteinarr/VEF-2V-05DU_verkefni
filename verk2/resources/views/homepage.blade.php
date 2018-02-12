<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Bókahila</title>

        <meta name="description" content="Listi sem heldur utan um bækur">
        <meta name="author" content="Helgi Steinarr Júlíusson">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <script src="./js/app.js"></script>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <main>
            <h1>Bókahilla</h1>
            @foreach (array_keys($book_data) as $key)
                <div onclick={{ "redirect('" . $key . "')" }}>
                    {{ $book_data[$key]["name"] }}
                </div>
            @endforeach
        </main>
    </body>
</html>