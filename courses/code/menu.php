<ul class="nav-menu">
	<li><a href="<?php echo am_var('url');?>courses/">YM Courses Home</a></li>
	<li class="drop-down"><a>Serenity (Healing)</a>
		<?php menu('/serenity/', ['parent-slug' => 'courses/serenity/']); ?>
	</li>
	<li class="drop-down"><a>PACT (Education)</a>
		<?php menu('/pact/', ['parent-slug' => 'courses/pact/']); ?>
	</li>
	<li class="drop-down"><a>Ivy (Tech)</a>
		<?php menu('/ivy/', ['parent-slug' => 'courses/ivy/']); ?>
	</li>
	<?php if (am_var('course-folder')) {
	$course = substr(substr(am_var('course-folder'), 1), 0, -1);
	$course = humanize(str_replace('/', ' :: ', $course));
	?>
	<li>|</li>
	<li class="drop-down"><a href="<?php echo am_var('url');?>courses<?php echo am_var('course-folder');?>"><?php echo $course;?></a>
		<?php menu(am_var('course-folder'), ['parent-slug' => 'courses' . am_var('course-folder')]); ?>
	</li>
	<?php } ?>
</ul>
