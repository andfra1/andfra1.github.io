<footer class="footer" id="footer">
    <section>
        <div class="container">
            <div class="flex wrapper">
                <ul class="menu">
                    <?php
                    $menu = [
                        [
                            'nazwa' => 'akademia',
                            'link' => '#'
                        ],
                        [
                            'nazwa' => 'skład',
                            'link' => '#'
                        ],
                        [
                            'nazwa' => 'blog',
                            'link' => '#'
                        ],
                        [
                            'nazwa' => 'kontakt',
                            'link' => '#'
                        ]
                    ];
                    foreach ($menu as $value) : ?>
                        <li>
                            <a href="<?= $value['link']; ?>">
                                <?= $value['nazwa']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="flex -ai-center -jc-end contact">
                    <ul class="flex -wrap -jc-around -ai-center">
                        <?php
                        $contact = [
                            [
                                'icon' => 'messenger',
                                'link' => 'https://www.facebook.com/',
                                'text' => 'facebook'
                            ],
                            [
                                'icon' => 'headphones',
                                'link' => '+48000000000',
                                'text' => '+48 000 000 000'
                            ],
                            [
                                'icon' => 'sphere',
                                'link' => './',
                                'text' => 'https://dma.pl'
                            ]
                        ];
                        foreach ($contact as $value) : ?>
                            <li class="contact-item">
                                <a href="<?= $value['link'] ?>"
                                   class="flex -ai-center -jc-center contact-item__link">
                                    <?php if (!empty($value['icon'])) : ?>
                                        <div class="icon mr-1">
                                            <span class="icon-<?= $value['icon'] ?>"></span>
                                        </div>
                                    <?php endif; ?>
                                    <span>
                                <?= $value['text'] ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="wrapper flex -ai-center -jc-center footer-bottom">
                <div>
                    Copyright by
                    <a href="./">
                        Double Miss Academy
                    </a> &copy; 2022
                </div>
            </div>
        </div>
    </section>
</footer>

<?php include_once('inc/footer.php'); ?>