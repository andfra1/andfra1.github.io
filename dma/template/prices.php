<section class="section-zero section--bg-green">
    <div class="container">
        <h1 class="rs-h1">
            cennik
            <span class="icon-credit-card"></span>
        </h1>
    </div>
</section>
<section>
    <div class="container">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="prices-table">
                <div class="prices-table__header">
                    ortodoncja
                </div>
                <ul class="prices-table__list">
                    <li class="prices-table__list__item ptli">
                        <div class="ptli__main">
                            <div class="ptli__main__desc">
                                konsultacja
                            </div>
                            <div class="ptli__main__spacer"></div>
                            <div class="ptli__main__price">
                                150
                            </div>
                        </div>
                    </li>
                    <li class="prices-table__list__item ptli">
                        <div class="ptli__main">
                            <div class="ptli__main__desc">
                                aparat stały metalowy
                            </div>
                            <div class="ptli__main__spacer"></div>
                            <div class="ptli__main__price">
                                2150
                            </div>

                        </div>
                        <div class="ptli__bottom">
                            1 łuk
                        </div>
                    </li>
                    <li class="prices-table__list__item ptli">
                        <div class="ptli__main">
                            <div class="ptli__main__desc">
                                aparat stały estetyczny
                            </div>
                            <div class="ptli__main__spacer"></div>
                            <div class="ptli__main__price">
                               3150
                            </div>
                        </div>
                        <div class="ptli__bottom">
                            (zamki porcelanowe) 1 łuk
                        </div>

                    </li>

                </ul>
            </div>
        <?php endfor; ?>
    </div>
</section>