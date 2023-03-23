<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Odia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4a12d879ad.js" crossorigin="anonymous"></script>
    </div>

      <title>ENSIAS Clubs</title>
</head>
<body>
    <header class="main-head">
        <nav>
            <h1>ENSIAS.Clubs</h1>
            <ul>
                <li></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
<section class="hero">
    <h1>Message bien envoyée</h1>
    <p>Merci &nbsp<?php echo $_GET['name']; ?></p>
</section>


    <footer class="footer">
        <div class="contrainer">
            <div class="row">
                <div class="footer-col">
                    <h4>LIENS UTILES</h4>
                    <ul>
                        <li><a href="http://ensias.um5.ac.ma/">ENSIAS</a></li>
                        <li><a href="http://www.um5.ac.ma/um5/">UM5</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACTEZ-NOUS</h4>
                    <ul><li><a href="../controller/control.inc.php?action=contactform">Laissez nous vos remarques</a></li></ul>
                </div>
                <div class="footer-col">
                    <h4>LOCALISATION</h4>
                    <ul>
                        <li><a href="https://goo.gl/maps/RiRmaHsEMcCmw6a69">Avenue Mohammed Ben Abdallah Regragui, Madinat Al Irfane, BP 713, Agdal Rabat, Maroc</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>