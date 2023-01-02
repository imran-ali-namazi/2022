<ul class="nav-menu">
	<li class="drop-down"><a>5 Programmes</a></a>
	<?php if (false) { ?>
		<?php //menu('/content/programs/', [ 'list-only-folders' => true ] ); ?>
		<ul>
			<?php $folders = scandir(SITEPATH . '/content/programs/');
			natsort($folders); unset($folders[0]); unset($folders[1]);
			foreach ($folders as $item) { ?>
			<li class="drop-down"><a href="<?php echo am_var('url') . $item;?>/"><?php echo humanize($item);?></a>
				<ul>
					<li><a href="<?php echo am_var('url') . $item . '/' ;?>" style="background-color: pink;">Home</a></li>
					<?php menu('/content/programs/' . $item . '/', [ 'no-ul' => true, 'parent-slug' => $item  . '/' ] ); ?>
				</ul>
			</li><?php } ?>
		</ul>
	</li>
	<?php if (am_var('section') == 'programs/') { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow;"><?php echo humanize(am_var('node')); ?></a>
			<?php menu('/content/programs/' . am_var('node') . '/', [ 'parent-slug' => am_var('node') . '/' ] ); ?>
	<?php }
	} else {
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
		if (am_var('section') == 'programs/') { ?><li class="drop-down"><a href="<?php echo am_var('url') . am_var('node') . '/' ;?>" style="background-color: yellow;"><?php echo humanize(am_var('node')); ?></a>
			<?php recursive_menu(get_sheet('sitemap'), am_var('node'), 1); }
	} ?>
	</li>
	<li>|</li>
	<li class="drop-down"><a>Friends / Network</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>alliances/"><strong>Alliances</strong> between Organizationa</a></li>
			<li><a href="<?php echo am_var('url');?>help/"><strong>Help</strong> by Kindly Acts</a></li>
			<li><a href="https://love.yieldmore.org">Labours of <strong>Love</strong></a></li>
			<li><hr /></li>
			<?php menu('/content/webring/', ['no-ul' => true, 'exclude-files' => ['help', 'interact', 'alliances'] ]); ?>
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
