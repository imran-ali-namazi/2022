<?php
function before_file() {
	echo '<div class="container" style="margin-top: 150px;">';
	echo '<h1>' . humanize(am_var('node')) . '</h1>';
}

function after_file() {
	echo '</div>';
}

?>
