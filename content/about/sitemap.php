The "Yield More Love Network" is a website to promote ideas for improving the human condition.

<p class="speakable start-expanded">Pages on this website</p>
<ol>
<?php
foreach (am_var('pages') as $slug => $item) {
	if (is_string($item))
		echo sprintf('<a name="%s"></a><h3>Section: %s</h3>' . am_var('nl'), $item, humanize($item));
	else
		echo sprintf('<li><a href="%s">%s</a> - %s</li>' . am_var('nl'), am_var('url') . $item['url'], $item['title'], $item['description']);
}
?>
</ol>

<h2>Websites over the years</h2>
<ol>
	<li><a class="btn-large" href="https://legacy.yieldmore.org/sitemap/" target="_blank">Legacy Site - Sitemap</a><br /><br /></li>
	<li><a class="btn-large" href="https://archives.yieldmore.org/sitemap/" target="_blank">Archives Site - Sitemap</a><br /><br /></li>
	<li><a class="btn-large" href="https://2021.yieldmore.org/" target="_blank">2021 Home Page</a> - Thanks to Vinod especially for bringing our first rich home page to life<br /><br /></li>
	<li><a class="btn-large" href="https://2020-ivy.yieldmore.org/" target="_blank">2020 AMW Precursor - Using IVY Web</a> - Thanks to all those trips to Bangalore and the inspiration of Joypreneurs / ONE<br /><br /></li>
	<li><a class="btn-large" href="https://2020-ivy.yieldmore.org/library/" target="_blank">2020 Library</a> - with Deepak Chopra's progressive access <a href="https://2020-ivy.yieldmore.org/library/21-days-abundance/" target="_blank">21 Day abundance course</a><br /><br /></li>
	<li><a class="btn-large" href="https://2020.yieldmore.org/media/" target="_blank">MEDIA / CURATION - Using IVY Web, circa 2017/18</a> - The labours of an illegal curator<br /><br /></li>
	<li><a class="btn-large" href="https://2020.yieldmore.org/sitemap/" target="_blank">2020 Sitemap</a> - Many thanks for Vinod for the lovely work on the banners<br /><br /></li>
	<li><a class="btn-large" href="https://2011.cselian.com/" target="_blank">Publishing 2011 - 2013 and learning PHP</a><br /><br /></li>
	<li><a class="btn-large" href="https://blog.cselian.com/" target="_blank">Learning to share and write - 2007 to 2013 and the birthplace of "YIELD"</a> (site still not imported from wordpress)<br /><br /></li>
	<li><a class="btn-large" href="https://2005.cselian.com/" target="_blank">The coming of age of an Engineer</a> - hoping to revisit as we empower technical trainers</li>
</ol>

<hr />

<h2>Archives and Legacy Sites</h2>

<p>The site mainly are a compendium of useful and inspiring information</p>

<h3>ARCHIVES</h3>

<?php render_txt_or_md(__DIR__ . '/_archives.md'); ?>

<hr />
<h3>LEGACY</h3>

<?php render_txt_or_md(__DIR__ . '/_legacy.md'); ?>

<hr />

<h2>Credits</h2>

<h3>2017/18</h3>
To Rahul for supporting me through this 2017 and 2018 avatar:<br /><br />

<img src="../assets/mixed/2017-style-visiting-card.jpg" class="img-fluid" />

<hr />

<h3>2020</h3>
To Abigail for this never shown Joyland Design<br /><br />

<img src="../assets/mixed/2020-lockdown-joyland-design.jpg" class="img-fluid" />

<hr />

<h3>2020</h3>
To Vinod for our current design<br /><br />

<img src="../assets/mixed/2020-logo-visiting-card.jpg" class="img-fluid" />

<hr />
