<section class="section-zero section--bg-green">
    <div class="container">
        <h1 class="rs-h1">
            kontakt
            <span class="icon-mobile-phone"></span>
        </h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="contact">
            <ul class="contact-list">
                <?php
                $contact = [
                    'tel' => ['+48 512 388 870', '+48 61 221 94 11'],
                    'email' => 'info@dentalcomfort.pl',
                    'address' => '<strong>Dental Comfort</strong><br>ul. Ławica 2, <br>60-186 Poznań',
                    'opened' => 'pn - pt: 8:00 - 20:00'
                ] ?>
                <li class="contact-list__item">
                    <div class="contact-list__item__box">
                        <span class="icon-map-marker"></span>
                        <address>
                            <?= $contact['address']; ?>
                        </address>
                    </div>
                </li>
                <li class="contact-list__item">
                    <div class="contact-list__item__box">
                        <span class="icon-calendar"></span>
                        <div>
                            <?= $contact['opened']; ?>
                        </div>
                    </div>
                </li>
                <li class="contact-list__item">
                    <div class="contact-list__item__box">
                        <span class="icon-mobile-phone"></span>
                        <a href="tel: <?= $contact['tel'][0]; ?>" title="telefon">
                            <?= $contact['tel'][0]; ?>
                        </a>
                    </div>
                    <div class="contact-list__item__box">
                        <span class="icon-phone"></span>
                        <a href="tel: <?= $contact['tel'][1]; ?>" title="telefon">
                            <?= $contact['tel'][1]; ?>
                        </a>
                    </div>
                </li>
                <li class="contact-list__item">
                    <div class="contact-list__item__box">
                        <span class="icon-envelope-o"></span>
                        <a href="mailto:<?= $contact['email']; ?>" title="email">
                            <?= $contact['email']; ?>
                        </a>
                    </div>
                </li>

            </ul>
            <form action="./" class="frm">
                <div class="frm-row">
                    <div class="frm-col">
                        <div class="frm-input-box">
                            <input type="email" name="email" id="frm-email" placeholder="E-mail" required>
                            <label class="frm-label">E-mail</label>
                        </div>
                    </div>
                    <div class="frm-col">
                        <div class="frm-input-box">
                            <input type="phone" name="phone" id="frm-phone" placeholder="Telefon" required>
                            <label class="frm-label">Telefon</label>
                        </div>
                    </div>
                </div>
                <div class="frm-row">
                    <div class="frm-col">
                        <div class="frm-input-box">
                            <input type="text" name="firstname" id="frm-firstname" placeholder="Imię i nazwisko"
                                   required>
                            <label class="frm-label">Imię i nazwisko</label>
                        </div>
                    </div>
                </div>
                <div class="frm-row">
                    <div class="frm-col">
                        <div class="frm-input-box">
                            <textarea name="frm-textarea" id="frm-textarea">Treść wiadomości</textarea>
                        </div>
                    </div>
                </div>
                <div class="fmr-row">
                    <div class="frm-col">
                        <ul class="frm-agreement">
                            <li>
                                Wyrażam zgodę na przetwarzanie moich danych osobowych przez administratora
                                danych DENTAL
                                COMFORT SP Z O O, z siedzibą w Poznaniu, ul.Złotowska 51B/4, numer NIP
                                7792411313 w celu
                                kontaktu telefonicznego i przedstawienia oferty handlowej na podstawie art. 6
                                ust 1 lit. a.
                                ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r.
                            </li>
                            <li>
                                Podaję dane osobowe dobrowolnie i oświadczam, że są one zgodne z prawdą.
                            </li>
                            <li>
                                Zapoznałem(-am) się z treścią <a
                                        href="http://www.dentalcomfort.pl/polityka-prywatnosci">polityki
                                    prywatności</a>, w tym z informacją o celu i sposobach przetwarzania danych
                                osobowych
                                oraz prawie dostępu do treści swoich danych i prawie ich poprawiania.
                            </li>
                        </ul>
                        <div class="frm-input-box frm-input-box--center frm-input-box--clear">
                            <input type="checkbox" name="agreement" value="1" aria-invalid="false"
                                   id="frm-agreement"
                                   required>
                            <label for="frm-agreement" class="frm-label frm-label-click">Akceptuję</label>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <button class="btn btn--icon-right" type="submit">
                        Wyślij
                        <span class="icon-arrow-right"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="section-zero section-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.8177612112804!2d16.821314315803306!3d52.409978979793465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704444ef2591afd%3A0xe8fb9d17093095c9!2sDental+Comfort+Stomatologia+Ortodoncja+Implanty!5e0!3m2!1spl!2spl!4v1566504597859!5m2!1spl!2spl"
            style="border:0" allowfullscreen class="map1"></iframe>
</section>