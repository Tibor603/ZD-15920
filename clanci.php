<!-- TSD-4RT | TP | 22.09.2026. -->
<?php include "parts/zaglavlje.php";?>

<main>

    <section class="page-head">
        <div class="wrap">
            <p class="eyebrow">Članci</p>
            <h1>Novosti, ranjivosti i savjeti iz naše struke</h1>
            <p class="lede">Ovdje objavljujemo ono što primijetimo u praksi — nove vrste napada, greške koje se ponavljaju i praktične korake za zaštitu.</p>
        </div>
    </section>

    <section>
        <div class="wrap">
            <div class="article-list">
                <div class="article-row">
                    <time datetime="2026-09-02">2. rujna 2026.</time>
                    <div>
                        <h3><a href="clanak-1.php">Val phishing napada preko lažnih računa za struju</a></h3>
                        <p>Posljednja tri tjedna bilježimo porast prevara koje oponašaju hrvatske dobavljače energije. Evo kako ih prepoznati.</p>
                    </div>
                    <span class="tag">Napadi</span>
                </div>
                <div class="article-row">
                    <time datetime="2026-08-18">18. kolovoza 2026.</time>
                    <div>
                        <h3><a href="clanak-2.php">Zašto je dvofaktorska autentifikacija minimum, a ne bonus</a></h3>
                        <p>Analiza incidenata koje smo obradili pokazuje da bi većina bila spriječena jednom jednostavnom mjerom.</p>
                    </div>
                    <span class="tag">Savjeti</span>
                </div>
                <div class="article-row">
                    <time datetime="2026-07-29">29. srpnja 2026.</time>
                    <div>
                        <h3><a href="clanak-3.php">Kritična ranjivost u popularnom sustavu za upravljanje sadržajem</a></h3>
                        <p>Objašnjavamo o čemu se radi, koga pogađa i koje korake poduzeti dok zakrpa ne bude dostupna.</p>
                    </div>
                    <span class="tag">Ranjivosti</span>
                </div>
                <div class="article-row">
                    <time datetime="2036-12-25">25. prosinca 2036.</time>
                    <div>
                        <h3><a href="clanak-4.php">Instagram baza podataka pokradena - privatne informacije posvuda</a></h3>
                        <p>Pomažemo s izgradnjom jače zaštite kako podaci ne bi ponovno bili ukradeni.</p>
                    </div>
                    <span class="tag">Ranjivosti</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-teal">
        <div class="wrap">
            <div class="newsletter">
                <div>
                    <p class="eyebrow" style="color:#cfe3de;">Ne propustite novi članak</p>
                    <h2>Novosti stižu izravno u vašu poštu</h2>
                    <p style="color:var(--text-on-ink-muted);">Jednom tjedno pošaljemo pregled novih članaka i upozorenja o aktualnim napadima.</p>
                </div>
                <div>
                    <form class="newsletter-form" action="#" method="post">
                        <label for="articles-newsletter-email" style="display:none;">Email adresa</label>
                        <input type="email" id="articles-newsletter-email" name="email" placeholder="vas@email.com" required>
                        <button type="submit" class="btn on-ink">Prijavi me</button>
                    </form>
                    <p class="newsletter-fine">Odjava je moguća u svakom trenutku. Pogledajte našu <a href="privatnost.php" style="text-decoration:underline;">politiku privatnosti</a>.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include "parts/podnozje.php";?>
