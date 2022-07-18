<?php
am_var('sections', ['ideas', 'about', 'webring']);
am_var('pages', [
//ideas
	'children' => ['title' => 'Rahasyam (Life\'s Secret) - Programs for Children', 'description' => 'Curation Based Education, Creative Expression and Project ARYA, aimed at emotional, social and personal development of families.'],
	'spaces' => ['title' => 'Growth and Healing Spaces', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc.'],
	'words' => ['title' => 'Inspiration and Healing by Interaction', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future.'],
	'ideas' => ['title' => 'Applied Spirituality', 'description' => 'A new-age integrative, harmonious and holistic approach to religion, philosophy, spirituality and governance.'],

//about
	'model' => ['title' => 'The YieldMore Business Model', 'description' => 'A "share everything equally after compensation" approach to business and implementing YM ideas and programs.'],
	'spirit' => ['title' => 'The Spirit of YieldMore.org', 'description' => 'A candid look at why YieldMore.org exists and Imran\s intentions.'],
	'imrans resume' => ['title' => 'Resume of Imran Ali Namazi', 'description' => 'The Technical Profile of programmer founder, Imran Ali Namazi.'],

//webring
	'archives' => ['title' => 'YieldMore Archives', 'description' => 'YieldMore as developed in 2021/22 with a lot of publishing going on'],
	'legacy' => ['title' => 'YieldMore Legacy', 'description' => 'YieldMore as developed from 2013 to 2019 with plenty of compiled resources'],
	'realms' => ['title' => 'Manifesting Realms Project', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s "dreamt of realm" to manifest sooner...'],
	'imran' => ['title' => 'Writer site of Imran', 'description' => 'The 400+ poems and new age writing of Imran Ali Namazi.'],

//further ideas
	'crises' => ['title' => 'CrisisForAll.org', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness, animals and education for lower income strata.'],
	'network' => ['title' => 'The YML Network', 'description' => 'our website to promote ideas for improving the human condition.'],
	'learn' => ['title' => 'Learn New Dimensions', 'description' => 'A peer-peer learning platform using Amadeus.'],
	'web' => ['title' => 'Amadeus Web Builder', 'description' => 'A powerful system for creating simple, content oriented sites. Especially to enable spiritual communes.'],
	'marketplace' => ['title' => 'A Conscious Marketplace', 'description' => 'Ideas to start a marketplace for people to promote their products and services in a sustainable ecosystem.'],
]);

function before_file() {
	if (am_var('embed')) return;
	echo '<div id="content" class="container" style="margin-top: 150px;">';
	include 'header-content.php';
	echo '<h1>' . humanize(am_var('node')) . '</h1>';
}

function after_file() {
	if (am_var('embed')) return;
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function site_humanize($txt) {
	if (array_key_exists($key = strtolower($txt), $pages = am_var('pages')))
		return $pages[$key]['title'];

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
