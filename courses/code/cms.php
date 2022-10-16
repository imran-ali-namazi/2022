<?php
am_var('sub-site', true);
include_once '../code/cms.php';

am_vars([
	'folder' => '/',
	'footer-message' => 'Use our <a href="%url%growing-together/">GROWING TOGETHER</a> network to create and use<br /> <b>course material</b> as we all strive to create abundance everywhere',
]);

include_once 'functions.php';

render();
?>
