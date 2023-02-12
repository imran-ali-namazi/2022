<?php
echo '<div id="footer-section-menu" class="container">';
if (!section_menu()) {
	echo '<h2>YM\'s Programmes and Sessions</h2>';
	menu('/content/programs/', ['list-only-folders' => true]);
}
echo '</div>';

if (am_var('node') == 'spirit')
	echo file_get_contents(__DIR__ . '/imran-religious.html');
?>

<div id="footer-content" class="footer-bgd" style="margin-top: 30px;">
	<div class="container">
		<br /><br />
		<a href="https://docs.google.com/presentation/d/1_rpZcsQRUVZYW5Ub--0Ut_mp1zw1oSnKcIWBUYJxwSI/edit?usp=sharing"><img src="<?php echo am_var('url'); ?><?php echo am_var('safeName'); ?>-rectangle.jpg" class="img-fluid" /></a>
		<br /><br />
		<p class="footer-message"><?php echo am_var('footer-message'); ?></p>
		<br /><br />
		<div class="social-links"><?php foreach(am_var('social') as $item) { ?>
			<a target="_blank" href="<?php echo $item['link']; ?>" title="<?php echo isset($item['name']) ? $item['name'] : $item['type']; ?>" class="<?php echo $item['type']; ?>"><i class="icofont-<?php echo $item['type']; ?>"></i></a><?php } ?>
		</div>
	</div>
</div>
