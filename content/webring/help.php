Do consider helping the following people. We are in the process of getting links to their financials and adding plea videos for each of them.

<?php
$data = get_sheet('help', 'category');
//print_r($data);
//#name	category	tags	donate_for	contact	mobile	link
foreach ($data->sections as $category => $items) {
	echo '<h2 style="background-color: lightpink; padding: 6px;">' . humanize($category) . '</h2>';
	foreach ($items as $item) {
		echo '<h3><a target="_blank" href="' . item_r('link', $item, 1) . '">' . item_r('name', $item, 1) . '</a></h3>';
		echo 'TAGS: ' . item_r('tags', $item, 1) . am_var('brnl');
		echo 'Contributions Go Towards: ' . item_r('donate_for', $item, 1) . am_var('brnl');
		echo 'Contact: ' . item_r('contact', $item, 1) . ': <a href="tel:' . item_r('mobile', $item, 1) . '">' . item_r('mobile', $item, 1) . '</a>' . am_var('nl');
		echo '<hr />';
	}
}
?>
