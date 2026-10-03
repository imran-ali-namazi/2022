<?php
$var_sections = ['about', 'learn', 'people', 'webring'];
if (am_var('local')) $var_sections[] = 'private'; //imrans private notes, excluded from FTPSync. Needs local to be defined before functions.php is included

am_var('sections', $var_sections);

am_var('programmes', [
	'wisdom' => [ 'form' =>'c', 'video' => 'ZAYvIMC-Mk0'], //Sophia
	'serve' => [ 'form' =>'g', 'video' => 'SFLytWs4OKc'], //Symphony
	'healing' => [ 'form' =>'h', 'video' => 'MWAK3K7A6_Y'], //Serenity
	'work' => [ 'form' =>'w', 'video' => 'Qu4HxrmZExg'], //Sunlight
	'sessions' => [ 'form' =>'w', 'video' => 'EiJErn0LPYQ'], //Sessions
]);

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
