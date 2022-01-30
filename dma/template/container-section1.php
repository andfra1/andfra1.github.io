<?php
$sections = [
    'keyvisual',
    'list',
    'article',
    'alternately-list',
    'youtube',
    'achievements',
    'partners',
    'social-media'
];
?>
<?php foreach ($sections as $name) : ?>
    <section class="section section-<?= $name; ?>">
        <div class="container">
            <div class="wrapper">
                <?php if ($name == 'keyvisual') :
                    $url = 'assets/img/keyvisual.png';
                    ?>
                    <img src="<?= HTTP . $url; ?>" alt="Double Miss Academy">
                <?php endif; ?>

                <?php if ($name == 'list') :
                    $header = 'Akademia Strzelectwa Sportowego w łodzi';
                    $items = [
                        'Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!',
                        'Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!m dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!',
                        'Lorem ipsuLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!m dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!',
                        'Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!am quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!'
                    ]; ?>
                    <h2>
                        <?= $header; ?>
                    </h2>
                    <ul class="big-num-list">
                        <?php foreach ($items as $item) : ?>
                            <li>
                                <?= $item; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="cta">
                        <a href="#">
                            zobacz więcej
                        </a>
                    </div>

                <?php endif; ?>

                <?php
                $article = [
                    'title' => 'Jedziemy na mistrzostwa świata!<br>Zobacz relację z kwalifikacji!',
                    'img' => 'assets/img/article3.png',
                    'date' => '3 dni temu',
                    'url' => '#'
                ];

                if ($name == 'article') : ?>
                    <div class="article">
                        <div class="article__image">
                            <img src="<?= HTTP . $article['img']; ?>" alt="<?= $article['title']; ?>">
                        </div>
                        <div class="article__description">
                            <h2 class="title">
                                <?= $article['title']; ?>
                            </h2>
                            <div class="flex -ai-center -jc-between details">
                                <div class="date">
                                    <span class="icon-calendar"></span>
                                    <span>
                                    <?= $article['date']; ?>
                                </span>
                                </div>

                                <a href="<?= $article['url']; ?>"
                                   class="link custom-link">
                                        <span class="custom-link__effect">
                                            zobacz więcej
                                        </span>
                                    <span class="icon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($name == 'alternately-list') : ?>
                    <?php
                    $header = 'Kategorie IPSC';
                    $subheader = 'czyli czym strzelamy'
                    ?>
                    <h2>
                        <?= $header; ?>
                        <span>
                            <?= $subheader; ?>
                        </span>
                    </h2>

                    <div class="alternately-list">
                        <?php
                        $items = [
                            [
                                'header' => 'Production',
                                'img' => 'assets/img/ipsc-categories1.png',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!'
                            ],
                            [
                                'header' => 'Production',
                                'img' => 'assets/img/ipsc-categories2.png',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidemLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti, ducimus maiores modi odit quam quidem quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus! quo recusandae saepe sapiente? Illum iste laboriosam laudantium modi omnis pariatur quam quis voluptatibus!'
                            ]
                        ];
                        foreach ($items as $key => $value) : ?>
                            <article class="article">
                                <div class="image">
                                    <img src="<?= HTTP . $value['img']; ?>" alt="<?= $value['header']; ?>">
                                </div>
                                <h3 class="title">
                                    <?= $value['header']; ?>
                                </h3>
                                <div class="details">
                                    <?= $value['description']; ?>
                                    <a href="#" class="custom-link">
                                            <span class="custom-link__effect">
                                                zobacz więcej
                                            </span>
                                        <span class="icon-chevron-right"></span>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>


                <?php if ($name == 'youtube') : ?>
                    <?php
                    $header = 'DMA na Youtube';
                    $ytSrc = 'https://www.youtube.com/embed/hAFXO6C5Y0M';
                    ?>

                    <h2 class="title">
                        <?= $header; ?>
                    </h2>
                    <div class="youtube">
                        <iframe src="<?= $ytSrc; ?>"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="cta -invert">
                        <a href="http://www.youtube.com/channel/UCiP--er2G7w6RHojynSWczQ?sub_confirmation=1">
                            <span class="icon-youtube"></span>
                            subskrybuj
                        </a>
                    </div>

                <?php endif; ?>

                <?php if ($name == 'achievements') : ?>
                    <h2>
                        Nasze osiągniecia
                        <span>
                    jesteśmy w czołówce IPSC
                </span>
                    </h2>
                    <div class="flex -ai-start -jc-around achievements">
                        <?php
                        $items = [
                            [
                                'image' => 'award-gold.png',
                                'score' => [
                                    7, 13, 31
                                ]
                            ],
                            [
                                'image' => 'award-silver.png',
                                'score' => [
                                    11, 17, 14
                                ]
                            ],
                            [
                                'image' => 'award-bronze.png',
                                'score' => [
                                    6, 7, 11
                                ]
                            ]
                        ];
                        foreach ($items as $key => $value) : ?>
                            <div class="achievements__item">
                                <div class="achievements__item-logo">
                                    <img src="<?= HTTP . 'assets/img/awards/' . $value['image']; ?>" alt="">
                                </div>
                                <ul class="achievements__item-list">
                                    <?php foreach ($value['score'] as $index => $score) : ?>
                                        <li class="flex -ai-center -jc-center">
                                            <span>L<?= $index + 1 ?></span>
                                            <span><?= $score; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div>
                        <h3>
                            Ostatnie
                        </h3>
                        <div class="flex -ai-center -jc-center achievements__last">
                            <div class="achievements__last-logo">
                                <img src="<?= HTTP . 'assets/img/awards/award-gold.png'; ?>" alt="">
                            </div>
                            <div class="achievements__last-text">
                                <div class="mb-2">L1 Puchar "Wójta Cieszka"</div>
                                <div class="date">9 maja 2011</div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($name == 'partners') : ?>
                    <h2>
                        Nasi partnerzy
                        <span>
                    współpracujemy z najlepszymi
                </span>
                    </h2>
                    <div class="flex -ai-center -jc-start pt-2 logos-wrapper">
                        <?php
                        $logos = [
                            [
                                'alt' => 'proce i pestki',
                                'src' => 'proce-i-pestki-logo.png'
                            ],
                            [
                                'alt' => 'commercecon',
                                'src' => 'commercecon-logo.png'
                            ],
                            [
                                'alt' => 'sg',
                                'src' => 'sg-logo.png'
                            ],
                            [
                                'alt' => 'ipsc',
                                'src' => 'ipsc-logo.png'
                            ],
                            [
                                'alt' => 'm-arms',
                                'src' => 'm-arms-logo.png'
                            ]
                        ];
                        foreach ($logos as $item) : ?>
                            <div class="ma-2">
                                <img src="<?= HTTP . 'assets/img/logos/' . $item['src']; ?>"
                                     alt="<?= $item['alt']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($name == 'social-media') : ?>
                    <h2>
                        Media społecznościowe
                    </h2>
                    <ul class="social-media-list">
                        <?php
                        $items = [
                            [
                                'url' => 'https://www.facebook.com/doublemissacademy/',
                                'name' => 'doublemissacademy',
                                'icon' => 'facebook2',
                                'service' => 'facebook'
                            ],
                            [
                                'url' => '#',
                                'name' => '@doublemissacademy',
                                'icon' => 'twitter',
                                'service' => 'twitter'
                            ],
                            [
                                'url' => '#',
                                'name' => '@doublemissacademy',
                                'icon' => 'instagram',
                                'service' => 'instagram'
                            ]
                        ];
                        foreach ($items as $key => $val) : ?>
                            <li>
                                <a href="<?= $val['url'] ?>"
                                   class="flex -ai-center -jc-center c-<?= $val['service'] ?>"
                                   title="<?= $val['service'] ?>"
                                   rel="nofollow">
                                <span class="icon icon-<?= $val['icon'] ?>">
                                </span>
                                    <span>
                                    <?= $val['name'] ?>
                                </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>


            </div>
        </div>
    </section>
<?php endforeach; ?>