<?php
  $about = [
    'title' => 'o mnie',
    'text' => '
    <p class="about__p">
    Nazywam się Franciszek Andruszkiewicz i jestem front-end developerem. Przez prawie rok pracowałem nad zmianą branży, w która da mi spełnienie i satysfakcję z wykonywanych zadań. Przez kolejny rok nabierałem doświadczenia jako junior front-end developer w firmie SOLMedia, a następnie dostałem duży zastrzyk wiedzy i doświadczenia w firmie Crafton.
    </p>
    <p class="about__p">
    Obecnie wiem, że chciałbym zagłębić również temat PHP i SQL, żeby móc samodzielnie działać po stronie back-end. Następnie Angular lub React.
    </p>',
    'others' => '
    <p><a href="./cv/">Link do CV</a></a></p>
    <p>Z czego korzystam na codzień:</p>
    ',
    'skills' => [
      'html' => [
        'Standard HTML5 z zachowaniem semantyki',
        'Responsive Web Design (RWD)',
        'Mobile-first / Desktop-first'
      ],
      'sass' => [
        'Przyspieszenie pracy',
        'Doskonały przy wykorzystaniu BEM'
      ],
      'javascript' => [
        'ES5 i ES6',
        'poziom średni'
      ],
      'jquery' => [
        'Przyspieszenie pracy',
        'Poziom średni'
      ],
      'php' => [
        'Dzielnie stawiam pierwsze kroki :)'
      ],
      'github' => [
        'git commit, git push',
        'Obsługa tylko z pozycji konsoli'
      ],
      'gulp' => [
        'Żeby życie było łatwiejsze :)'
      ],
      'wordpress' => [
        'W większości wykorzystywany z ACF'
      ],
      'joomla' => [
        'Do tej pory wykonałem w nim proste projekty widoczne w portfolio'
      ],
      'bootstrap' => [
        'Korzystam gdy jest taka potrzeba'
      ]
    ]
  ]
  
?>

  <section class="section about" id="about">

    <div class="wrapper">
      <h1 class="about__header" data-before="&gt;" data-after="_">
        <?= $about['title']?>
      </h1>

      <div class="about__content">
        <?= $about['text']?>
      </div>

      <?= $about['others']?>

        <div class="about__skills">
          <div class="about__skillsIcons">
            <?php foreach($about['skills'] as $icon => $desc) : ?>
            <div class="about__skillsIconsSvg">
              <?= file_get_contents('img/svg/' . $icon . '.svg'); ?>
                <?= file_get_contents('img/svg/svg-color/' . $icon . '.svg'); ?>
            </div>
            <?php endforeach;?>
          </div>
          <?php foreach($about['skills'] as $icon => $desc) : ?>
          <div class="about__skillsContent">
            <ul>
              <?php foreach($desc as $list) : ?>
              <li>
                <?= $list; ?>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <?php endforeach;?>
        </div>
    </div>
  </section>