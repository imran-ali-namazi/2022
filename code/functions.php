<?php
am_var('sections', ['tracks', 'about', 'webring']);

am_var('tracks', [
	'words' => 	['title' => 'Healing and Inspiration Through Words', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future'],
	'nom' => ['title' => 'Project Nom for Children', 'description' => 'Curation Based Education, Creative Expression and Project ARYA'],
	'realms' => ['title' => 'Manifesting Realms Project', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s "dreamt of realm" to manifest sooner...'],
	'crises' => ['title' => 'CrisisForAll.org', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness and animals'],
	'spaces' => ['title' => 'Intimate Healing Spaces', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc'],
	'network' => ['title' => 'The YML Network', 'description' => 'our website to promote ideas for improving the human condition'],
	'learn' => ['title' => 'Learn New Dimensions', 'description' => 'A peer-peer learning platform using Amadeus'],
	'web' => ['title' => 'Amadeus Web Builder', 'description' => 'A powerful system for creating simple, content oriented sites'],
]);

function before_file() {
	if (am_var('embed')) return;
	echo '<div id="content" class="container" style="margin-top: 150px;">';
	echo '<h1>' . humanize(am_var('node')) . '</h1>';
}

function after_file() {
	if (am_var('embed')) return;
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function site_humanize($txt) {
	if (array_key_exists($key = strtolower($txt), $tracks = am_var('tracks')))
		return $tracks[$key]['title'];

	return $txt;
}

function before_render() {
	if (am_var('node') == 'decks') {
		am_var('deck', SITEPATH . '/decks/' . am_var('page_parameter1') . '/index.md');
		am_var('embed', true);
		return;
	}

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
	if (am_var('deck')) {
		load_amadeus_module('revealjs');
		return true;
	}

	if ($section = am_var('section')) {
		render_txt_or_md(am_var('file'));
		return true;
	}

	return false;
}

?>
