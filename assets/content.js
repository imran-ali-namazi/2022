$(document).ready(function() {
	var speakWhat = $('a[name=speak]').next('ol'),
		speakIn = $('textarea.form-control');
	if (speakWhat.length != 1 || speakIn.length != 1) return;
	speakIn.val(speakWhat.text());
});
