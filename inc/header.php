<?php include_once('./path.php'); ?>
<?php include_once('content.php'); ?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<base href="./">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->

	<meta name="msapplication-TileColor" content="<?= $pageBasicColor; ?>">
	<meta name="theme-color" content="<?= $pageBasicColor; ?>">
	<meta name="apple-mobile-web-app-title" content="<?= $pageTitle; ?>">
	<meta name="application-name" content="<?= $pageTitle; ?>">
	<meta name="description" content="<?= $pageDescription; ?>" />

	<meta property="og:title" content="<?= $pageTitle_fb; ?>">
	<meta property="og:description" content="<?= $pageDescription_fb; ?>">
	<meta property="og:image:width" content="71">
	<meta property="og:image:height" content="71">
	<meta property="og:url" content="http://andfra.pl/">
	<meta property="og:image" content="http://andfra.pl/img/data/og-image.png">

	<link rel="apple-touch-icon" sizes="60x60" href="<?= HTTP ?>img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= HTTP ?>img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= HTTP ?>img/fav/favicon-16x16.png">
	<link rel="manifest" href="<?= HTTP ?>img/fav/site.webmanifest">
	<link rel="stylesheet" href="<?= HTTP ?>prod/css/main<?= $dev?'':$prod; ?>.css">

	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-98097944-1', 'auto');
		ga('send', 'pageview');
	</script>

	<title>
		<?= $pageTitle; ?>
	</title>

</head>

<body>