<?php include_once('inc/header.php'); ?>

<header class="header" id="header">
    <div class="container flex -ai-center -jc-between">
        <div class="ma-2 header__logo">
            <a href="<?= HTTP ?>">
                <img src="<?= HTTP . $header['logo']; ?>" alt="<?= $pageTitle; ?> logo">
            </a>
        </div>

<!--        <button class="rs-burger" id="rs-burger">-->
<!--            <div class="rs-burger_stripe"></div>-->
<!--        </button>-->
<!---->
<!--        <ul class="rs-header__menu" id="menu">-->
<!--            --><?php //foreach ($header['menu'] as $key => $val) : ?>
<!--                <li>-->
<!--                    <a href="--><?//= is_array($val) ? $val[0] : $val; ?><!--" title="--><?//= $key; ?><!--" class="noclass">-->
<!--                        --><?//= $key; ?><!----><?php //if (is_array($val)): ?>
<!--                            <span class="icon-angle-down"></span>-->
<!--                        --><?php //endif; ?>
<!--                    </a>-->
<!--                    --><?php //if (is_array($val)) : ?>
<!--                        <ul class="rs-header__submenu">-->
<!--                            --><?php //foreach (array_slice($val, 1) as $k => $v) : ?>
<!--                                <li>-->
<!--                                    <a href="--><?//= $v; ?><!--" title="--><?//= $k; ?><!--" class="noclass">-->
<!--                                        --><?//= $k; ?>
<!--                                    </a>-->
<!--                                </li>-->
<!--                            --><?php //endforeach; ?>
<!--                        </ul>-->
<!--                    --><?php //endif; ?>
<!--                </li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->

    </div>
</header>
<div class="underHeaderSpacer"></div>