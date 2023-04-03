<ul class="nav-menu">
	<li class="drop-down"><a>Programmes</a></a>
	<?php 
		recursive_menu(get_sheet('sitemap'), 'menu', 1, ['section-prefix' => true, 'home-link-to-section' => true ]);
	?>
	</li>
	<?php section_menu(); ?>
	<li class="drop-down"><a>About</a>
		<?php menu('/content/about/'); ?>
	</li>
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
	<li class="drop-down"><a>More+</a></a>
		<ul>
			<!--
			<li><a href="https://love.yieldmore.org">Labours of <strong>Love</strong></a></li>
			-->
			<li class="drop-down"><a>Webring</a>
				<ul>
					<?php menu('/content/webring/', ['no-ul' => true]); ?>
				</ul>
			</li>
			<?php if (am_var('local')) { ?><li class="drop-down"><a>Private</a>
				<?php menu('/content/private/'); ?>
			</li><?php } ?>
			<li><a href="<?php echo am_var('url');?>sitemap/">YM Sitemap</a></li>
		</ul>
	</li>
</ul>
