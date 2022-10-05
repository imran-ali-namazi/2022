<?php
am_var('sections', ['ideas', 'about', 'webring', 'interact', 'possibilities']);
am_var('idea-sections', ['children' => 'in', 'spaces' => 'at', 'spirit' => 'from', 'words' => 'from']);
am_var('pages', [

//	'' => ['title' => '', 'description' => ''],

//ideas
	'children' => ['title' => 'Children for Inner Development', 'description' => 'Curation Based Education, Creative Expression and Project ARYA, aimed at emotional, social and personal development of families.'],
	'spaces' => ['title' => 'Spaces for Growth and Healing', 'description' => 'Physical spaces for rejuvenation and overhauling. Work variant, School variant etc.'],
	'words' => ['title' => 'Words for Inspiration and Healing', 'description' => 'with an intent to heal individual and societal hurts and project a positive outcome for the future.'],
	'spirit' => ['title' => 'Instituting a Spirituality that Liberates', 'description' => 'A new-age integrative, harmonious and holistic approach to religion, philosophy, spirituality and governance.'],
	'earth' => ['title' => 'Dare we Save our Planet Earth', 'description' => 'For all things environmental, worldy and with thoughts of harmony and unification'],
	'crises' => ['title' => 'Champion Causes and Avert Crises', 'description' => 'Crowdfunding with #DirectDonations. Further cause of hunger, homelessness, animals and education for lower income strata.'],
	'serenity' => ['title' => 'Serenity, Harmony and Healing for All', 'description' => 'Various Resources on Healing ourselves, families and the whole world with strong focus on alternate healing methods and practitioners.'],

//possibilities
	'collective-parenting' => ['title' => 'Curricular and Co-curricular fun as groups of families', 'description' => 'Contemplate PROJECT ARYA and the spontaneous formation of Multi Family Learning Pods'],
	'growth' => ['title' => 'Growth of Facilitators and Participants', 'description' => 'Blueprints for TIGHTLY KNIT TEAMS OF UPTO 20. 20 Teams to be INITIATED by 2025 Oct 15th'],
	'imaginative-communities' => ['title' => 'Model Groups, Towns and Organizations whose Examples can Lead the world from POVERTY of SOUL', 'description' => 'Based on the Robert Govers book of the same name'],
	'intimate-gatherings' => ['title' => 'Inspiration, Abundance, Vulnerability in Healing and Poetic Expression', 'description' => 'Workshops to: ENJOY | EXPLORE | HEAL | EXPRESS and SHARE a WISDOM WITH WORDS.'],
	'prem' => ['title' => 'Field of Love and Dreams', 'description' => 'Let\'s cherish our youth full of dreams and use every tool and skill we have to heal those still in nightmares.'],
	'sunlight-and-moonlight' => ['title' => 'Evolving Sunlight and Soulful Moonlight', 'description' => 'Don\'t Repeat Same Mistakes in Corporate Life and share IT Wisdom and Volunteers to NGOs and Charities.'],
	'work-and-cancer' => ['title' => 'The Cancerous environments at school, work, streets and home', 'description' => 'When we work with passion, we can heal anything. Loka Samastha Sukhino Bhavantu.'],

//in action
	'interact' => ['title' => 'Interact with Us', 'description' => 'Links to our groups on tribe.so.'],
	'nuggets' => ['title' => 'Nuggets on a Smorgasbord (platter)', 'description' => 'A smattering of tidbits / nuggets of wisdom from our team.'],
  //words
	'imran' => ['title' => 'Imran, Founder', 'description' => 'The 400+ poems and new age writing of Imran Ali Namazi.'],
	'abundance' => ['title' => 'The Abundance that Surrounds', 'description' => 'A series of programs, ideas and habits that would help cultivate abundance.'],
	'nature' => ['title' => 'Our True Nature', 'description' => 'A workshop enabling us to reflect deeply on our nature and relations to things around.'],
	'nvc wisdom' => ['title' => 'The Wisdom of Non Violent Communication', 'description' => 'A series of individual and group exercises inspired by the Non Violent Communication movement.'],

//about
	'joyland' => ['title' => 'The Proliferation of Joyland', 'description' => 'Old 2019/20 notes on how Joyous Lands could be setup, the forerunner to Spaces for Growth and Healing'],
	'model' => ['title' => 'The YieldMore Business Model', 'description' => 'A "share everything equally after compensation" approach to business and implementing YM Ideas and Programs.'],
	'future' => ['title' => 'The Future for Humankind', 'description' => 'A compelling essay of what the future could be.'],
	'about us' => ['title' => 'About YieldMore.org and it\'s Spirit', 'description' => 'A candid look at why YieldMore.org exists, it\'s Spirit and Imran\'s intentions.'],
	'imrans resume' => ['title' => 'Resume of Imran Ali Namazi', 'description' => 'The Technical Profile of programmer founder, Imran Ali Namazi.'],
	'online' => ['title' => 'YieldMore.org on the Web', 'description' => 'Places where we are featured and backlinks to publishings of Team YM.'],
//TODO: Notes, deterrents, nuances, criticisms etc

//webring
	'archives' => ['title' => 'YieldMore Archives', 'description' => 'YieldMore as developed in 2021/22 with a lot of publishing going on'],
	'legacy' => ['title' => 'YieldMore Legacy', 'description' => 'YieldMore as developed from 2013 to 2019 with plenty of compiled resources'],
	'realms' => ['title' => 'Manifesting Realms Project', 'description' => 'Meant to magnify goodness and get forward thinking individuals and groups to acknowledge and support one another, helping each other\'s "dreamt of realm" to manifest sooner...'],
	'help' => ['title' => 'Help by Kindly Acts', 'description' => '#DirectDonations to the friends weve made and our various centers.'],
	'vidzi heals' => ['title' => 'Vidzeal - Healing and Skincare', 'description' => 'Beg to be healed by this lovely woman through her skin-tingling creations.'],

//further ideas
	'network' => ['title' => 'The YML Network', 'description' => 'our website to promote ideas for improving the human condition.'],
	'learn' => ['title' => 'Learn New Dimensions', 'description' => 'A peer-peer learning platform using Amadeus.'],
	'web' => ['title' => 'Amadeus Web Builder', 'description' => 'A powerful system for creating simple, content oriented sites. Especially to enable spiritual communes.'],
	'marketplace' => ['title' => 'A Conscious Marketplace', 'description' => 'Ideas to start a marketplace for people to promote their products and services in a sustainable ecosystem.'],
]);

function before_file() {
	if (am_var('embed')) return;
	include 'header-content.php';
	echo '<div id="content" class="container">';
	$ideas = am_var('idea-sections');
	$prefix = am_var('section') && isset($ideas[am_var('section')]) ? '<a href="../' . am_var('section') . '/">' . ucwords(am_var('section')) . '</a> ' . $ideas[am_var('section')] . ' ' : '';
	$suffix = '';
	if (am_var('section') == 'possibilities')
		$suffix = sprintf(' | <a href="%spresent/%s/">See Presentation</a>', am_var('url'), am_var('node'));
	echo '<h1>' . $prefix . humanize(am_var('node')) . $suffix . '</h1>';
}

function after_file() {
	if (am_var('embed')) return;
	echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}

function site_humanize($txt, $field = 'title') {
	if (array_key_exists($key = strtolower($txt), $pages = am_var('pages')))
		return $pages[$key][$field];

	return $txt;
}

function before_render() {
	if (am_var('node') == 'present') {
		am_var('deck', SITEPATH . '/decks/' . am_var('page_parameter1') . '.md');
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
		load_amadeus_module('revealjs');
		return true;
	}

	if ($section = am_var('section')) {
		render_txt_or_md(am_var('file'));
		return true;
	} else if (am_var('file')) {
		include_once am_var('file');
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
