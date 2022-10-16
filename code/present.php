<?php
echo '<h1>Possible Workshops @ ' . am_var('name') . '</h1>';

$items = scandir(SITEPATH .'/decks/');
$pages = am_var('pages');
natsort($items);

foreach ($items as $item) {
	echo '<hr />';
	if (!endsWith($item, '.md')) continue;
	$item = str_replace('.md', '', $item);
	$page = isset($pages[$item]) ? $pages[$item] : [ 'title' => 'TO BE ADDED', 'description' => 'TO BE DESCRIBED' ];
	echo '<a name=">' . $item . '"></a>';
	echo '<h2>' . humanize($item) . ': ' . $page['title'] . '</h2>';
	echo '<p>' . $page['description'] . '</p>';
	//if (isset($page['video'])) echo replace_dictionary(am_var('video-template'), [ 'videoid' => $page['video'] ]); //vide is on slide 1 anyhow
	echo '<iframe src="' . am_var('url') . 'present/' . $item . '/" style="height: 100vh; width: 100%"></iframe>' . am_var('nl') . am_var('nl');
}

?>
