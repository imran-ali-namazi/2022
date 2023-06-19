<?php
include_once 'sitemap.php';

am_var('video-template', '<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/%videoid%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

function before_file() {
	if (am_var('embed')) return;

	echo '<hr class="above-header-content" />' . am_var('nl');

	include 'header-content.php';
	$pageNameWebSafe = am_var('page_parameter1') ? am_var('page_parameter1') : am_var('node');
	$header = SITEPATH . '/content/_headers/' . $pageNameWebSafe . '.md';
  if (file_exists($header)) {
		echo '<div id="header" class="container" style="padding: 20px; margin-bottom: 30px; font-size: 130%;">' . am_var('nl') . am_var('nl');
		echo renderFile($header);
		echo '</div>' . am_var('nl');
  } else if (am_var('node') != 'index') {
	echo '<div id="pre-content-wrapper" class="header-bgd">' . am_var('nl');

	echo '  <header id="pre-content" class="container no-speakable-item-underline">' . am_var('nl');

	echo '    <div class="page-heading">' . am_var('nl');
	//#1 - heading
	$pages = am_var('pages');
	$pageName = strip_hyphens($pageNameWebSafe);

	if (am_var('node') == 'community') {
		$personName = humanize($pageNameWebSafe);
		$people = get_sheet('community/directory', 'name');
		am_var('community-people', $people);

		$person = $people->sections[$personName][0];
		am_var('community-person', $person);

		$pages[$pageName] = [ 'title' => item_r('name', $person, true), 'description' => item_r('heading', $person, true) ];
	}

	$page = isset($pages[$pageName]) ? $pages[$pageName] : [ 'title' => ucwords($pageName), 'description' => '...Description...' ];

	if (am_var('section') == 'programs/' && am_var('page_parameter1')) echo '<h3><a href="' . am_var('url') . am_var('node') . '/" style="background-color: yellow;">' . humanize(am_var('node')) . '</a></h3>';
	echo '      <h1 class="page-name">' . $page['title'] . '</h1>' . am_var('nl');

	//#2 - description
	echo sprintf('      <p class="page-description">%s</p>' . am_var('nl'), $page['description']);

	echo '    </div>' . am_var('nl');
	/*
	//#3 - speakable menus
	menu_speakables();
	echo '    <img class="img-fluid" src="' . am_var('url') . 'yieldmore-rectangle.jpg" /><br /><br />' . am_var('nl');
	*/

	echo '  </header>' . am_var('nl');
	echo '</div>' . am_var('nl');

	echo '<hr class="page-heading-separator" />';
  }

	echo '<div id="content" class="container">';

	$deckExists = file_exists(SITEPATH . '/decks/' . am_var('node') . '.md');
	if ($deckExists)
		echo sprintf('<div class="deck-container"><iframe src="%spresent/%s/embed/"></iframe></div>', am_var('url'), am_var('node'));
	else if (am_var('deck-url'))
		echo sprintf('<div class="deck-container"><iframe src="%s"></iframe></div>', am_var('deck-url'));
}

function after_file() {
	if (am_var('embed')) return;
	echo disk_file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function section_menu($before = '', $after = '') {
	$yes = (am_var('node') != 'index' && am_var('section') && !am_var('simple-section'));
	if (!$yes) return false;

	echo $before;
	echo '<li class="drop-down"><a href="' . am_var('url') . am_var('node') . '/" style="background-color: yellow;">' . humanize(am_var('node')) . '</a>';

	if (startsWith(am_var('section'), 'people'))
		menu('/content/' . am_var('section') . '/' . am_var('node') . '/', ['parent-slug' => am_var('node') . '/', 'home-link-to-section' => true]);
	else
		recursive_menu(get_sheet('sitemap'), am_var('node'), 2, ['section-prefix' => true, 'home-link-to-section' => true]); //Needs 2 to show home

	echo '</li>';
	echo $after;
	return true;
}

function menu_speakables() {
	$pages = am_var('pages');
	$possibilities = ['intimate-gatherings', 'growing-together', 'collective-parenting', 'sunlight-and-moonlight', 'imaginative-communities', 'work-and-cancer', 'tech-and-web'];

	echo '    <p class="speakable">Workshops and Programs to be ENACTED</p>' . am_var('nl');
	echo '    <ol class="possibilities centered">' . am_var('nl');
	foreach ($possibilities as $item) {
		echo '      <li><a href="' . am_var('url') . 'present/' . $item . '/">' . humanize($item) . '</a></li>' . am_var('nl');
		$page = $pages[$item]; //todo - add banners
		echo '      <p class="description">' . $page['description'] . '</p>' . am_var('nl');
	}
	echo '    </ol>' . am_var('nl') . am_var('nl');

	$ideas = ['children', 'words', 'spaces', 'serenity', 'spirit', 'crises', 'earth'];
	echo '    <p class="speakable">Core Ideas to Liberate Humanity</p>' . am_var('nl');
	echo '    <ol class="ideas centered">' . am_var('nl');
	foreach ($ideas as $item) {
		echo '      <li><a href="' . am_var('url') . $item . '/">' . humanize($item) . '</a></li>' . am_var('nl');
		$page = $pages[$item]; //todo - add banners
		echo '      <p class="description">' . $page['description'] . '</p>' . am_var('nl');
	}
	echo '    </ol>' . am_var('nl') . am_var('nl');
}

function site_humanize($txt, $field = 'title') {
	if (array_key_exists($key = strtolower($txt), $pages = am_var('pages')))
		return $pages[$key][$field];

	return $txt;
}

function before_render() {
	if (am_var('node') == 'present') {
		if (am_var('page_parameter3')) {
			$deck = SITEPATH . '/content/' . str_replace('present/', '', str_replace('/embed', '', am_var('all_page_parameters'))) . '.md';
		} else {
			$deck = am_var('page_parameter1');

			if (!$deck) {
				am_var('deck-listing', true);
				return;
			}

			$deck = SITEPATH . '/decks/' . $deck . '.md';
		}

		am_var('deck', $deck);
		am_var('deck-name', am_var('page_parameter1'));
		am_var('embed', true);
		return;
	}

	if (am_var('node') == 'blurbs') {
		$blurbs = SITEPATH . '/blurbs/' . am_var('page_parameter1') . '.txt';
		am_var('blurbs-file', $blurbs);
		am_var('embed', true);
		return;
	}

	if (am_var('node') == 'go') { include_once 'resources.php'; exit; }

	am_var('description', humanize(am_var('node'), 'description'));


	$fols = [
		'programs' => am_var('path') . '/content/programs/' . am_var('node') . '/',
		'people' => am_var('path') . '/content/people/' . am_var('node') . '/',
	];

	$node = (am_var('page_parameter1') ? am_var('page_parameter1') : 'index') . '.md';
	foreach ($fols as $slug => $fol) {
		if (file_exists($program = $fol . $node)) {
			am_var('fol', $fol);
			am_var('section', $slug . '/');
			am_var('file', $program);
			$deck = $fol . 'decks/' . (am_var('page_parameter1') ? am_var('page_parameter1') : 'index') . '.md';
			if (file_exists($deck))
				am_var('deck-url', am_var('url') . 'present/programs/' . am_var('node') . '/decks/' . (am_var('page_parameter1') ? am_var('page_parameter1') : 'index') . '/embed/');
			return;
		}
	}

	foreach (am_var('sections') as $slug) {
		$path = am_var('path') . '/content/' . $slug . '/';
		$extension = $slug == 'learn' ? '.html' : '.md';
		$file = $path . am_var('node') . $extension;
		if (file_exists($file)) {
			am_var('fol', $path);
			am_var('section', $slug);
			$hasDirectory = is_dir($path . am_var('node'));
			am_var('simple-section', !$hasDirectory);
			am_var('file', $file);
			break;
		} else if (file_exists($file = $path . am_var('node') . '.php')) {
			am_var('file', $file);
			break;
		}
	}
}

function did_render_page() {
	if (am_var('deck')) {
		$pages = am_var('pages');
		$deck = am_var('deck-name');

		if (isset($pages[$deck]) && isset($pages[$deck]['video']))
			am_var('video', $pages[$deck]['video']);
			
		if (am_var('page_parameter2') == 'embed')
			am_var('no-detail-link', true);

		load_amadeus_module('revealjs');
		return true;
	}

	if (am_var('blurbs-file')) {
		load_amadeus_module('blurbs');
		return true;
	}

	if ($section = am_var('section')) {
		renderFile(am_var('file'));
		return true;
	} else if (am_var('file')) {
		disk_include_once(am_var('file'));
		return true;
	} else if (am_var('deck-listing')) {
		disk_include_once(__DIR__ . '/present.php');
		return true;
	}

	return false;
}

function item_r($col, $item, $return = false) {
	$cols = am_var('sectionColumns');

	$r = $item[$cols[$col]];

	$r = str_replace('|', '<br />', $r);
	$r = simplify_encoding($r);
	$r = replace_vars($r);
	$r = str_replace('<a href', '<a target="_blank" href', $r);

	if ($col == 'introduction')
		$r = markdown($r);

	if ($return) return $r;

	echo $r;
}
?>
