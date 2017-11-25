<?php defined('_JEXEC') or die('Restricted access'); ?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	<head>
		<jdoc:include type="head"/>
		<header>
			<a class="logo" title="Startseite" href="/" name="logo"><span>Startseite</span></a>
			<div class="top-nav">
				<jdoc:include type="modules" name="top"/>
			</div>
		</header>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css"
			  type="text/css"/>
	</head>
    <body>
        <div class="wrapper">
            <div class="main-nav">
                <jdoc:include type="modules" name="left"/>
            </div>
            <div class="content">
                <jdoc:include type="component"/>
                <jdoc:include type="modules" name="footer"/>
            </div>
            <div class="sidebar">
                <jdoc:include type="modules" name="right"/>
            </div>
        </div>
    </body>
</html>