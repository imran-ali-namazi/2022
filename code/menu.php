<ul class="nav-menu">
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>Subsites</a>
		<ul>
			<?php foreach(am_var('incubating') as $item) echo sprintf('<li><a href="%s" target="_blank">%s</a></li>', $item['url'], $item['name']); ?>
		</ul>
	</li>
<?php
am_var('use-courses-page-prefix', true);
include_once __DIR__ . '/../../subsites/courses/code/sitemap.php';
am_var('courseUrl', $courseUrl = am_var('local') ? replace_vars('http://localhost%port%/subsites/courses/', 'port') : 'https://courses.yieldmore.org/');
?>
	<li class="drop-down"><a href="<?php echo $courseUrl; ?>" target="_blank">Courses</a>
		<ul>
			<?php foreach(am_var('course-pages') as $slug => $item) if ($slug != 'index') echo sprintf('<li><a href="%s" title="%s" target="_blank">%s</a></li>', $courseUrl . urlize($slug) . '/', $item['description'], $item['title']);; ?>
		</ul>
	</li>
	<li>|</li>
	<li class="drop-down"><a>Friends (Webring)</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
			<li><a href="<?php echo am_var('url');?>interact/"><strong>Interact</strong> with Us Online and Physically</a></li>
			<li><hr /></li>
			<?php menu('/content/webring/', ['no-ul' => true]); ?>
		</ul>
	</li>
	<li>|</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/', [ 'exclude-files' => ['execution'] ]); ?>
	</li>
	<?php if (am_var('local')) { ?><li class="drop-down"><a>Private</a>
		<?php menu('/content/private/'); ?>
	</li><?php } ?>
</ul>
