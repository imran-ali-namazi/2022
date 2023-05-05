<ul class="nav-menu">
	<li class="drop-down"><a>Programmes</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<?php section_menu(); ?>
	<li class="drop-down"><a>About</a>
		<ul>
			<li><a href="<?php echo am_var('url');?>ideas/">Ideas</a></li>
			<?php menu('/content/about/', ['no-ul' => true]); ?>
			<li class="drop-down"><a>People</a>
				<?php $friends = ['eric', 'christine', 'ritu', 'srividya'];?>
				<ul>
					<?php menu('/content/people/', ['no-ul' => true, 'exclude-files' => $friends]); ?>
					<li><hr /></li>
					<li class="drop-down"><a>Friends</a>
						<?php menu('/xyz', ['files' => $friends]); ?>
					</li>
				</ul>
			</li>
			<li class="drop-down"><a>Webring</a>
				<ul>
					<?php menu('/content/webring/', ['no-ul' => true]); ?>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="<?php echo am_var('url');?>sitemap/">Sitemap</a></li>
	<?php if (am_var('local')) { ?>
	<li class="drop-down"><a>Private</a>
		<?php menu('/content/private/'); ?>
	</li>
	<?php } ?>
</ul>
