/*******
 * History:
 * Designed in YM legacy for Hanuman Chalisa
 * Timestamp Jump added in teachmeyoga.in's Gita Class 1
 * More content to be added from
 * https://bitbucket.org/amadeusweb/teachmeyoga/src/master/downloads/
*/

$(document).ready(function() {
	$('.lyrics-versions .toggle-version').click(function() {
		var input = $('input', $(this));
		var divs = $('div.' + input.data('version'));
		if (input.is(':checked')) divs.show(); else divs.hide();
	});
	//add file : heading above each mp3 
	$.each($('.drive-mp3'), function(ix, el) {
		if (!$(this).data('file')) return;
		$(this).before('<h3 class="verse">File: ' + $(this).data('file') + '</h3>');
	});
	//add verse : heading above each verse (outer div) 
	$.each($('.lyrics-verse'), function(ix, el) {
		$(this).prepend('<h3 class="verse">Verse: ' + $(this).data('index') + '</h3>');
	});	
	//add goto-time button above each verse / version of verse 
	$.each($('.time-sync'), function(ix, el) {
		var lang = $(this).data('file') ? $(this).data('file') : 'default';
		var time = $(this).data('time');
		var timeEnd = $(this).data('time-end');
		$(this).prepend('<a class="goto-time" data-file="' + lang + '" data-time="' + time + '" data-time-end="' + timeEnd + '">Time (secs): ' + time + (timeEnd ? ' / ends: ' + timeEnd : '') + ' (' + lang + ')</a>');
	});
	//play as per button click, storing end time if applicable and pausing all other files. 
	$('.goto-time').click(function() {
		var player = window.player = $('.player-' + $(this).data('file'));
		$.each(player.siblings('.drive-mp3'), function() {
			this.pause();
		});
		var end = $(this).data('time-end');
		window.stopAt = end ? parseFloat(end) : false;
		player[0].currentTime = parseFloat($(this).data('time'));
		player[0].play();
	});
	// check every .25 sec if play position > end time. if so, stop. 
	setInterval(function() {
		if (window.player && window.stopAt) {
			if (window.player[0].currentTime >= window.stopAt) {
				window.player[0].pause();
				window.stopAt = false;
			}
		}
	}, 250);
});
