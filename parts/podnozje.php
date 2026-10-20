<footer class="site-footer">
    <div class="wrap">
        <div class="footer-grid">
            <div class="footer-about">
                <a href="index.php" class="logo"><span class="logo-mark"></span>Stražar</a>
                <p>Hrvatski tim za informacijsku sigurnost koji štiti tvrtke od kibernetičkih napada — testiranjem, nadzorom i edukacijom.</p>
                <div class="social-links">
                    <a href="https://instagram.com/strazar.si" target="_blank" rel="noopener">Instagram</a>
                    <a href="https://linkedin.com/company/strazar-si" target="_blank" rel="noopener">LinkedIn</a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Stranica</h4>
                <ul>
                    <li><a href="usluge.php">Usluge</a></li>
                    <li><a href="cjenik.php">Cjenik</a></li>
                    <li><a href="tim.php">Naš tim</a></li>
                    <li><a href="clanci.php">Članci</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Podrška</h4>
                <ul>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="privatnost.php">Politika privatnosti</a></li>
                    <li><a href="mailto:info@strazar-sigurnost.hr">info@strazar-sigurnost.hr</a></li>
                    <li><a href="tel:+38512345678">+385 1 234 5678</a></li>
                </ul>
            </div>
            <div class="footer-newsletter">
                <h4>Prijava na obavijesti</h4>
                <p style="font-size:0.92rem;margin-bottom:14px;">Novi napadi i ranjivosti, jednom tjedno u vašem sandučiću.</p>
                <form action="https://formspree.io/f/mqpedvqg" method="POST">
                    <label for="footer-email" style="display:none;">Email adresa</label>
                    <input type="email" id="footer-email" name="email" placeholder="vas@email.com" required>
                    <input type="hidden" name="_subject" value="Nova prijava na newsletter (podnožje)">
                    <input type="text" name="_gotcha" style="display:none" tabindex="-1" autocomplete="off">
                    <button type="submit" class="btn on-ink">Pretplati se</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <?php echo date("Y"); ?> Stražar d.o.o. Sva prava pridržana.</span>
            <span><a href="privatnost.php">Politika privatnosti</a></span>
        </div>
    </div>
</footer>

</body>
</html>
