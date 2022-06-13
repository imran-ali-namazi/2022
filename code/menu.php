<?php
am_var('dont-wrap-menu-in-ul1', true);
?>
<ul class="nav-menu">
	<li class="drop-down"><a>Tracks</a>
		<?php menu('/content/tracks/', ['files' => am_var('tracks')]); ?>
	</li>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
	<?php menu('/content/'); ?>
	<li>|</li>
	<li><a href="https://realms.yieldmore.org/" target="_blank">Interact</a></li>
	<li><a href="https://groups.io/g/yieldmore/topics" target="_blank">Updates</a></li>
	<li>|</li>
	<li><a href="https://imran.yieldmore.org/poems/" target="_blank">Imran's Site</a></li>
	<li><a href="https://archives.yieldmore.org/sitemap/" target="_blank">The Archives</a></li>
	<li><a href="https://legacy.yieldmore.org/sitemap/" target="_blank">Legacy Site</a></li>
</ul>
