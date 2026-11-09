<?php
// TSD-4RT | TP | 09.11.2026
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 6 — uvjeti</title>
</head>
<body>

<h1>Vježba 6 — uvjeti</h1>
<h2>A1 — == i ===</h2>
<pre>
<?php
var_dump(5 == "5");        // predviđam: ...
var_dump(5 === "5");       // predviđam: ...
var_dump(0 == "");         // predviđam: ...
var_dump("abc" == 0);      // predviđam: ...
var_dump(null == false);   // predviđam: ...
?>
</pre>

<h2>A2 — radno vrijeme (8–15 h, pon–pet)</h2>
<pre>
<?php
$sat = 10; $dan = 3;   // srijeda, 10 h  -> očekujem true
echo "sat=$sat, dan=$dan: ";
var_dump($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);

$sat = 16; $dan = 3;
echo "sat=$sat, dan=$dan: ";
var_dump($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);

$sat = 10; $dan = 6;
echo "sat=$sat, dan=$dan: ";
var_dump($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);
?>
</pre>

<h2>B1 — cijena 40 € ovisno o godini</h2>
<?php
//B1 — if / elseif / else 
$eur   = 40;
$tecaj = 7.53450;
$kn    = $eur * $tecaj;   // 301.38

$eurTekst = number_format($eur, 2, ",", ".");
$knTekst  = number_format($kn, 2, ",", ".");

// Provjera za tri godine
$godina = 2022;
if ($godina <= 2022) {
    echo "$godina: $knTekst kn<br>";
} elseif ($godina == 2023) {
    echo "$godina: $eurTekst € ($knTekst kn)<br>";
} else {
    echo "$godina: $eurTekst €<br>";
}

$godina = 2023;
if ($godina <= 2022) {
    echo "$godina: $knTekst kn<br>";
} elseif ($godina == 2023) {
    echo "$godina: $eurTekst € ($knTekst kn)<br>";
} else {
    echo "$godina: $eurTekst €<br>";
}

$godina = 2024;
if ($godina <= 2022) {
    echo "$godina: $knTekst kn<br>";
} elseif ($godina == 2023) {
    echo "$godina: $eurTekst € ($knTekst kn)<br>";
} else {
    echo "$godina: $eurTekst €<br>";
}
?>

<h2>B2 — match: naziv današnjeg dana</h2>
<?php
$dan = (int) date("N");

$nazivDana = match ($dan) {
    1 => "ponedjeljak",
    2 => "utorak",
    3 => "srijeda",
    4 => "četvrtak",
    5 => "petak",
    6 => "subota",
    7 => "nedjelja",
    default => "nepoznat dan",
};

echo "<p>Danas je $nazivDana.</p>";
?>

<h2>B2 — switch: ime počinje samoglasnikom ili suglasnikom</h2>
<?php
$ime = "Karlo";
switch (strtolower($ime[0])) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "<p>$ime: Ime počinje samoglasnikom.</p>";
        break;
    default:
        echo "<p>$ime: Ime počinje suglasnikom.</p>";
}

$ime = "zdenko";
switch (strtolower($ime[0])) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "<p>$ime: Ime počinje samoglasnikom.</p>";
        break;
    default:
        echo "<p>$ime: Ime počinje suglasnikom.</p>";
}

$ime = "ana";
switch (strtolower($ime[0])) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "<p>$ime: Ime počinje samoglasnikom.</p>";
        break;
    default:
        echo "<p>$ime: Ime počinje suglasnikom.</p>";
}
?>

</body>
</html>
