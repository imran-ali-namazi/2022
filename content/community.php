<?php
$page = am_var('page_parameter1') ? am_var('page_parameter1') : 'index';

function info($col) {
	$person = am_var('community-person');
	return item_r($col, $person, true);
}

function person_info($loop = false) {
	echo renderFile(sprintf('<div style="text-align: center;">%s<img src="[url]assets/community/%s-dp.jpg" class="img-fluid" /><h2>%s</h2>%s<h3>%s</h3><a href="https://youtube.com/%s">YOUTUBE</a> | <a href="mailto:%s?enquiry from YieldMore.org Community">EMAIL</a> | <a href="tel:%s">PHONE</a> | <a href="https://wa.me/%s/">WHATSAPP</a> | <a href="%s">LINKEDIN</a></div><hr style="width: 240px; margin: auto" />%s<hr />',
		$loop ? '<a href="./' . urlize(info('name')) . '/">' : '', urlize(info('name')), info('name'), $loop ? '</a>' : '', info('heading'), info('youtube'), info('email'), info('phone'), info('phone'), info('linkedin'), info('introduction')));
}

if ($page == 'index') {
	$people = am_var('community-people');
	foreach ($people->rows as $person) {
		am_var('community-person', $person);
		if (info('name') == 'Community') continue;
		person_info(true);
	}
} else {

	$home = get_sheet('community/' . $page, 'section');
	include am_var('theme_folder') . 'home.php';
?>
<style>
#hero.custom-image-background {
    background: url(../../assets/community/<?php echo $page;?>-bgd.jpg) top right!important;
    background-size: cover!important;
}</style>
<?php } ?>