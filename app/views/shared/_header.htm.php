<?php $this->pageTitle = ($page_title) ? $page_title : $this->pageTitle; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cryptfy</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="" />
	<meta name="author" content="" />

<?php echo $this->element('shared/facebook_tags'); ?>


	<?php echo $html->stylesheet(array('screen')); ?>

</head>

<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div id="container">
		<h1><a href="/">Cryptfy</a></h1>
