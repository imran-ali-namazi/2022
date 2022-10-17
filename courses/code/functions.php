<?php
function before_render() {
	$fwe = SITEPATH . '/' . am_var('all_page_parameters');

	if (is_dir($fwe . '/') && count(am_var('page_parameters')) > 1) {
		am_var('md-file', $fwe . '.md');
		am_var('course-folder', '/' . am_var('all_page_parameters') . '/');
	} else if (is_file($fwe . '.md')) {
		am_var('md-file', $fwe . '.md');
		am_var('course-folder', '/' . am_var('node') . '/' . am_var('page_parameter1') . '/');
	}
}

function did_render_page() {
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
