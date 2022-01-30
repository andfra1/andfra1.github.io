<?php include_once('inc/header_html.php'); ?>

<?php
if (!$_SERVER['QUERY_STRING']) {
    include_once('template/container-section1.php');
}
if ($_SERVER['QUERY_STRING'] === 'kontakt') {
    include_once('template/contact.php');
}
if ($_SERVER['QUERY_STRING'] === 'efekty') {
    include_once('template/efekty.php');
}
if ($_SERVER['QUERY_STRING'] === 'artykul') {
    include_once('template/article.php');
}
if ($_SERVER['QUERY_STRING'] === 'cennik') {
    include_once('template/prices.php');
}
?>
<?php include_once('inc/footer_html.php'); ?>