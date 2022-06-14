<?php

include_once 'functions.php';
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost'));

bootstrap([
	'name' => 'YieldMore.org',
	'byline' => 'Have Fun, Touch Lives',
	'safeName' => 'yieldmore',

	'version' => [ 'id' => '1', 'date' => '13 Jun 2022', ],

	'folder' => 'content/',

	'start_year' => '2013',

	'contact_cta_link' => 'mailto:team@yieldmore.org',
	'contact_cta_text' => 'Email',

	'theme' => 'biz-land',
	'uses' => 'custom-image-background',
	'og:image' => '%url%assets/yieldmore-opengraph.jpg?fver=2',

	'email' => 'team@yieldmore.org',
	'phone' => '+919841223313',
	'address' => 'Devakalam,<br />Chennai, India',

	'social' => [
		'linkedin' => 'https://www.linkedin.com/company/yieldmore/',
		'github' => 'https://bitbucket.org/amadeusweb/yieldmore/',
	],

	'styles' => ['styles',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css',
	],
	'scripts' => ['textToSpeech', 'content'],
	'google-analytics' => 'UA-166048963-1',

	'url' => $local ? replace_vars('http://localhost%port%/yieldmore/', 'port') : 'https://yieldmore.org/',
	'path' => SITEPATH,
]);

render();
?>
