<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/aJlLb1Lrj9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

<?php

renderAnyFile(__DIR__ . '/_introduction.md');

renderAnyFile(__DIR__ . '/_headers/2023.md');

recursive_menu(
	get_sheet('sitemap'),
	'ideas-menu',
	1,
	[
		'visible' => function($item, $cols) {
			return $item[$cols['section']] == 'ideas-menu' || $item[$cols['audience']];
		},
		'url-prefix' => function($item, $cols) {
			return $item[$cols['section']] == 'ideas-menu' ? '' : $item[$cols['section']] . '/';
		},
		'prefix' => function($item, $cols) {
			if ($item[$cols['section']] !== 'ideas-menu')
				return 'For: <u style="margin-right: 15px;">' . $item[$cols['audience']]  . ' / ' . $item[$cols['role']] . ':</u> ';

			$nameLC = urlize($item[$cols['name']]);
			$name = humanize($nameLC, 'no-site');

			$programmes = am_var('programmes');
			if (!isset($programmes[$nameLC])) die('Programme: ' . $nameLC . ' not defined in code/sitemap.php');
			$programme = $programmes[$nameLC];

			$form = '[FORM]'; //sprintf('<a href="%s">help us by submitting this form</a>', '#' . $programme['form']);
			$video = '[VIDEO]'; //sprintf('<div class="video-container"><iframe src="%s"></iframe></div>', 'https://www.youtube.com/embed/' . $programme['video']);

			return '<span class="why-name"><strong>' . renderAny($name . '</strong>: '. $form, ['echo' => false]) . $video . '</span><span class="why-head">';
		},
		'suffix' => function($item, $cols) {
			$toggleIdeas = ' | <a class="toggle-ideas" href="javascript:;">hide ideas</a>';
			if ($item[$cols['section']] == 'ideas-menu') return $toggleIdeas . '</span>';

			$why = $item[$cols['why']];
			$section = $item[$cols['section']];
			return '<br /><blockquote class="why-text">' . $why . '</blockquote>';
		},
	]
);
?>
