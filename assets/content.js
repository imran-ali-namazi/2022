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


//toggle ideas - recursive menu on YM home page
$(document).ready(function() {
	var togglers = $('.toggle-ideas');
	if (togglers.length == 0) return;
	togglers.click(toggleIdea).trigger('click');
	function toggleIdea() {
		var list = $(this).parent().next('ul');
		var show = list.toggle().is(':visible');
		$(this).text(show ? 'hide ideas' : 'show ideas');
	}
});


//engage and fill
$(document).ready(function() {
	var div = $('.engage');
	if (div.length == 0) return;
	if (div.length > 1) { console.error('2 or more .engage divs found, supports only 1'); return; }

	$('.engage li').each(checkboxAdd);
	var emailTo = div.data('to');
	var emailCc = div.data('cc');
	var allyName = div.data('name');
	var submissionCount = 0;

    $('<input type="text" class="name" placeholder="[My Name]" />').appendTo(div);
	$('<button class="btn-large">Send to ' + allyName + '</button>').click(prepareEmail).appendTo(div);

	function prepareEmail() {
		var ta = $('.engage textarea');
		if (ta.length == 0)
			ta = $('<textarea rows="8" style="width: 100%; background-color: #aaf"></textarea>').appendTo(div);

		var items = $('.engage input[type=checkbox]:checked');
		if (items.length == 0) {
			ta.text('No Items Ticked');
		} else {
			var headings = {}, firstHeading = true, output = '';

			items.each(function() {
				var item = $(this).closest('li');
				var note = $('input[type=text]', item);
				var ul = item.closest('ul');
				var hx = ul.prev('h1, h2, h3').text();
				if (!headings[hx]) {
					if (!firstHeading) output += "\r\n\r\n";
					firstHeading = false;
					output += "# " + hx;
					headings[hx] = true;
				}
				output += "\r\n" + item.text() + "\r\n -> " + note.val();
			});

			ta.text(output);
			prepareEmailLink(output);
		}
	}

	function prepareEmailLink(body) {
		var email = emailTo.replace(';', '%3B%20');

		var name = $('.engage .name').val();

		var subject = '[YM / Alliances] Note from Enthusiast "%name%" for Ally: %ally%'
				.replace('%name%', name)
				.replace('%ally%', allyName);

		body += "\r\n\r\n\r\n" + 'Enthusiast Form for ' + allyName + ' filled by ' + name + ' at' + "\r\n -> " + location.href;

		body = encodeURIComponent(body).replace(':', '%3A');

		var link = 'mailto:%email%?cc=%cc%&subject=%subject%&body=%body%'
			.replace('%email%', emailTo)
			.replace('%cc%', emailCc)
			.replace('%subject%', encodeURIComponent(subject))
			.replace('%body%', body);

		var tag = jQuery('<a target="_blank" />')
		.text('Send Email:' + ++submissionCount)
		.appendTo(div)
		.attr('href', link);
		//TODO: why doesnt email trigger click work?
		//setTimeout(function () { tag.trigger('click') }, 200);
	}

	function checkboxAdd(ix, el) {
		el = $(el);
		el.html('<label>' + el.text() + '</label>');
		var label = $('label', el);
		$('<input type="checkbox" />').on('change', checkboxToggle).prependTo(label);
		$('<br/><input type="text" style="display: none; width: 100%" />').appendTo(el);
	}

	function checkboxToggle() {
		const txt = $('input[type=text]', $(this).closest('li'));
		if($(this).is(':checked')) txt.show(); else  txt.hide();
	}
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

	const items = $('p.speakable').click(expandSpeakable).append(' <a class="toggleRead">READS AS</a> ').next('ol, ul').addClass('speak');
	$.each(items, (idx, itm) => { if (!$(itm).prev('p.speakable').hasClass('start-expanded')) $(itm).hide(); });
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
