Welcome to YieldMore.org, where we trace a few of the ideas we've had over the years.
<p><a name="speak"></a></p>
<ol>
<?php
foreach (am_var('tracks') as $slug=>$item) {
	echo sprintf('<li><a href="%s/">%s</a> - %s.</li>
', am_var('url') . $slug, $item['title'], $item['description']);
}
?>
</ol>
<hr />
