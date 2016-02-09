<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Amadeus - Aprende Música Clásica</title>
    <meta name="description" content="Aprende música clásica mientras escuchas las grandes obras de los grandes compositores.">
    <meta name="author" content="SitePoint">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/style.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

    <header id="main-header">
        <h1>Amadeus</h1>
        <span class="subtitle">Aprende Música Clásica</span>
    </header>
    <main id="main">

        <section id="lecture">
            <span class="title">Lección</span>
            <select id="lessons">
                <option value="all" selected>Todos los Compositores (Top 50)</option>
                <option disabled role=separator>O elige un compositor...</option>
                <option disabled class="loading">Cargando compositores...</option>
            </select>
        </section>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>