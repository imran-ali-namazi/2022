<?php
am_var('sections', ['ideas', 'about', 'webring', 'interact', 'possibilities', 'grow']);
am_var('idea-sections', ['children' => 'in', 'serenity' => 'in', 'spaces' => 'at', 'spirit' => 'from', 'words' => 'from']);
am_var('footer-message', 'Connect people, share ideas, create a platform for collaboration and harmony.');

am_var('pages', [

//	'' => ['title' => '', 'description' => ''],
	'index' => ['title' => 'YieldMore.org for Children, Growth and Healing', 'description' => am_var('footer-message')],

//ideas
	'children' => ['title' => 'Children for Inner Development', 'description' => 'Curation Based Education, Creative Expression and Project ARYA, aimed at emotional, social and personal development of families.'],
	'spaces' => ['title' => 'Spaces for Growth and Healing', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc.'],
	'words' => ['title' => 'Words for Inspiration and Healing', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future.'],
	'spirit' => ['title' => 'Instituting a Spirituality that Liberates', 'description' => 'A new-age integrative, harmonious and holistic approach to religion, philosophy, spirituality and governance.'],
	'earth' => ['title' => 'Dare we Save our Planet Earth', 'description' => 'For all things environmental, worldy and with thoughts of harmony and unification'],
	'crises' => ['title' => 'Champion Causes and Avert Crises', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness, animals and education for lower income strata.'],
	'serenity' => ['title' => 'Serenity, Harmony and Healing for All', 'description' => 'Various Resources on Healing ourselves, families and the whole world with strong focus on alternate healing methods and practitioners.'],

//possibilities
	'collective-parenting' => ['title' => 'Curricular and Co-curricular fun as groups of families', 'description' => 'Contemplate PROJECT ARYA and the spontaneous formation of Multi Family Learning Pods.'],
	'divinity' => ['title' => 'The DIVINE wishes a level playing field for all', 'description' => 'Help the WORKING CLASS - STOP treating them like they don\'t deserve life and all the breaks.'],
	'growth' => ['title' => 'Growth of Facilitators and Participants', 'description' => 'A Blueprint that "shares everything equally after compensation" - for tightly knit teams of upto 20. 20 such teams to be INITIATED by 2025 Oct 15th'],
	'imaginative-communities' => ['title' => 'Model Groups, Towns and Organizations whose Examples can Lead the world from POVERTY of SOUL', 'description' => 'Based on the Robert Govers book of the same name'],
	'intimate-gatherings' => ['title' => 'Inspiration, Abundance, Vulnerability in Healing and Poetic Expression', 'description' => 'Workshops to: ENJOY | EXPLORE | HEAL | EXPRESS and SHARE a WISDOM WITH WORDS.', 'video' => 'S6E-gzDqmgs'],
	'prem' => ['title' => 'Field of Love and Dreams, powered by Amadeus', 'description' => 'Let\'s cherish our youth full of dreams and use every tool and skill we have to heal those still in nightmares. Starting with Amadeus that helps create simple, content oriented sites. enabling spiritual communes.'],
	'sunlight-and-moonlight' => ['title' => 'Evolving Sunlight and Soulful Moonlight', 'description' => 'Don\'t Repeat Same Mistakes in Corporate Life and share IT Wisdom and Volunteers to NGOs and Charities.'],
	'work-and-cancer' => ['title' => 'The Cancerous environments at school, work, streets and home', 'description' => 'When we work with passion, we can heal anything. Loka Samastha Sukhino Bhavantu.'],

//in action
	'interact' => ['title' => 'Interact with Us', 'description' => 'Links to our groups on tribe.so.'],
	'nuggets' => ['title' => 'Nuggets on a Smorgasbord (platter)', 'description' => 'A smattering of tidbits / nuggets of wisdom from our team.'],
  //words
	'imran' => ['title' => 'Imran, Founder', 'description' => 'The 400+ poems and new age writing of Imran Ali Namazi.'],

//about
	'joyland' => ['title' => 'The Proliferation of Joyland', 'description' => 'Old 2019/20 notes on how Joyous Lands could be setup, the forerunner to Spaces for Growth and Healing'],
	'future' => ['title' => 'The Future for Humankind', 'description' => 'A compelling essay of what the future could be.'],
	'about us' => ['title' => 'About YieldMore.org and it\'s Spirit', 'description' => 'A candid look at why YieldMore.org exists, it\'s Spirit and Imran\'s intentions.'],
	'imrans resume' => ['title' => 'Resume of Imran Ali Namazi', 'description' => 'The Technical Profile of programmer founder, Imran Ali Namazi.'],
	'online' => ['title' => 'YieldMore.org on the Web', 'description' => 'Places where we are featured and backlinks to publishings of Team YM.'],
//TODO: Notes, deterrents, nuances, criticisms etc

//webring
	'archives' => ['title' => 'YieldMore Archives', 'description' => 'YieldMore as developed in 2021/22 with a lot of publishing going on'],
	'legacy' => ['title' => 'YieldMore Legacy', 'description' => 'YieldMore as developed from 2013 to 2019 with plenty of compiled resources'],
	'realms' => ['title' => 'Manifesting Realms Project', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s "dreamt of realm" to manifest sooner...'],
	'help' => ['title' => 'Help by Kindly Acts', 'description' => '#DirectDonations to the friends we\'ve made and our various families and their centers.'],
	'vidzi heals' => ['title' => 'Vidzeal - Healing and Skincare', 'description' => 'Beg to be healed by this lovely woman through her skin-tingling creations.'],

//further ideas
	'network' => ['title' => 'The YML Network', 'description' => 'our website to promote ideas for improving the human condition.'],
	'learn' => ['title' => 'Learn New Dimensions', 'description' => 'A peer-peer learning platform using Amadeus.'],
	'marketplace' => ['title' => 'A Conscious Marketplace', 'description' => 'Ideas to start a marketplace for people to promote their products and services in a sustainable ecosystem.'],
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
	$suffix = '';
	if (am_var('section') == 'possibilities')
		$suffix = sprintf(' | <a href="%spresent/%s/">See Presentation</a>', am_var('url'), am_var('node'));
	echo '      <h1 class="page-title">' . $prefix . humanize(am_var('node')) . $suffix . '</h1>' . am_var('nl');

	//#2 - description
	$pages = am_var('pages');
	if (isset($pages[am_var('node')])) echo sprintf('      <p class="page-description">%s</p>' . am_var('nl'), $pages[am_var('node')]['description']);
	echo '    </div>' . am_var('nl');

	//#3 - speakable menus
	menu_speakables();
	echo '    <img class="img-fluid" src="' . am_var('url') . 'yieldmore-rectangle.jpg" /><br /><br />' . am_var('nl');

	echo '  </header>' . am_var('nl');
	echo '</div>' . am_var('nl');

	include 'header-content.php';
	echo '<hr class="page-heading-separator" />';
	echo '<div id="content" class="container">';
}

function after_file() {
	if (am_var('embed')) return;
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function menu_speakables() {
	$pages = am_var('pages');
	$possibilities = ['intimate-gatherings', 'growth', 'collective-parenting', 'sunlight-and-moonlight', 'imaginative-communities', 'work-and-cancer', 'prem'];

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
	if ($return) return $r;

	echo $r;
}
?>
