$(function(){
	var tweet = $('#template-tweet').html();
	var tweetTemplate = Handlebars.compile(tweet);

	var thread = $('#template-thread').html();
	var threadTemplate = Handlebars.compile(thread);

	var compose = $('#template-compose').html();
	var composeTemplate = Handlebars.compile(compose);
		
	var user = {
		handle: '@bradwestfall',
		img: 'images/brad.png'
	};



	$('body').on('click', '.tweet', function(){
		$(this).parent().toggleClass('expand');
	});

	$('body').on('focusin focusout', '.compose', function(){
		$(this).toggleClass('expand');
	});


	var renderCompose = function(){
		return composeTemplate();
	};

	var renderTweet = function(user, message) {
		var context = {
			img: user.img,
			handle: user.handle,
			message: message
		};
		var html = tweetTemplate(context);
		return html;
	};

	var renderThread = function(user, message) {
		var context = {
			tweet: renderTweet(user, message),
			compose: renderCompose()
		};

		var html = threadTemplate(context);
		return html;
	};

	$('body').on('click', 'button', function(e) {
		e.preventDefault();

		if ($(this).parents('header').length) {
			message = $('header .compose textarea').val();
			var html = renderThread(user, message);
			$('.tweets').append(html);

			$('textarea').val('');
		} else {
			message = $(this).parents('form').find('textarea').val();
			var tweetContext = {
				img: user.img,
				handle: user.handle,
				message: message
			};

			var tweetHtml = tweetTemplate(tweetContext);
			$(this).parents('.replies').prepend(tweetHtml);
			$('textarea').val('');
		}
	});

	$('body').on('keyup', 'textarea', function() {
        var max = 140;
        var wordCount = $(this).parent().find('.count');
        var charCount = $(this).val().length;

        if (charCount >= max) {
            $(this).attr("maxlength",max);
            wordCount.text('Exceeded Character Limit!');
        } else {
            var count = max - charCount;
            wordCount.text(count);
        }
    });
});

