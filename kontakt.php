<!-- TSD-4RT | TP | 22.09.2026. -->
<?php include "parts/zaglavlje.php";?>
<main>

    <section class="page-head">
        <div class="wrap">
            <p class="eyebrow">Kontakt</p>
            <h1>Razgovarajmo o sigurnosti vašeg sustava</h1>
            <p class="lede">Ispunite obrazac ili nas kontaktirajte izravno — javljamo se u pravilu u roku jednog radnog dana.</p>
        </div>
    </section>

    <section>
        <div class="wrap">
            <div class="contact-layout">

                <form action="#" method="post">
                    <div class="form-grid">
                        <div class="field">
                            <label for="ime">Ime *</label>
                            <input type="text" id="ime" name="ime" required>
                        </div>
                        <div class="field">
                            <label for="prezime">Prezime *</label>
                            <input type="text" id="prezime" name="prezime" required>
                        </div>
                        <div class="field">
                            <label for="tvrtka">Tvrtka</label>
                            <input type="text" id="tvrtka" name="tvrtka">
                        </div>
                        <div class="field">
                            <label for="oib">OIB tvrtke</label>
                            <input type="text" id="oib" name="oib" inputmode="numeric" pattern="[0-9]{11}" maxlength="11">
                        </div>
                        <div class="field">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="field">
                            <label for="telefon">Telefon</label>
                            <input type="tel" id="telefon" name="telefon">
                        </div>
                        <div class="field full">
                            <label for="usluga">Usluga koja vas zanima</label>
                            <select id="usluga" name="usluga">
                                <option value="">Odaberite uslugu</option>
                                <option value="pentest">Penetracijsko testiranje</option>
                                <option value="audit">Sigurnosni audit</option>
                                <option value="soc">Nadzor i odgovor na incidente (SOC)</option>
                                <option value="ranjivosti">Upravljanje ranjivostima</option>
                                <option value="edukacija">Edukacija zaposlenika</option>
                                <option value="ostalo">Nešto drugo</option>
                            </select>
                        </div>
                        <div class="field full">
                            <label for="poruka">Poruka *</label>
                            <textarea id="poruka" name="poruka" required placeholder="Ukratko opišite vaš sustav i što vas zanima..."></textarea>
                        </div>
                        <div class="field full">
                            <label class="checkbox-field" for="privola">
                                <input type="checkbox" id="privola" name="privola" required>
                                <span>Slažem se s <a href="privatnost.html" style="text-decoration:underline;">politikom privatnosti</a> i obradom mojih podataka radi odgovora na upit. *</span>
                            </label>
                        </div>
                        <div class="field full">
                            <button type="submit" class="btn">Pošaljite upit</button>
                        </div>
                    </div>
                </form>

                <div class="info-block">
                    <h3>Izravan kontakt</h3>
                    <dl>
                        <div>
                            <dt>Email</dt>
                            <dd><a href="mailto:info@strazar-sigurnost.hr">info@strazar-sigurnost.hr</a></dd>
                        </div>
                        <div>
                            <dt>Telefon</dt>
                            <dd><a href="tel:+38512345678">+385 1 234 5678</a></dd>
                        </div>
                        <div>
                            <dt>Adresa</dt>
                            <dd>Ilica 45, 10000 Zagreb, Hrvatska</dd>
                        </div>
                        <div>
                            <dt>Radno vrijeme ureda</dt>
                            <dd>pon–pet, 8:00–17:00 h<br>hitne prijave incidenata: 24/7</dd>
                        </div>
                        <div>
                            <dt>Društvene mreže</dt>
                            <dd>
                                <a href="https://instagram.com/strazar.si" target="_blank" rel="noopener">Instagram</a> ·
                                <a href="https://linkedin.com/company/strazar-si" target="_blank" rel="noopener">LinkedIn</a>
                            </dd>
                        </div>
                    </dl>
                    <iframe class="map-frame" title="Lokacija ureda na karti" src="https://maps.google.com/maps?q=Ilica%2045%2C%20Zagreb&t=&z=14&ie=UTF8&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include "parts/podnozje.php";?>
