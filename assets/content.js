$(document).ready(function() {
  // http://snook.ca/archives/javascript/simplest-jquery-slideshow
  // http://css-tricks.com/snippets/jquery/simple-auto-playing-slideshow/
  $("#slideshow div:gt(0)").hide();
  setInterval(function() 
  {
    $('#slideshow > div:first').hide() // give 100ms else both are seen together
      .next().fadeIn(300)
      .end().appendTo('#slideshow');
  },  5000);
});


//speakable and questions
$(document).ready(function() {
	$('<a class="toggleQuestion">show answer</a>').insertBefore('p.answer');
	$('p.answer').hide();
	$('a.toggleQuestion').click(toggleQuestion);
	function toggleQuestion() {
		var btn = $(this);
		var toShow = btn.text() == 'show answer';
		btn.text(toShow ? 'hide answer' : 'show answer');
		var answer = btn.next('p');
		if (toShow) answer.show(); else answer.hide();
	}

	var speakIn = $('textarea.form-control');
	if (speakIn.length) $(window).on("unload", function() { $('#cancel').trigger('click'); }); //stop playing and unload on close / navigate away

	$('p.speakable').click(expandSpeakable).append(' <a class="toggleRead">READS AS</a> ').next('ol, ul').addClass('speak').hide();
	$('#speech').hide();

	function expandSpeakable(ev) {
		const headingText = $(this).text();
		var list = $(this).next('ol, ul');
		if (list.length == 0) list = $(this).next().next('ol, ul');

		var playClicked = $(ev.originalEvent.target).hasClass('toggleRead');

		if (playClicked) {
			var btn = $(ev.originalEvent.target);

			var toPause = btn.text() == 'STOP';
			btn.text(toPause ? 'READS AS' : 'STOP');

			if (toPause)
				stopSpeaking();
			else
				speak(headingText, list, true);

			return;
		}

		if (list.is(':visible')) {
			list.hide();
			$('#cancel').trigger('click');
			$('#speech').hide();
			return;
		}

		stopSpeaking();
		speak(headingText, list, false)
	}

	function  stopSpeaking() {
		$('#cancel').trigger('click');
	}
	
	function speak(headingText, list, autoPlay) {
		list.show();
		speakIn.val(headingText + "\r\n\r\n" + list.text());
		$('#speech').show();
		if (autoPlay) $('#start').trigger('click');
	}
});
