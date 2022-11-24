<ul class="nav-menu">
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>Incubating</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>present/">All Possible Workshops</a></li>
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
	<li class="drop-down"><a>Global Growth</a>
		<ul>
			<?php menu('/content/grow/', ['no-ul' => true]); ?>
		</ul>
	</li>
	<li class="drop-down"><a>Webring</a>
		<?php menu('/content/webring/'); ?>
	</li>
	<li>|</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
</ul>
