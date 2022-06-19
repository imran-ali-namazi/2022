<?php
am_var('sections', ['tracks', 'about', 'webring']);

am_var('tracks', [
	'words',
	'nom',
	'realms',
	'crises',
	'spaces',
	'network',
	'learn',
	'web',
]);

function before_file() {
	echo '<div id="content" class="container" style="margin-top: 150px;">';
	echo '<h1>' . humanize(am_var('node')) . '</h1>';
}

function after_file() {
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function site_humanize($txt) {
	$words = [
		'Crises' => 'CrisisForAll.org',
		'Learn' => 'Learn New Dimensions',
		'Network' => 'The YML Network',
		'Nom' => 'Project Nom for Children',
		'Realms' => 'Manifesting Realms Project',
		'Spaces' => 'Intimate Healing Spaces',
		'Web' => 'Amadeus Web Builder',
		'Words' => 'Healing and Inspiration Through Words',
	];

	if (array_key_exists($txt, $words))
		$txt = $words[$txt];

	return $txt;
}

function before_render() {
	if (am_var('node') == 'go') { include_once 'resources.php'; exit; }
	$section = false;
	$file = false;
	$fol = false;

	foreach (am_var('sections') as $slug) {
		$path = am_var('path') . '/content/' . $slug . '/';
		$file = $path . am_var('node') . '.md';
		if (file_exists($file)) {
			am_var('fol', $path);
			am_var('section', $slug);
			am_var('file', $file);
			break;
		}
	}
}

function did_render_page() {
	if ($section = am_var('section')) {
		render_txt_or_md(am_var('file'));
		return true;
	}

	return false;
}

?>
