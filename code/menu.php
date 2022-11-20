<ul class="nav-menu">
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>Incubating</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>present/">All Possible Workshops</a></li>
			<?php foreach(am_var('incubating') as $item) echo sprintf('<a href="%s" target="_blank">%s</a>', $item['url'], $item['name']); ?>
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
