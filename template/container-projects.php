<?php
 $portfolio = [
  'title' => 'projekty',
  'project' => [
    'netvariant' => [
      'subtext' => '(demo)',
      'text' => [
        'desc' => 'Front-end wykonany na podstawie PSD. Animacje i zachowanie - inwencja własna.',
        'tools' => [
          'html', 'sass', 'javascript', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/netvariant.jpg',
      'link' => './netvariant'
    ],
    'WSM' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Strona wykonana od podstaw dla klienta zajmującego się fotografią i filmowaniem eventów. Wykonanie w oparciu o ustalenia z klientem.',
        'tools' => [
          'html', 'sass', 'jquery', 'joomla', 'bootstrap', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/wsm.jpg',
      'link' => 'http://wsm-digital.pl/'
    ],
    'Bling Bling Garage' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Bling Bling Garage - studio detailingowe specjalizujące się w motocyklach. Wtryna wykonana od podstaw (pusty szablon) w Joomla',
        'tools' => [
          'html', 'sass', 'jquery', 'joomla', 'bootstrap', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/bling.jpg',
      'link' => 'http://www.blingblinggarage.pl/'
    ],
    'teja' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Witryna architektki wnętrz. Wykonano od podstaw (pusty szablon) w Joomla!',
        'tools' => [
          'html', 'sass', 'jquery', 'joomla', 'bootstrap', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/teja.jpg',
      'link' => 'http://tejadesign.pl/'
    ],
    'Misja team' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Wtryna wykonana od podstaw (pusty szablon) w Joomla',
        'tools' => [
          'html', 'sass', 'jquery', 'joomla', 'bootstrap', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/misja.jpg',
      'link' => 'https://www.m-team-biurorachunkowe.pl/'
    ],
    'Gastro polerki' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Strona wykonana od podstaw (pusty szablon) w WordPress na podstawie PSD. Zachowanie i wygląd - zgodnie z zaleceniami klienta',
        'tools' => [
          'html', 'sass', 'jquery', 'wordpress', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/hendi.jpg',
      'link' => 'https://hendi.beta.crafton.pl/_cms/'
    ],
    'bodie' => [
      'subtext' => '(komercyjnie)',
      'text' => [
        'desc' => 'Strona firmy zajmującej się szkoleniami i konferencjami bazująca na przerobionmy szablonie w WordPress zgodnie z zaleceniami klienta.',
        'tools' => [
          'html', 'sass', 'jquery', 'wordpress', 'php', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/bodie.jpg',
      'link' => 'http://bodie.beta.crafton.pl/'
    ],
    'hair salon' => [
      'subtext' => '(demo)',
      'text' => [
        'desc' => 'Jeden ze starszych projektów wykonanych na podstawie PSD',
        'tools' => [
          'html', 'sass', 'javascript', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/hair.jpg',
      'link' => './hairsalon/index.html'
    ],
    'Blog1' => [
      'subtext' => '(demo)',
      'text' => [
        'desc' => 'Jeden z pierwszych projektów bazujący na serwisie znanego youtubera <a href="https://jarock.pl/" rel="nofollow">jarock.pl</a>',
        'tools' => [
          'html', 'sass', 'javascript', 'rwd'
        ]
      ],
      'img' => 'img/portfolio/blog1.jpg',
      'link' => './blog1/index.html'
    ]
  ]
 ];

 $project = $portfolio['project'];
?>

  <section class="section projects" id="projects">
    <div class="wrapper">
      <h1 class="projects__header">
        <?= $portfolio['title']?>
        <span id="nextProject">next &gt;</span>
      </h1>

      <div class="slider" id="slider">

        <?php foreach ($project as $name => $content) : ?>
        <div class="slider__slide">
          <div class="slider__slideContent">
            <div class="slider__slideContentText">
              <h2>
                <?= $name; ?>
                  <?php if( !empty($content['subtext'])) : ?>
                  <small>
                    <?= $content['subtext']?>
                  </small>
                  <?php endif; ?>
              </h2>
              <p>
                <?= $content['text']['desc']; ?>
              </p>

              <ul>
                <?php foreach ($content['text']['tools'] as $key) : ?>
                <li data-tooltip="<?= $key; ?>">
                  <?= file_get_contents('img/svg/' . $key . '.svg'); ?>
                </li>
                <?php endforeach; ?>
              </ul>

            </div>
            <div class="slider__slideContentImg">
            <div class="slider__slideContentImgBg">
              <a href="<?= $content['link']; ?>" target="_blank" ref="nofollow">
                <?= file_get_contents('img/svg/external.svg'); ?>
              </a>
            </div>
              <img src="<?= $content['img']; ?>" alt="<?= $name; ?>">
            </div>
          </div>
        </div>

        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>