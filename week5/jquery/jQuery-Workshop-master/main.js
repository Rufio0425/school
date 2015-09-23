$(function(){
	console.log("I'm ready");

	console.log($(".message").text());

	$(".message").text("I have new text");

	$("message").addClass('self');

	makeMessage('Hello World', 'self');

	$('.submit').on('click', function() {

		sharkAttack();

	});

	$('textarea').on("keypress", function(e){
		if(e.charCode == 13){
			sharkAttack();
			return false;
		}
	});


});

var sharkAttack = function(){

		var message = $('textarea').val();

		makeMessage(message, "self");

		$('textarea').val("");
		$('textarea').focus();

}

var makeMessage = function(message, who) {

    var html = $('<div>')
					.addClass('message')
					.addClass(who)
					.text(message);
   					$('.thread').append(html);

}


	// This is stating "Hey jquery, set a variable for html, add class message, self and text" and it is being called on line 24

