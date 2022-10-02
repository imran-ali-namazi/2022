<?php

include_once 'functions.php';
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost'));

bootstrap([
	'name' => 'YieldMore.org',
	'byline' => 'Have Enthusiasm, Touch Lives',
	'safeName' => 'yieldmore',

	'version' => [ 'id' => '8', 'date' => '2 Oct 2022' ],

	'folder' => 'content/',
	'support_page_parameters' => true,

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
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/c/YieldmoreOrgAM', 'name' => 'youtube: legacy / imran' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/channel/UCESPy4vMsnv3htBqvHJh51Q/', 'name' => 'youtube: faces / 2018 and 2019' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/channel/UCOmK_qgPh2sNQxGNxFh7mnQ', 'name' => 'youtube: love / new' ],
		[ 'type' => 'linkedin', 'link' => 'https://www.linkedin.com/company/yieldmore/' ],
		[ 'type' => 'github', 'link' => 'https://bitbucket.org/amadeusweb/yieldmore/', 'name' => 'bitbucket' ],
		[ 'type' => 'spotify', 'link' => 'https://open.spotify.com/show/2jvWo6nVSLbcpJIIv35fcT' ],
	],

	'styles' => ['styles',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min',
		'https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap',
		'https://fonts.googleapis.com/css2?family=Pattaya&display=swap',
	],
	'scripts' => ['textToSpeech', 'groups', 'content'],
	'google-analytics' => 'UA-166048963-1',

	'url' => $local ? replace_vars('http://localhost%port%/yieldmore/', 'port') : 'https://yieldmore.org/',
	'path' => SITEPATH,
]);

render();
?>
