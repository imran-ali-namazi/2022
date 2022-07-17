<p class="speakable">Pages on this website</p>
<ol>
<?php
foreach (am_var('pages') as $slug=>$item) {
	echo sprintf('<li><a href="%s/">%s</a> - %s</li>
', am_var('url') . $slug, $item['title'], $item['description']);
}
?>
</ol>

<a class="btn-large" href="https://legacy.yieldmore.org/sitemap/" target="_blank">Legacy Sitemap</a>
<a class="btn-large" href="https://archives.yieldmore.org/sitemap/" target="_blank">Archives Sitemap</a>
