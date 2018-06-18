<footer class="footer">
  <?php if ( !empty($footer['top']) ) : ?>
  <div class="wrapper">
    <div class="footer__top">

      <?php foreach( $footer['top'] as $item => $content ) : ?>
      <div class="footer__topItems">
        <h3>
          <?= $item; ?>
        </h3>

        <?php if( is_array($content) ) : ?>
        <ul>

          <?php foreach( $content as $text => $link ) : ?>
          <li>
            <a href="<?= $link?>" title="<?= $text; ?>">
              <?= $text; ?>
            </a>
          </li>
          <?php endforeach; ?>

        </ul>
        <?php else : ?>

        <?= $content; ?>
          <?php endif; ?>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
  <?php endif; ?>


  <?php if ( !empty($footer['bottom']) ) : ?>
  <div class="wrapper">
    <div class="footer__bottom">

      <?php foreach( $footer['bottom'] as $side => $value ) : ?>
      <div class="footer__bottomSide">

        <?php if( is_array($value) ) : ?>
        <ul>

          <?php foreach( $value as $elem => $link ) : ?>
          <li>
            <a href="<?= $link?>" title="">
              <?= file_get_contents($elem); ?>
            </a>
          </li>
          <?php endforeach; ?>

        </ul>
        <?php else : ?>
          <?= $value; ?>
        <?php endif; ?>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
  <?php endif; ?>

</footer>

<?php include_once('inc/footer.php'); ?>