<?php
$var_sections = ['ideas', 'about', 'webring', 'interact', 'possibilities', 'grow', 'grow-teams', 'action'];
if (am_var('local')) $var_sections[] = 'private'; //imrans private notes, excluded from FTPSync. Needs local to be defined before functions.php is included

am_var('sections', $var_sections);

am_var('footer-message', 'Connect people, share ideas, create a platform for collaboration and harmony.');

function setup_pages() {
	$sheet = get_sheet('sitemap');
	$pages = [];
	foreach ($sheet->rows as $row) {
		$slug = strip_hyphens(urlize($row[$sheet->columns['name']]));
		$section = $row[$sheet->columns['section']];
		$url = ($section != 'menu' && $section != 'menu' && $section != 'blank' ? $section . '/' : '') . $slug . '/';
		$pages[$slug] = [
			'title' => $row[$sheet->columns['title']],
			'description' => $row[$sheet->columns['description']],
			'video' => $row[$sheet->columns['video']],
			'section' => $section,
			'url' => urlize($url),
		];
	}
	am_var('pages', $pages);
}

setup_pages();

//TODO: turn on bit by bit, newest on top:
//https://developers.facebook.com/docs/plugins/comments/

//TODO: groups
	//collectives
	//peace making
//TODO: 'alliances' => ['title' => '<strong>Alliances</strong> - A Global Network of forward thinking Organizations and Leaders', 'description' => 'LOVE is the force that will bring us to a brighter tomorrow'],
//TODO: Notes, deterrents, nuances, criticisms etc
?>
