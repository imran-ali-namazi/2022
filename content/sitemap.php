<p><a name="speak"></a></p>
<ol>
<?php
foreach (am_var('pages') as $slug=>$item) {
	echo sprintf('<li><a href="%s/">%s</a> - %s.</li>
', am_var('url') . $slug, $item['title'], $item['description']);
}
?>
</ol>
<hr />
