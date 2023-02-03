<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/PTIqjpkF5Ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

<?php

renderFile(__DIR__ . '/_headers/2023.md');

recursive_menu(
	get_sheet('sitemap'),
	'menu',
	1,
	[
		'visible' => function($item, $cols) {
			return $item[$cols['section']] == 'menu' || $item[$cols['audience']];
		},
		'url-prefix' => function($item, $cols) {
			return $item[$cols['section']] == 'menu' ? '' : $item[$cols['section']] . '/';
		},
		'prefix' => function($item, $cols) {
			if ($item[$cols['section']] !== 'menu')
				return 'For: <u style="margin-right: 15px;">' . $item[$cols['audience']]  . ' / ' . $item[$cols['role']] . ':</u> ';

			$nameLC = urlize($item[$cols['name']]);
			$name = humanize($nameLC, 'no-site');

			$programmes = am_var('programmes');
			if (!isset($programmes[$nameLC])) die('Programme: ' . $nameLC . ' not defined in code/sitemap.php');
			$programme = $programmes[$nameLC];

			$form = sprintf('<a href="%s">help us by submitting this form</a>', 'https://youtube.com/#' . $programme['video']);
			$video = sprintf('<iframe src="%s"></iframe>', 'https://youtube.com/#' . $programme['video']);
			$toggleIdeas = ' | <a class="toggle-ideas" href="javascript:;">show ideas</a>';

			return '<span class="why-name"><strong>' . renderFile($name . '</strong>: '. $form . $toggleIdeas, [], false) . $video . '</span><br /><span class="why-head">';
		},
		'suffix' => function($item, $cols) {
			if ($item[$cols['section']] == 'menu') return '</span>';
			$why = $item[$cols['why']];
			$section = $item[$cols['section']];
			$programmes = am_var('programmes');
			if (!isset($programmes[$section])) die('Programme' . $section . ' not defined in code/sitemap.php');
			$programme = $programmes[$section];
			$why = str_replace('%programme%', $programme['name'], $why);
			return '<br /><blockquote class="why-text">' . $why . '</blockquote>';
		},
	]
);
?>
