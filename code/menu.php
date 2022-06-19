<?php
am_var('dont-wrap-menu-in-ul1', true);
?>
<ul class="nav-menu">
	<li class="drop-down"><a>Tracks</a>
		<?php menu('/content/tracks/', ['files' => array_keys(am_var('tracks'))]); ?>
	</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
	<?php menu('/content/'); ?>
	<li>|</li>
	<li><a href="https://realms.yieldmore.org/" target="_blank">Interact</a></li>
	<li><a href="https://groups.io/g/yieldmore/topics" target="_blank">Updates</a></li>
	<li class="drop-down"><a>Webring</a>
		<?php menu('/content/webring/'); ?>
	</li>
</ul>
