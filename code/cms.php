<?php
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost')); //NOTE: declare before including functions as used by sitemap

include_once 'functions.php';

bootstrap([
	'name' => 'YieldMore.org',
	'byline' => 'Have Enthusiasm, Touch Lives',
	'safeName' => 'yieldmore',

	'version' => [ 'id' => '15', 'date' => '3 Dec 2022' ],

	'folder' => 'content/',
	'support_page_parameters' => true,
	'page_parameter1_in_title' => true,
	'start_year' => '2013',

	'theme' => 'biz-land',
	'uses' => 'custom-image-background',
	'og:image' => '%url%assets/yieldmore-opengraph.jpg?fver=2',
	'image-in-logo' => '-rectangle.jpg',

	'email' => 'team@yieldmore.org',
	'phone' => '+919841223313',
	'address' => 'Devakalam,<br />Chennai, India',

	'social' => [
		[ 'type' => 'facebook', 'link' => 'https://www.facebook.com/YieldMoreOrg', 'name' => 'facebook: main group' ],
		[ 'type' => 'workers-group', 'link' => 'https://drive.google.com/drive/folders/1sFhctiwBRnmTI-ctXI5kCkuChN3Ahs7z?usp=sharing', 'name' => 'praise for Imran and Team' ],
		[ 'type' => 'email', 'link' => 'mailto:team@yieldmore.org', 'name' => 'Imran\'s Email' ],
		[ 'type' => 'phone', 'link' => 'tel:+919841223313', 'name' => 'Imran\'s Mobile (India)' ],
		//[ 'type' => 'workers-group', 'link' => 'https://us.yieldmore.org', 'name' => 'our community by tribe.so' ],
		[ 'type' => 'group', 'link' => 'https://groups.io/g/yieldmore/topics', 'name' => 'Mailing List from groups.io' ],
		[ 'type' => 'google-talk', 'link' => 'https://www.clubhouse.com/@imran_ym', 'name' => 'Clubhouse of Imran' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/@AmadeusYieldsMore', 'name' => 'youtube: main channel love / new' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/@FacesOfYieldMore', 'name' => 'youtube: faces / 2018 and 2019' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/@ImranYieldsMore', 'name' => 'youtube: legacy / imran' ],
		[ 'type' => 'linkedin','link' => 'https://www.linkedin.com/company/yieldmore/' ],
		[ 'type' => 'github',  'link' => 'https://bitbucket.org/amadeusweb/yieldmore/', 'name' => 'bitbucket' ],
		[ 'type' => 'spotify', 'link' => 'https://open.spotify.com/show/2jvWo6nVSLbcpJIIv35fcT' ],
	],

	'incubating' => [
		[ 'name' => 'Labours of Love', 'url' => $local ? replace_vars('http://localhost%port%/subsites/love/', 'port') : 'https://love.yieldmore.org/' ],
		[ 'name' => 'Affirm Life', 'url' => $local ? replace_vars('http://localhost%port%/subsites/affirm/', 'port') : 'https://affirm.yieldmore.org/' ],
		[ 'name' => 'Farmers\' Recipes', 'url' => $local ? replace_vars('http://localhost%port%/subsites/farmers/', 'port') : 'https://farmers.yieldmore.org/' ],
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
