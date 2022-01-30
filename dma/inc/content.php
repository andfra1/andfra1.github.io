<?php

//meta begin
$pageTitle = 'Double Miss Academy';
$pageTitle_fb = $pageTitle;
$pageDescription = 'Description';
$pageDescription_fb = $pageDescription;
$pageBasicColor = '#000';
//meta end

$header = [
    'logo' => 'assets/img/logo.png',
    'menu' => [
        'strona główna' => HTTP . 'index.php',
        'klinika' => [HTTP . '?artykul',
            'O nas' => HTTP . '?artykul',
            'Kwalifikacje' => HTTP . '?artykul',
            'Aktualności' => HTTP . '?artykul',
            'Gwarancje' => HTTP . '?artykul',
            'Regulamin' => HTTP . '?artykul'
        ],
        'leczenie' => [HTTP . '?artykul',
            'Ortodoncja' => HTTP . '?artykul',
            'Okluzja' => HTTP . '?artykul',
            'Estetyka' => HTTP . '?artykul',
            'Protetyka' => HTTP . '?artykul',
            'Leczenie kanałowe' => HTTP . '?artykul',
            'Wybielanie zębów' => HTTP . '?artykul',
            'Chirurgia stomatologiczna' => HTTP . '?artykul',
            'Zabiegi okołoimplantacyjne' => HTTP . '?artykul',
            'RTG pantomograf' => HTTP . '?artykul'
        ],
        'cennik' => HTTP . '?cennik',
        'kontakt' => HTTP . '?kontakt',
        'efekty pracy' => HTTP . '?efekty',
    ],
];

$footer = [
    'top' => [
        'item1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae voluptatem modi inventore culpa amet porro!
    Voluptatum debitis est alias nobis odio, pariatur dolorem voluptatem ea reprehenderit quis eum labore!',
        'item2' => [
            'item 1' => '#',
            'item 2' => '#',
            'item 3' => '#',
            'item 4' => '#',
            'item 5' => '#'
        ],
        'item3' =>
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae voluptatem modi inventore culpa amet porro!
    Voluptatum debitis est alias nobis odio, pariatur dolorem voluptatem ea reprehenderit quis eum labore!',

        'item4' =>
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae voluptatem modi inventore culpa amet porro!
    Voluptatum debitis est alias nobis odio, pariatur dolorem voluptatem ea reprehenderit quis eum labore!',
    ],
    'bottom' => [
        'left' => 'Copyright all right!',
        'right' => [
            '[fb]' => '#',
            '[twitter]' => '#',
            '[in]' => '#',
        ]
    ]
];
//dd($header['items'])
?>