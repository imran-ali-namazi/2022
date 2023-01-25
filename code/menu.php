<ul class="nav-menu">
	<li class="drop-down"><a>Main Programmes</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<li class="drop-down"><a>Ideas / Network / About</a></a>
		<ul>
			<?php  recursive_menu(get_sheet('sitemap'), 'menu2', 1, ['section-prefix' => true, 'home-link-to-section' => true, 'no-ul-al-level1' => true ]); ?>
			<li class="drop-down"><a>Network</a>
				<ul>
					<li><a href="<?php echo am_var('url');?>alliances/"><strong>Alliances</strong> between Organizationa</a></li>
					<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
					<li><a href="https://love.yieldmore.org">Labours of <strong>Love</strong></a></li>
					<li><hr /></li>
					<?php menu('/content/webring/', ['no-ul' => true, 'exclude-files' => ['help', 'interact', 'alliances'] ]); ?>
				</ul>
			</li>
			<li class="drop-down"><a>About</a>
				<?php menu('/content/about/', [ 'exclude-files' => ['execution'] ]); ?>
			</li>
			<?php if (am_var('local')) { ?><li class="drop-down"><a>Private</a>
				<?php menu('/content/private/'); ?>
			</li><?php } ?>
		</ul>
	</li>
	<?php
		if (am_var('node') != 'index' && am_var('section') == 'programs/') { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow;"><?php echo humanize(am_var('node')); ?></a>
		<?php recursive_menu(get_sheet('sitemap'), am_var('node'), 1, ['section-prefix' => true]); }
	?>
</ul>
