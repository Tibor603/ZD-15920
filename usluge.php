<!-- TSD-4RT | TP | 22.09.2026. -->
<?php
$usluge = [
    ["naziv" => "Procjena rizika", "cijena" => 450],
    ["naziv" => "Sigurnosna analiza", "cijena" => 780],
    ["naziv" => "Edukacija zaposlenika", "cijena" => 300],
];
$ukupno = array_sum(array_column($usluge, "cijena"));

$naslovStranice = "Usluge — Stražar";
$aktivnaStranica = "usluge";
include "parts/zaglavlje.php";
?>

<main>

    <section class="page-head">
        <div class="wrap">
            <p class="eyebrow">Usluge</p>
            <h1>Sve što je potrebno da vaš sustav bude korak ispred napadača</h1>
            <p class="lede">Usluge kombiniramo prema veličini tvrtke i vrsti podataka koje čuvate — od jednokratnog testiranja do stalnog nadzora.</p>
        </div>
    </section>

    <section>
        <div class="wrap">
            <div class="grid-2">
                <div class="card">
                    <p class="num">01</p>
                    <h3>Penetracijsko testiranje</h3>
                    <p>Simuliramo napad na web aplikacije, mrežnu infrastrukturu i mobilne aplikacije kako bismo pronašli propuste prije stvarnog napadača. Svaki nalaz dolazi s ocjenom rizika i konkretnim koracima za popravak.</p>
                </div>
                <div class="card">
                    <p class="num">02</p>
                    <h3>Sigurnosni audit</h3>
                    <p>Pregledavamo konfiguracije, prava pristupa, mrežnu arhitekturu i interne procedure u odnosu na dobru praksu i norme poput ISO 27001. Rezultat je izvještaj s jasnim prioritetima.</p>
                </div>
                <div class="card">
                    <p class="num">03</p>
                    <h3>Nadzor i odgovor na incidente (SOC)</h3>
                    <p>Naš tim prati vaše sustave 24 sata dnevno, prepoznaje sumnjivu aktivnost i reagira prije nego što manji upad preraste u veliki problem.</p>
                </div>
                <div class="card">
                    <p class="num">04</p>
                    <h3>Upravljanje ranjivostima</h3>
                    <p>Redovito skeniramo vašu infrastrukturu, pratimo nove ranjivosti vezane uz vaš softver i vodimo vas kroz proces zakrpavanja po prioritetu.</p>
                </div>
                <div class="card">
                    <p class="num">05</p>
                    <h3>Edukacija zaposlenika</h3>
                    <p>Radionice i simulirani phishing napadi pripremaju vaš tim da prepozna pokušaje prevare prije nego što postanu problem za cijelu tvrtku.</p>
                </div>
                <div class="card">
                    <p class="num">06</p>
                    <h3>Priprema za usklađenost</h3>
                    <p>Pomažemo pri pripremi dokumentacije i tehničkih mjera potrebnih za usklađivanje s GDPR-om, NIS2 direktivom i internim politikama sigurnosti.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-raised">
        <div class="wrap">
            <p class="eyebrow">Okvirne cijene</p>
            <h2>Pojedinačne usluge</h2>
            <table class="pricing-table">
                <thead>
                    <tr>
                        <th>Usluga</th>
                        <th>Cijena</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usluge as $usluga): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usluga["naziv"]); ?></td>
                            <td><?php echo number_format($usluga["cijena"], 0, ",", "."); ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th>Ukupno</th>
                        <th><?php echo number_format($ukupno, 0, ",", "."); ?> €</th>
                    </tr>
                </tbody>
            </table>
            <p class="pricing-note">Cijene ne uključuju PDV.</p>
        </div>
    </section>

    <section class="section-ink">
        <div class="wrap">
            <div class="hero" style="padding:0;">
                <div class="wrap" style="padding:0;">
                    <div>
                        <p class="eyebrow" style="color:#d9b25f;">Kako izgleda suradnja</p>
                        <h2>Od prvog razgovora do zatvorenog nalaza</h2>
                        <p style="color:var(--text-on-ink-muted);">Suradnju uvijek počinjemo kratkim razgovorom o vašem sustavu i onome što čuvate. Nakon toga predlažemo opseg testiranja, provodimo ga i zajedno prolazimo kroz nalaze — sve dok svaki propust ne bude zatvoren.</p>
                        <a href="kontakt.html" class="btn on-ink">Dogovorite razgovor</a>
                    </div>
                    <div class="hero-panel" style="background:var(--ink-soft);border-color:var(--line-dark);">
                        <dl>
                            <div>
                                <dt style="color:var(--gold);">1</dt>
                                <dd style="color:var(--text-on-ink-muted);">Besplatan uvodni razgovor i procjena opsega</dd>
                            </div>
                            <div>
                                <dt style="color:var(--gold);">2</dt>
                                <dd style="color:var(--text-on-ink-muted);">Testiranje ili audit prema dogovorenom planu</dd>
                            </div>
                            <div>
                                <dt style="color:var(--gold);">3</dt>
                                <dd style="color:var(--text-on-ink-muted);">Izvještaj, prezentacija nalaza i podrška pri popravku</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include "parts/podnozje.php"; ?>