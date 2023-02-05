<ul class="nav-menu">
	<li class="drop-down"><a>Main Programmes</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<li class="drop-down"><a>Projects</a>
		<?php menu('/content/projects/', ['list-only-folders' => true]); ?>
	</li>
	<li class="drop-down"><a>Teams</a>
		<?php menu('/content/teams/', ['list-only-folders' => true]); ?>
	</li>
	<?php
		if (am_var('node') != 'index' && am_var('section')) { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow;"><?php echo humanize(am_var('node')); ?></a>
		<?php 
		if (am_var('section') == 'projects/' || am_var('section') == 'teams/')
			menu('/content/' . am_var('section') . '/' . am_var('node') . '/', ['parent-slug' => am_var('node') . '/']);
		else
			recursive_menu(get_sheet('sitemap'), am_var('node'), 1, ['section-prefix' => true]); }
	?>
	<li class="drop-down"><a>More+</a></a>
		<ul>
			<?php  //recursive_menu(get_sheet('sitemap'), 'menu2', 1, ['section-prefix' => true, 'home-link-to-section' => true, 'no-ul-al-level1' => true ]); ?>
			<li><a href="<?php echo am_var('url');?>growing-together/"><strong>Growing Together</strong></a></li>
			<li class="drop-down"><a>Network</a>
				<ul>
					<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
					<li><a href="https://love.yieldmore.org">Labours of <strong>Love</strong></a></li>
					<li><hr /></li>
					<?php menu('/content/webring/', ['no-ul' => true, 'exclude-files' => ['help', 'interact', 'alliances'] ]); ?>
				</ul>
			</li>
			<li class="drop-down"><a>About</a>
				<?php menu('/content/about/'); ?>
			</li>
			<?php if (am_var('local')) { ?><li class="drop-down"><a>Private</a>
				<?php menu('/content/private/'); ?>
			</li><?php } ?>
		</ul>
	</li>
</ul>
