<?php
am_var('dont-wrap-menu-in-ul1', true);
?>
<ul class="nav-menu">
	<li class="drop-down"><a>Ideas</a>
		<?php menu('/content/ideas/'); ?>
	</li>
	<li class="drop-down"><a>In Action</a>
		<ul>
			<?php menu('/content/', ['files' => ['interact'], 'no-ul' => true]); ?>
			<?php foreach(am_var('idea-sections') as $item => $prefix) menu('/content/' . $item . '/', ['prefix' => ucwords($item) . ' ' . $prefix, 'no-ul' => true]); ?>
		</ul>
	</li>
	<?php menu('/content/', ['exclude-files' => ['act-now', 'interact']]); ?>
	<li>|</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
	<li class="drop-down"><a>Webring</a>
		<?php menu('/content/webring/'); ?>
	</li>
</ul>
