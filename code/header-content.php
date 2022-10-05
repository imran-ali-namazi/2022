<hr class="above-header-content" />
<?php
$pages = am_var('pages');
if (true) {
	echo '<div id="all-programs-and-ideas" class="container no-speakable-item-underline" style="background-color: #EEB7EF; padding: 20px; margin-bottom: 30px;">' . am_var('nl');

	echo '<img class="img-fluid" src="' . am_var('url') . 'yieldmore-rectangle.jpg" /><br /><br />' . am_var('nl');

	$possibilities = ['intimate-gatherings', 'growth', 'collective-parenting', 'sunlight-and-moonlight', 'imaginative-communities', 'work-and-cancer', 'prem'];
	echo '<p class="speakable">Workshops and Programs to be ENACTED</p>';
	echo '<ol class="possibilities">' . am_var('nl');
	foreach ($possibilities as $item) {
		echo '<li><a href="' . am_var('url') . 'present/' . $item . '/">' . humanize($item) . '</a></li>' . am_var('nl');
		$page = $pages[$item]; //todo - add banners
		echo '<p class="'.$item.'">' . $page['description'] . '</h3>' . am_var('nl');
	}
	echo '</ol>' . am_var('nl');

	$ideas = ['children', 'words', 'spaces', 'serenity', 'spirit', 'crises', 'earth'];
	echo '<p class="speakable">Core Ideas to Liberate Humanity</p>';
	echo '<ol class="ideas">' . am_var('nl');
	foreach ($ideas as $item) {
		echo '<li><a href="' . am_var('url') . $item . '/">' . humanize($item) . '</a></li>' . am_var('nl');
		$page = $pages[$item]; //todo - add banners
		echo '<p class="'.$item.'">' . $page['description'] . '</h3>' . am_var('nl');
	}
	echo '</ol>' . am_var('nl');

	echo '</div>' . am_var('nl');
}

if (array_search(am_var('node'), [
		//portrait + horizontal resolution based banners
		'earth',
		'spirit',
		'online',
		'words',
		'our-masters',
	]) !== false) { ?>
	<div>
		<img src="../assets/pages/<?php echo am_var('node');?>-portrait.jpg" class="img-fluid show-in-portrait" />
		<img src="../assets/pages/<?php echo am_var('node');?>.jpg?fver=2" class="img-fluid show-in-landscape" />
	</div>
<hr />
<?php } else if (array_search(am_var('node'), [
		//single image horizontal only page banners
		'crises',
		'earth',
		'enabler',
		'eric',
		'help',
		'imran',
		'interact',
		'marketplace',
		'model',
		'nuggets',
		'serenity',
		'spaces',
		'sri-bagavath',
		'words',
	]) !== false) { ?>
	<div><img src="../assets/pages/<?php echo am_var('node');?>.jpg" class="img-fluid" /></div>
<hr />
<?php } else if (am_var('node') == 'children') { ?>
<div id="slideshow">
	<div><img src="../assets/pages/yieldmore-children1.jpg" class="img-fluid" /></div>
	<div><img src="../assets/pages/yieldmore-children2.jpg" class="img-fluid" /></div>
	<div><img src="../assets/pages/yieldmore-children3.jpg" class="img-fluid" /></div>
	<div><img src="../assets/pages/yieldmore-children4.jpg" class="img-fluid" /></div>
</div>
<div id="sections-with-images" class="container">
	<div class="row row-1">
		<div class="col-md-6 col-12">
			<img src="../assets/pages/yieldmore-children-boy-girl.jpg" class="img-fluid" />
		</div>
		<div class="col-md-6 col-12">
			<h3>The Emotional Development Program</h3>
			<p>Programs for Children to build their interpersonal skills, for emotional and social development, for forming healthy wordviews and perspectives and to give them a path forward to live inspired, meaningful lives.</p>
		</div>
	</div>
	<div class="row row-2">
		<div class="col-md-6 col-12 order-md-2">
			<img src="../assets/pages/yieldmore-children-music.jpg" class="img-fluid" />
		</div>
		<div class="col-md-6 col-12 order-md-1">
			<h3>Why Curation</h3>
			<p>Music can stir the soul, and books can stimulate the mind. Everything I know of humanity's feelings and experience, I know by reading, watching and hearing. Right Curation of what we "feed" our children WILL make all the difference to BUILDING a brighter tomorrow.</p>
		</div>
	</div>
	<div class="row row-3">
		<div class="col-md-6 col-12">
			<img src="../assets/pages/yieldmore-children-parents-and-teachers.jpg" class="img-fluid" />
		</div>
		<div class="col-md-6 col-12">
			<h3>For Parents and Teachers</h3>
			<p>Creating learning environments where Children feel safe discovering this wonderful world, finding their true expression and resonating deeply with the stories they hear.</p>
		</div>
	</div>
</div>
<div>
	<img src="../assets/pages/yieldmore-children-arya.jpg" class="img-fluid" />

	<h3 class="text-center">ARYA - Awareness Resulting in Your Action</h3>
	<p class="text-center">Here, we intend to give children social causes projects to work on and make them advocates and workers for change.</p>
</div>
<hr />
<?php } ?>
