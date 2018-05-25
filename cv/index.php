<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/css/main.css">
  <title>CV</title>
</head>

<body>
  <?php

$addTime = time() + (14 * 86400);
//$displayDate = date('d.m.Y',$addTime);
$displayDate = '20.05.2018r.';
$data = [
  'photo'=>'img/zdjecie-2.png',
  'contact'=> [
    'address' => 'Polska, Poznań',
    'tel' => '<a href="tel:+ 48 886 552 562">+ 48 886 552 562</a>',
    'mail' => '<a href="mailto:fandruszkiewicz@gmail.com">fandruszkiewicz@gmail.com</a>'
  ],
  'qr' => 'img/qr-code.png',
  'name' => '<h1><span>and</span>ruszkiewicz</h1><h1><span>fra</span>nciszek</h1>',
  'portfolio' => 'http://andfra.pl',
  'sections' => [
    'O sobie' => 
    [
      'about' => 
      'Jestem początkującym front-end developerem, którego fascynuje to co nowe. W niedalekiej przyszłóści widzę się jako full-stack. Obecnie szlifuję JavaScript i WordPress+PHP.'
    ],
    'Umiejętności' =>
    [
      'skills' => 
      [
        'html' => '5',
        'sass' => '5',
        'javascript' => '2',
        'jquery' => '2',
        'php' => '2',
        'wordpress' => '2',
        'gulp' => '3',
        'git' => '3',
        'photoshop' => '4'
      ]
    ],
    'Doświadczenie' =>
    [
      'experience' => [
        'SOLMedia / web-dev' => '06.2017 - 09.2017',
        'Crafton / web-dev' => '10.2017 - '.$displayDate,
        'Your company' => $displayDate.' - ...'
      ]
    ],
    // 'Wykształcenie' =>
    // [
    //   'education' => 
    //   [
    //     'Europejska Wyższa Szkoła Biznesu' => 'zarządzanie zasobami ludzkimi (licencjat)'
    //   ]
    // ]
  ],
  'agreement' => 'Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. 2016 r. poz. 922).'
]
?>

    <div class="container">
      <div class="wrapper">
        <div class="side">
          <div class="photo">
            <img src="<?=$data['photo'];?>" alt="Franciszek Andruszkiewicz - zdjęcie profilowe">
          </div>
          <div class="contact">
            <?php foreach($data['contact'] as $item => $val) : ?>
            <div class="contact__item">
              <div class="contact__itemSvg">
              <?php echo file_get_contents('img/svg/'.$item.'.svg'); ?>
              </div>
              <div class="contact__itemText">
                <?=$val?>
              </div>
            </div>
            <?php endforeach;?>
          
          <div class="qr">
            <img src="<?=$data['qr'];?>" alt="Kod QR">
          </div>
          </div>
        </div>
        <div class="content">
          <div class="header">
            <?=$data['name']?>
              <p>
                <a href="<?=$data['portfolio']?>" target="_blank">
                  <?=$data['portfolio']?>
                </a>
              </p>
          </div>
          <?php foreach ($data['sections'] as $header => $content) : ?>
          <section class="section">
            <div class="wrapper">
              <h2 class="section__header">
                <?=$header;?>
              </h2>
              <?php foreach ($content as $class => $item) : ?>
              <div class="section__block <?=$class?>">
                <?php

          switch($class) {
            case 'about' :
              echo $item;
            break;
            
            case 'skills' :
              echo '<ul class="list">';
              foreach ($item as $key => $val) {
                echo '<li class="list__item" data-tooltip="'.$key.'"><div class="list__itemName">'.file_get_contents("img/svg/".$key.".svg").'</div>
                <div class="list__itemRange range">';
                  foreach(range(0, 4, 1) as $num) :
                    if ($num < $val) :
                      echo '<span class="range__color range__color--color"></span>';
                    else :
                      echo '<span class="range__color"></span>';
                    endif;
                  endforeach;
                echo '</div></li>';
              }
              echo '</ul>';
            break;
            
            case 'experience' :
              echo '<ul class="timeline">';
              foreach ($item as $key => $val) {
                echo '<li class="timeline__item"><div class="timeline__itemName">'.$key.'</div><div class="timeline__itemVal">'.$val.'<span class="now"></span></div></li>';
              }
              echo '</ul>';
            break;
            
            case 'education' :
              echo '<ul class="edu">';
              foreach ($item as $key => $val) {
                echo '<li>'.$key.'<span>'.$val.'</span></li>';
              }
              echo '</ul>';
            break;
          }
          ?>
              </div>
              <?php endforeach;?>
            </div>
          </section>
          <?php endforeach;?>
          <footer class="footer">
            <div class="wrapper">
              <?=$data['agreement']?>
            </div>
          </footer>
        </div>
      </div>
    </div>
</body>

</html>