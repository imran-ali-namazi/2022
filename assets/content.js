$(document).ready(function() {
	var speakIn = $('textarea.form-control');
	if (speakIn.length) $(window).on("unload", function() { $('#cancel').trigger('click'); }); //stop playing and unload on close / navigate away

	$('p.speakable').click(expandSpeakable).next('ol, ul').addClass('speak').hide();
	$('#speech').hide();

	function expandSpeakable(ev) {
		var list = $(this).next('ol, ul');

		if (list.is(':visible')) {
			list.hide();
			$('#cancel').trigger('click');
			$('#speech').hide();
			return;
		}

		list.show();
		$('#cancel').trigger('click');
		speakIn.val(list.text());
		$('#start').trigger('click');
		$('#speech').show();
	}
});
