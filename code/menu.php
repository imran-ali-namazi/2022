<ul class="nav-menu">
	<li class="drop-down"><a>Programs and Courses</a>
		<?php menu('/content/programs/', [ 'list-only-folders' => true ] ); ?>
	</li>
	<?php if (am_var('section') == 'programs/') { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow; padding: 4px;"><?php echo humanize(am_var('node')); ?></a>
		<?php menu('/content/programs/' . am_var('node') . '/', [ 'parent-slug' => am_var('node') . '/' ] ); ?>
	</li><?php } ?>
	<li>|</li>
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>Subsites</a>
		<ul>
			<?php foreach(am_var('incubating') as $item) echo sprintf('<li><a href="%s" target="_blank">%s</a></li>', $item['url'], $item['name']); ?>
		</ul>
	</li>
	<li>|</li>
	<li class="drop-down"><a>Friends (Webring)</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
			<li><a href="<?php echo am_var('url');?>interact/"><strong>Interact</strong> with Us Online and Physically</a></li>
			<li><hr /></li>
			<?php menu('/content/webring/', ['no-ul' => true, 'exclude-files' => ['help', 'interact'] ]); ?>
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
