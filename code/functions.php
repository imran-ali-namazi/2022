<?php
am_var('sections', ['ideas', 'about', 'webring', 'interact', 'possibilities', 'grow', 'action']);
am_var('idea-sections', [
	'children' => 'and',
	'serenity' => 'in',
	'spaces' => 'at',
	'spirit' => 'from',
	'words' => 'from',
	'work' => 'in',
]);
am_var('footer-message', 'Connect people, share ideas, create a platform for collaboration and harmony.');

am_var('pages', [

//	'' => ['title' => '', 'description' => ''],
	'index' => ['title' => 'YieldMore.org for Children, Growth and Healing', 'description' => am_var('footer-message'), 'video' => 'PTIqjpkF5Ss'],

	'ideas', //section
	'children' => ['title' => '<strong>Children</strong> for Inner Development', 'description' => 'Curation Based Education, Creative Expression and Project ARYA, aimed at emotional, social and personal development of families.'],
	'spaces' => ['title' => '<strong>Spaces</strong> for Growth and Healing', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc.'],
	'words' => ['title' => '<strong>Words</strong> for Inspiration and Healing', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future.'],
	'spirit' => ['title' => 'Instituting a <strong>Spirituality</strong> that Liberates', 'description' => 'A new-age integrative, harmonious and holistic approach to religion, philosophy, spirituality and governance.'],
	'earth' => ['title' => 'Dare we Save our Planet <strong>Earth</strong>', 'description' => 'For all things environmental, worldy and with thoughts of harmony and unification'],
	'crises' => ['title' => 'Champion Causes and Avert <strong>Crises</strong>', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness, animals and education for lower income strata.'],
	'serenity' => ['title' => '<strong>Serenity</strong>, Harmony and Healing for All', 'description' => 'Various Resources on Healing ourselves, families and the whole world with strong focus on alternate healing methods and practitioners.'],
	'work' => ['title' => '<strong>Work</strong> in Companies and Charities', 'description' => 'Evolving Sunlight is our programs for Industries and IT companies and Soulful Moonlight is the taking of Ideas and Practices to NGOs and Charities.'],

	'possibilities', //section
	'collective parenting' => ['title' => '<strong>Collective Parenting</strong> as meaningful activity for groups of families', 'description' => 'Contemplate PROJECT ARYA and the spontaneous formation of Multi Family Learning Pods.'],
	'imaginative communities' => ['title' => '<strong>Imaginative Communities</strong> in Model Groups, Towns and Organizations', 'description' => 'Based on the Robert Govers book of the same name'],
	'inherent divinity' => ['title' => '<strong>Inherent Divinity</strong> means a level playing field for all', 'description' => 'When we recognize everyone\'s Inherent Divinity we will help the WORKING CLASS Rise in Stature', 'video' => 'KiT63DB1m30'],
	'intimate gatherings' => ['title' => '<strong>Intimate Gatherings</strong> for Inspiration, Abundance, Healing and Expression', 'description' => 'Workshops to: ENJOY | EXPLORE | HEAL | EXPRESS and SHARE a WISDOM WITH WORDS.', 'video' => 'S6E-gzDqmgs'],
	'leadership' => ['title' => '<strong>Leadership</strong> Workshop by Mustafa', 'description' => 'Participants must be passionate, dedicated, commited to self, family and community development'],
//unorganized
	'sunlight-and-moonlight' => ['title' => 'Evolving Sunlight and Soulful Moonlight', 'description' => 'Don\'t Repeat Same Mistakes in Corporate Life and share IT Wisdom and Volunteers to NGOs and Charities.', 'video' => '5XR0HGG_iws'],
	'work and cancer' => ['title' => 'The Cancerous environments at school, work, streets and home', 'description' => 'When we work with passion, we can heal anything. Loka Samastha Sukhino Bhavantu.'],

	'ideas in action', //section
	'imran' => ['title' => '<strong>Imran</strong>, Founder', 'description' => 'The 400+ poems and new age writing of Imran Ali Namazi.'],

	'global growth', //section
	'alliances' => ['title' => '<strong>Alliances</strong> - A Global Network of forward thinking Organizations and Leaders', 'description' => 'LOVE is the force that will bring us to a brighter tomorrow'],
	'growing together' => ['title' => '400 people <strong>Growing Together</strong> in 2 years', 'description' => 'A Blueprint that "shares everything equally after compensation"', 'video' => 'DM_xGyzcYxI'],
	'help' => ['title' => '<strong>Help</strong> by Kindly Acts', 'description' => '#DirectDonations to the friends we\'ve made and our various families and their centers.'],
	'interact' => ['title' => '<strong>Interact</strong> with Us Online and Physically', 'description' => 'Links to our groups on tribe.so and groups.io and google groups.'],
	'realms' => ['title' => 'Manifesting <strong>Realms</strong> Project', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s "dreamt of realm" to manifest sooner...'],
	'tech and web' => ['title' => '<strong>Tech and Web</strong> powered by AmadeusWeb.com', 'description' => 'Use AmadeusWeb to build a Field of Love (Premakshetre) and Dreams enabling your dreams of a spiritual commune.'],
	'vidzi heals' => ['title' => '<strong>Vidzeal</strong> - Healing and Skincare', 'description' => 'Beg to be healed by this lovely woman through her skin-tingling creations.'],

	'about', //section
	'about us' => ['title' => '<strong>About YieldMore.org</strong> and it\'s Spirit', 'description' => 'A candid look at why YieldMore.org exists, it\'s Spirit and Imran\'s intentions.'],
	'imrans resume' => ['title' => 'Resume of <strong>Imran Ali</strong> Namazi', 'description' => 'The Technical Profile of programmer founder, Imran Ali Namazi.'],
	'joyland' => ['title' => 'The Proliferation of <strong>Joyland</strong>', 'description' => 'Old 2019/20 notes on how Joyous Lands could be setup, the forerunner to Spaces for Growth and Healing'],
	'marketplace' => ['title' => 'A Conscious <strong>Marketplace</strong>', 'description' => 'Ideas to start a marketplace for people to promote their products and services in a sustainable ecosystem.'],

//TODO: Notes, deterrents, nuances, criticisms etc

]);

am_var('video-template', '<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/%videoid%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

function before_file() {
	if (am_var('embed')) return;

	echo '<hr class="above-header-content" />' . am_var('nl');

	echo '<div id="pre-content-wrapper" class="header-bgd">' . am_var('nl');

	echo '  <header id="pre-content" class="container no-speakable-item-underline">' . am_var('nl');

	echo '    <div class="page-heading">' . am_var('nl');
	//#1 - heading
	$ideas = am_var('idea-sections');
	$prefix = am_var('section') && isset($ideas[am_var('section')]) ? '<a href="../' . am_var('section') . '/">' . ucwords(am_var('section')) . '</a> ' . $ideas[am_var('section')] . ' ' : '';

	$pages = am_var('pages');
	$pageName = strip_hyphens(am_var('node'));
	$page = isset($pages[$pageName]) ? $pages[$pageName] : [ 'title' => ucwords($pageName), 'description' => '...Description...' ];

	echo '      <h1 class="page-name">' . $prefix . $page['title'] . '</h1>' . am_var('nl');

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

	include 'header-content.php';
	echo '<hr class="page-heading-separator" />';

	echo '<div id="content" class="container">';

	$deckExists = file_exists(SITEPATH . '/decks/' . am_var('node') . '.md');
	if ($deckExists)
		echo sprintf('<div class="deck-container"><iframe src="%spresent/%s/embed/"></iframe></div>', am_var('url'), am_var('node'));
}

function after_file() {
	if (am_var('embed')) return;
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
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
		$deck = am_var('page_parameter1');

		if (!$deck) {
			am_var('deck-listing', true);
			return;
		}

		am_var('deck', SITEPATH . '/decks/' . $deck . '.md');
		am_var('deck-name', am_var('page_parameter1'));
		am_var('embed', true);
		return;
	}

	if (am_var('node') == 'go') { include_once 'resources.php'; exit; }

	am_var('description', humanize(am_var('node'), 'description'));

	$sections = array_merge(am_var('sections'), array_keys(am_var('idea-sections')));
	foreach ($sections as $slug) {
		$path = am_var('path') . '/content/' . $slug . '/';
		$file = $path . am_var('node') . '.md';
		if (file_exists($file)) {
			am_var('fol', $path);
			am_var('section', $slug);
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

	if ($section = am_var('section')) {
		render_txt_or_md(am_var('file'));
		return true;
	} else if (am_var('file')) {
		include_once am_var('file');
		return true;
	} else if (am_var('deck-listing')) {
		include_once 'present.php';
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
	if ($return) return $r;

	echo $r;
}
?>
