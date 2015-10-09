$(function(){
	var source = $('#template-tweet').html();
	var template  = Handlebars.compile(source);

	$('.compose').on('focusin', function(){
		$(this).addClass('expand');
	});

	$('.compose').on('focusout', function(){
		$(this).removeClass('expand');
	});

	$('.thread').on('click', function(){
		$(this).toggleClass('expand');
	});

	$('.replies').on('click',function(){
		$(this).parent().toggleClass('expand');
	});

	$('button').click(function(){
		var title = $('#title').val();
		var message = $('#message').val();

		var tweet = {
			message: message
		};

		var html = template(tweet);

		$('.tweet').append(html);
	});
});

