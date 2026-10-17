<!-- TSD-4RT | AB | 22.09.2026. -->
<!DOCTYPE html>
<html lang="hr">
<head>
    <title><?php echo $naslovStranice; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stražar — informacijska sigurnost za tvrtke</title>
    <meta name="description" content="Stražar štiti hrvatske tvrtke od kibernetičkih napada kroz penetracijsko testiranje, 24/7 nadzor i edukaciju zaposlenika.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        echo 'My first PHP script';
    
    $strazar="polen";
    $crYear=2027;
    echo $strazar;
    echo "<p>Our company's creation date $crYear</p>";
    echo "<p>Our company's creation date" .$crYear."</p>";

    ?>
    <header class="site-header">
        
    <div class="wrap">
        <a href="index.html" class="logo"><span class="logo-mark"></span>Stražar</a>
        <input type="checkbox" id="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label" aria-label="Otvori izbornik"><span></span></label>
        <nav class="main-nav">
            <ul>
                <li><a href="index.html" class="active">Početna</a></li>
                <li><a href="usluge.html">Usluge</a></li>
                <li><a href="cjenik.html">Cjenik</a></li>
                <li><a href="tim.html">Naš tim</a></li>
                <li><a href="clanci.html">Članci</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</header>