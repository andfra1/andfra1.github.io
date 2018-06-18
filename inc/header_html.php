<?php include_once('inc/header.php'); ?>

<header class="header">
  <div class="wrapper">
    <div class="header__logo">
      
        <a href="<?= HTTP; ?>">
          <?= $header['logo']; ?>
        </a>
      
    </div>
    <ul class="header__items">
      <?php foreach ( $header['menu'] as $key => $val) : ?>
      <li class="header__itemsBox">
        <a href="<?= $val; ?>" class="header__itemsBoxLink" title="<?= $key; ?>">
          <?= $key; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>

    <button class="burger" id="burger" value="off">
      <div class="burger__stripe"></div>
    </button>

  </div>
</header>
<div class="underHeaderSpacer"></div>