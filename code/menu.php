<?php
am_var('dont-wrap-menu-in-ul1', true);
?>
<ul class="nav-menu">
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>Possibilities</a>
		<ul>
			<a href="<?php echo am_var('url');?>present/">ALL These Workshops</a>
			<?php menu('/content/possibilities/', ['no-ul' => true]); ?>
		</ul>
	</li>
	<li>|</li>
	<li class="drop-down"><a>Ideas In Action</a>
		<ul>
			<?php foreach(am_var('idea-sections') as $item => $prefix) menu('/content/' . $item . '/', ['prefix' => ucwords($item) . ' ' . $prefix, 'no-ul' => true]); ?>
		</ul>
	</li>
	<li class="drop-down"><a>Global Growth</a>
		<ul>
			<a href="<?php echo am_var('url');?>growing-together/">OUR Growth DNA</a>
			<?php menu('/content/grow/', ['no-ul' => true, 'exclude-files' => ['growing-together']]); ?>
		</ul>
	</li>
	<li><a href="<?php echo am_var('url');?>courses/">Courses</a></li>
	<li>|</li>
	<li class="drop-down"><a>Act With Us</a>
		<?php menu('/content/action/'); ?>
	</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
</ul>
