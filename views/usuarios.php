<!DOCRYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Mario</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/theme.css" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="jquery-2.1.4.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <header class="main-header">
            <figure>
                <img src="images/logo.png" alt="">
            </figure>
            <nav>
                <a href=""><i class="material-icons">album</i><span>Albumes</span></a>
                <a href=""><i class="material-icons">play_circle_outline</i><span>Play</span></a>
                <a href=""><i class="material-icons">subscriptions</i><span>Suscripcion</span></a>
                <a href=""><i class="material-icons">copyright</i><span>Copyright</span></a>
            </nav>
        </header>

        <?php
        foreach ($usuarios as $usuario)
        {
            echo $usuario["usuario"] . "<br>";
        }
        ?>

        <footer class="main-footer">
            <h6>Mario Gustavo Lopez Gonzalez</h6>
            <h6>kakashi_raikirin@hotmail.com</h6>
            <h6>9983155748</h6>
        </footer>
    </body>
</html>
