<?php
/**
* @author		YOOtheme http://www.yootheme.com
* @copyright	Copyright (C) YOOtheme GmbH
* @license		http://www.gnu.org/licenses/gpl.html GNU/GPL
*
* @modyfy		Stephan W. 3d-hobby-art.de
* @package		minBootstrap-{y} v1.0
************************************************************************/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

// get bootstrap
JHtml::_('bootstrap.framework');

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

<head>
<?php echo $this['template']->render('head'); ?>


<!--[if gte IE 9]>
  <style type="text/css">
    .uk-panel-header .uk-panel-hr, .tab-pane {filter: none}
  </style>
<![endif]-->
</head>

<body class="<?php echo $this['config']->get('body_classes'); ?>">

		<?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
		<section class="toolbars" <?php if ($this['config']->get('toolbars', true)) : ?>style="padding: <?php echo $this['config']->get('toolbars') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="tm-toolbar uk-clearfix uk-hidden-small">

					<?php if ($this['widgets']->count('toolbar-l')) : ?>
					<div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
					<?php endif; ?>

					<?php if ($this['widgets']->count('toolbar-r')) : ?>
					<div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
					<?php endif; ?>

				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['widgets']->count('logo + headerbar')) : ?>
		<section class="logo-headerbar" <?php if ($this['config']->get('logoheaderbar', true)) : ?>style="padding: <?php echo $this['config']->get('logoheaderbar') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="tm-headerbar uk-clearfix uk-hidden-small">

					<?php if ($this['widgets']->count('logo')) : ?>
					<a class="tm-logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
					<?php endif; ?>

					<?php echo $this['widgets']->render('headerbar'); ?>

				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['widgets']->count('menu + search')) : ?>
		<section class="menu-search" <?php if ($this['config']->get('menu-search', true)) : ?>style="padding: <?php echo $this['config']->get('menu-search') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<nav class="tm-navbar uk-navbar">
					<?php if ($this['widgets']->count('menu')) : ?>
					<?php echo $this['widgets']->render('menu'); ?>
					<?php endif; ?>

					<?php if ($this['widgets']->count('offcanvas')) : ?>
					<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
					<?php endif; ?>

					<?php if ($this['widgets']->count('search')) : ?>
					<div class="uk-navbar-flip">
						<div class="uk-navbar-content uk-hidden-small"><?php echo $this['widgets']->render('search'); ?></div>
					</div>
					<?php endif; ?>

					<?php if ($this['widgets']->count('logo-small')) : ?>
					<div class="uk-navbar-content uk-navbar-center uk-visible-small"><a class="tm-logo-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a></div>
					<?php endif; ?>
				</nav>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['widgets']->count('top-a')) : ?>
		<section class="top-a" <?php if ($this['config']->get('topa', true)) : ?>style="padding: <?php echo $this['config']->get('topa') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="<?php echo $grid_classes['top-a']; echo $display_classes['top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?></div>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['widgets']->count('top-b')) : ?>
		<section class="top-b" <?php if ($this['config']->get('topb', true)) : ?>style="padding: <?php echo $this['config']->get('topb') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="<?php echo $grid_classes['top-b']; echo $display_classes['top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?></div>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
		<section class="main-top" <?php if ($this['config']->get('maintop', true)) : ?>style="padding: <?php echo $this['config']->get('maintop') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>

					<?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
					<div class="<?php echo $columns['main']['class'] ?>">

						<?php if ($this['widgets']->count('main-top')) : ?>
						<div class="<?php echo $grid_classes['main-top']; echo $display_classes['main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></div>
						<?php endif; ?>

						<?php if ($this['config']->get('system_output', true)) : ?>
						<main class="tm-content">

							<?php if ($this['widgets']->count('breadcrumbs')) : ?>
							<?php echo $this['widgets']->render('breadcrumbs'); ?>
							<?php endif; ?>

							<?php echo $this['template']->render('content'); ?>

						</main>
						<?php endif; ?>

						<?php if ($this['widgets']->count('main-bottom')) : ?>
						<div class="<?php echo $grid_classes['main-bottom']; echo $display_classes['main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></div>
						<?php endif; ?>

					</div>
					<?php endif; ?>

					<?php foreach($columns as $name => &$column) : ?>
					<?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
					<aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
					<?php endif ?>
					<?php endforeach ?>

				</div>
			</div>
		</section>
		<?php endif; ?>


			<?php if ($this['widgets']->count('bottom-a')) : ?>
			<section class="bottom-a" <?php if ($this['config']->get('bottoma', true)) : ?>style="padding: <?php echo $this['config']->get('bottoma') ?>px 0;<?php endif; ?>">
				<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
					<div class="<?php echo $grid_classes['bottom-a']; echo $display_classes['bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?>
					</div>
				</div>
			</section>
			<?php endif; ?>

			<?php if ($this['widgets']->count('bottom-b')) : ?>
			<section class="bottom-b" <?php if ($this['config']->get('bottomb', true)) : ?>style="padding: <?php echo $this['config']->get('bottomb') ?>px 0;<?php endif; ?>">
				<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
					<div class="<?php echo $grid_classes['bottom-b']; echo $display_classes['bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
						<?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?>
					</div>
				</div>
			</section>
			<?php endif; ?>
		

		<?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true)) : ?>
		<section class="footer-debug" <?php if ($this['config']->get('footer', true)) : ?>style="padding: <?php echo $this['config']->get('footer') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="tm-footer uk-width-medium-3-4">

					<?php
						echo $this['widgets']->render('footer');
						$this->output('warp_branding');
						echo $this['widgets']->render('debug');
					?>
				</div>
				<div class="tm-footer bg-link uk-width-medium-1-4">Designed by <a target="_blank" href="http://www.3d-hobby-art.de/" title="Joomla Templates and much more...">3d-hobby-art.de</a></div>
			</div>
		</section>
		<?php else: ?>
		<section class="footer" <?php if ($this['config']->get('footer', true)) : ?>style="padding: <?php echo $this['config']->get('footer') ?>px 0;<?php endif; ?>">
			<div class="uk-container uk-container-center" <?php if ($this['config']->get('maxwidth', true)) : ?>style="max-width:<?php echo $this['config']->get('maxwidth') ?>px;"<?php endif; ?> >
				<div class="tm-footer bg-link uk-width-medium-4-4">Designed by <a target="_blank" href="http://www.3d-hobby-art.de/" title="Joomla Templates and much more...">3d-hobby-art.de</a></div>
			</div>
		</section>
		<?php endif; ?>


	<?php if ($this['config']->get('totop_scroller', true)) : ?>
	<a id="top-link" data-uk-smooth-scroll href="#"></a>
	<?php endif; ?>

	<?php echo $this->render('footer'); ?>

	<?php if ($this['widgets']->count('offcanvas')) : ?>
	<div id="offcanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
	</div>
	<?php endif; ?>

</body>
</html>