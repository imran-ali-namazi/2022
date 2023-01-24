<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/PTIqjpkF5Ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

<?php

recursive_menu(
	get_sheet('sitemap'),
	'menu',
	1,
	[
		'visible' => function($item, $cols) {
			return $item[$cols['section']] == 'menu' || $item[$cols['audience']];
		},
		'prefix' => function($item, $cols) {
			if ($item[$cols['section']] == 'menu') return '<hr />';
			return '<u>' . $item[$cols['audience']]  . ' / ' . $item[$cols['role']] . '</u>: ';
		},
		'suffix' => function($item, $cols) {
			if ($item[$cols['section']] == 'menu') return '';
			$why = $item[$cols['why']];
			$section = $item[$cols['section']];
			$programmes = am_var('programmes');
			$programme = isset($programmes[$section]) ? $programmes[$section] : 'XYZ';
			$why = str_replace('%programme%', $programme, $why);
			return '<br /><blockquote class="why">' . $why . '</blockquote>';
		},
	]
);
?>
