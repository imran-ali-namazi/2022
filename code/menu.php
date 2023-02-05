<ul class="nav-menu">
	<li class="drop-down"><a>Programmes</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<?php
		if (am_var('node') != 'index' && am_var('section') && !am_var('simple-section')) { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow;"><?php echo humanize(am_var('node')); ?></a>
		<?php 
		if (am_var('section') == 'teams/')
			menu('/content/' . am_var('section') . '/' . am_var('node') . '/', ['parent-slug' => am_var('node') . '/']);
		else
			recursive_menu(get_sheet('sitemap'), am_var('node'), 1, ['section-prefix' => true]); }
	?>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
	<li class="drop-down"><a>More+</a></a>
		<ul>
			<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
			<!--
			<li><a href="https://love.yieldmore.org">Labours of <strong>Love</strong></a></li>
			-->
			<li><a href="<?php echo am_var('url');?>sitemap/">YM Sitemap</a></li>
			<li class="drop-down"><a>Teams</a>
				<?php menu('/content/teams/', ['list-only-folders' => true]); ?>
			</li>
			<li class="drop-down"><a>Webring</a>
				<ul>
					<?php menu('/content/webring/', ['no-ul' => true]); ?>
				</ul>
			</li>
			<?php if (am_var('local')) { ?><li class="drop-down"><a>Private</a>
				<?php menu('/content/private/'); ?>
			</li><?php } ?>
		</ul>
	</li>
</ul>
