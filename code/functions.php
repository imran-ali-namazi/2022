<?php
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
	echo '<div class="container" style="margin-top: 150px;">';
	echo '<h1>' . humanize(am_var('node')) . '</h1>';
}

function after_file() {
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

?>
