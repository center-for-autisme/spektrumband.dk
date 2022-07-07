<!doctype html>
<html lang="da">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
    <link href="WireFraming/css/wireframe.css" rel="stylesheet" type="text/css">

    <title><?php echo $title; ?></title>
    <script src="WireFraming/js/jquery-1.11.2.min.js"></script>
    <script src="WireFraming/js/wireframe.js"></script>
</head>

<body>
    <header>
        <div id="band-image" class="resp-image">
            <img src="assets/images/band01-transp.png" alt="Spektrum, band medlemmer">
        </div>

        <nav role="navigation">
            <div id="menuToggle">
                <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
                <input type="checkbox" />

                <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
                <span></span>
                <span></span>
                <span></span>

                <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
                <ul id="menu">
                    <a href="index.php">
                        <li>Hjem</li>
                    </a>
                    <a href="koncerter.php">
                        <li>Koncerter</li>
                    </a>
                    <a href="#kontakt">
                        <li>Kontakt</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>