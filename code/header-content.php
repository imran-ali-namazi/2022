<?php
$pageName = am_var('page_parameter1') ? am_var('page_parameter1') : am_var('node');
if ($pageName == 'index') $pageName = 'words';

if (array_search($pageName, [
		//portrait + horizontal resolution based banners
		'alliances',
		'earth',
		'online',
		'our-masters',
		'sunlight',
		'spirit',
		'words',
		//groups
		'imaginative-communities',
		'intimate-gatherings',
	]) !== false) { ?>
	<div>
		<img src="<?php echo am_var('url');?>assets/pages/<?php echo $pageName;?>-portrait.jpg" class="img-fluid show-in-portrait" />
		<img src="<?php echo am_var('url');?>assets/pages/<?php echo $pageName;?>.jpg?fver=2" class="img-fluid show-in-landscape" />
	</div>
<hr />
<?php } else if (array_search($pageName, [
		//single image horizontal only page banners
		'common-planet',
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
		'smart-joy-venture',
		'spaces',
		'sri-bagavath',
		'words',
		//sunlight
		'attitude',
		'gearing-up',
		'organizational-excellence',
	]) !== false) { ?>
	<div><img src="<?php echo am_var('url');?>assets/pages/<?php echo $pageName;?>.jpg" class="img-fluid" /></div>
<hr />
<?php } else if (am_var('node') == 'children' && am_var('page_parameter1') == false) { ?>
<div id="slideshow11">
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
