<?php
if (am_var('node') == 'spirit')
	echo file_get_contents(__DIR__ . '/imran-religious.html');
?>

<div id="footer-content" class="footer-bgd" style="margin-top: 30px;">
	<div class="container">
		<br /><br />
		<a href="https://docs.google.com/presentation/d/1_rpZcsQRUVZYW5Ub--0Ut_mp1zw1oSnKcIWBUYJxwSI/edit?usp=sharing"><img src="<?php echo am_var('url'); ?>yieldmore-rectangle.jpg" class="img-fluid" /></a>
		<br /><br />
		<p class="footer-message"><?php echo am_var('footer-message'); ?></p>
		<br /><br />
	</div>
</div>
