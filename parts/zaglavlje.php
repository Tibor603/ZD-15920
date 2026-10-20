<?php
// Naslov stranice: svaka stranica može postaviti $naslovStranice prije include-a
$naslovStranice = $naslovStranice ?? "Stražar — informacijska sigurnost za tvrtke";

// Aktivna stranica se određuje automatski prema nazivu datoteke
$aktivnaStranica = $aktivnaStranica ?? basename($_SERVER['SCRIPT_NAME'], '.php');
if (strpos($aktivnaStranica, 'clanak') === 0) {
    $aktivnaStranica = 'clanci'; // članci (clanak-1, clanak-2...) označavaju "Članci"
}
function aktivno($stranica, $aktivna) {
    return $stranica === $aktivna ? ' class="active"' : '';
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($naslovStranice); ?></title>
    <meta name="description" content="Stražar štiti hrvatske tvrtke od kibernetičkih napada kroz penetracijsko testiranje, 24/7 nadzor i edukaciju zaposlenika.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="wrap">
            <a href="index.php" class="logo"><span class="logo-mark"></span>Stražar</a>
            <input type="checkbox" id="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label" aria-label="Otvori izbornik"><span></span></label>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php"<?php echo aktivno('index', $aktivnaStranica); ?>>Početna</a></li>
                    <li><a href="usluge.php"<?php echo aktivno('usluge', $aktivnaStranica); ?>>Usluge</a></li>
                    <li><a href="cjenik.php"<?php echo aktivno('cjenik', $aktivnaStranica); ?>>Cjenik</a></li>
                    <li><a href="tim.php"<?php echo aktivno('tim', $aktivnaStranica); ?>>Naš tim</a></li>
                    <li><a href="clanci.php"<?php echo aktivno('clanci', $aktivnaStranica); ?>>Članci</a></li>
                    <li><a href="kontakt.php"<?php echo aktivno('kontakt', $aktivnaStranica); ?>>Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>
