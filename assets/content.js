$(document).ready(function() {
	var speakIn = $('textarea.form-control');
	if (speakIn.length) $(window).on("unload", function() { $('#cancel').trigger('click'); }); //stop playing and unload on close / navigate away

	$('p.speakable').click(expandSpeakable).append('<button class="toggleRead">READ</button>').next('ol, ul').addClass('speak').hide();
	$('#speech').hide();

	function expandSpeakable(ev) {
		var list = $(this).next('ol, ul');
		if (list.length == 0) list = list.next('ol, ul');

		var playClicked = $(ev.originalEvent.target).hasClass('toggleRead');

		if (playClicked) {
			var btn = $(ev.originalEvent.target);

			var toPause = btn.text() == 'STOP';
			btn.text(toPause ? 'READ' : 'STOP');

			if (toPause)
				stopSpeaking();
			else
				speak(list, true);

			return;
		}

		if (list.is(':visible')) {
			list.hide();
			$('#cancel').trigger('click');
			$('#speech').hide();
			return;
		}

		stopSpeaking();
		speak(list, false)
	}

	function  stopSpeaking() {
		$('#cancel').trigger('click');
	}
	
	function speak(list, autoPlay) {
		list.show();
		speakIn.val(list.text());
		$('#speech').show();
		if (autoPlay) $('#start').trigger('click');
	}
});
