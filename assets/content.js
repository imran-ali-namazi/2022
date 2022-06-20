$(document).ready(function() {
	var speakWhat = $('a[name=speak]').parent('p').nextUntil('hr'),
		speakIn = $('textarea.form-control');
	if (speakWhat.length == 0 || speakIn.length != 1)
		$('#speech').hide();
	else
		speakIn.val(speakWhat.text());
});
