<ul class="nav-menu">
	<li class="drop-down">
		<a href="<?php echo am_var('url');?>community/">Community</a>
		<?php menu('/data/community/', ['exclude-files' => ['directory'], 'parent-slug' => 'community/' ]); ?>
	</li>
	<li class="drop-down"><a>Ideas</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'ideas-menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<?php section_menu(); ?>
	<li class="drop-down"><a>More</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>ideas/">Ideas</a></li>
			<li class="drop-down"><a>About</a>
				<?php menu('/content/about/'); ?>
			</li>
			<li class="drop-down"><a>Learn</a>
				<?php menu('/content/learn/'); ?>
			</li>
			<li class="drop-down"><a>People</a>
				<?php $friends = ['eric', 'christine', 'ritu', 'srividya'];?>
				<?php menu('/content/people/', ['exclude-files' => $friends]); ?>
			</li>
			<li class="drop-down"><a>Friends</a>
				<?php menu('/xyz', ['files' => $friends]); ?>
			</li>
			<li class="drop-down"><a>Webring</a>
				<?php menu('/content/webring/'); ?>
			</li>
		</ul>
	</li>
	<li><a href="<?php echo am_var('url');?>search/">Search</a></li>
	<li><a href="<?php echo am_var('url');?>sitemap/">Sitemap</a></li>
	<?php if (am_var('local')) { ?>
	<li class="drop-down"><a>Private</a>
		<?php menu('/content/private/'); ?>
	</li>
	<?php } ?>
</ul>
