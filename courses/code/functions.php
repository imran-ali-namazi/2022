<?php
function before_render() {
	if (am_var('page_parameter1') && array_search('present', am_var('page_parameters')) !== false) {
		$deck = str_replace('/embed', '', str_replace('/present/', '/decks/', am_var('all_page_parameters')));

		am_var('deck', SITEPATH . '/' . $deck . '.md');
		am_var('deck-name', str_replace('/', ' - ', $deck));
		am_var('embed', true);
		return;
	}

	$fwe = SITEPATH . '/' . am_var('all_page_parameters');
	$index = false;
	if (am_var('node') == 'index') { $fwe .= 'index'; $index = true; }
	if (is_dir($fwe . '/') && count(am_var('page_parameters')) > 1) {
		am_var('md-file', $fwe . '.md');
		if ($index == false) am_var('course-folder', '/' . am_var('all_page_parameters') . '/');
	} else if (is_file($fwe . '.md')) {
		am_var('md-file', $fwe . '.md');
		if ($index == false) am_var('course-folder', '/' . am_var('node') . '/' . am_var('page_parameter1') . '/');
	}
}

function did_render_page() {
	if (am_var('deck')) {
		am_var('no-detail-link', true);
		am_var('no-permanent-link', true);

		load_amadeus_module('revealjs');
		return true;
	}

	if (am_var('md-file')) {
		render_txt_or_md(am_var('md-file'));
		return true;
	}

	return false;
}

function before_file() {
	if (am_var('embed')) return;
	echo '<hr class="above-header-content" />' . am_var('nl');
	echo '<div id="content" class="container">';

	$md = am_var('md-file');
	if ($md) {
		$bits = explode('/', $md);
		$name = str_replace('.md', '', array_pop($bits));
		if (endsWith($md, $name . '.md')) $name = 'index';
		$deck = SITEPATH . am_var('course-folder') . 'decks/' .  $name . '.md';
		$deckUrl = am_var('url') . 'courses' . am_var('course-folder') . 'present/' .  $name . '/embed/';
		if (file_exists($deck))
			echo sprintf('<div class="deck-container"><iframe src="%s"></iframe></div>', $deckUrl);
		else
			echo sprintf('<small class="warning">deck missing: %s</small>', $deck);
	}
}

function after_file() {
	if (am_var('embed')) return;
	//echo file_get_contents(SITEPATH . '/assets/speech-ui.html');
	echo '</div>';
}



am_var('courses', [
	'ivy' => [
		'name' => 'Ivy Technologies',
		'items' => [
			'electronics' => [
				'name' => 'Fun Electronics Projects',
			],
			'microcontrollers' => [
				'name' => 'Custom Built Microcontroller Project',
			],
		],
	],
	'pact' => [
		'name' => 'Ivy Technologies',
		'items' => [
			'electronics' => [
				'name' => 'Fun Electronics Projects',
			],
			'microcontrollers' => [
				'name' => 'Custom Built Microcontroller Project',
			],
		],
	],
]);



?>
