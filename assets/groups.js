if (groupApi) {
	fetch(groupApi, { mode: 'no-cors' })
		.then(res => {
			return res.json();
		}).then(json => {
			Array.from(json).forEach(addItem);
		});

	var listItemString = $('#listItem').html();

	//https://codepen.io/anantanandgupta/post/parsing-the-json-object-array-and-build-an-html-list
	function addItem(item, index) {
		var listItem = $('<li>' + listItemString + '</li>');
		$('a', listItem).attr('href', groupUrl + item.slug).text(item.name);
		$('.description', listItem).text(item.summary);
		$('#dataList').append(listItem);
	}
}
