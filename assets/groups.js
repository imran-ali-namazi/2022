if (window.groupApi) {
	fetch(groupApi, { mode: 'no-cors' })
		.then(res => {
			return res.json();
		}).then(json => {
			var items = Array.from(json);
			items.sort(sortItem);
			items.forEach(addItem);
		});

	var listItemString = $('#listItem').html();

	//https://codepen.io/anantanandgupta/post/parsing-the-json-object-array-and-build-an-html-list
	function addItem(item, index) {
		var listItem = $('<li>' + listItemString + '</li>');
		$('a', listItem).attr('href', groupUrl + item.slug).text(item.name);
		$('.description', listItem).text(item.summary);
		$('#dataList').append(listItem);
	}
	
	function sortItem(a, b) {
		return a.name > b.name ? 1 : -1;
	}
}
