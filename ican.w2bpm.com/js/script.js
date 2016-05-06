$(function() {
    $('#popupbuttonCall').fancybox({
        'padding': 37,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 400,
        'minHeight': 310

    });
    //$("#phone").mask("+7(999) 999-99-99");
    $("#form-feedbackCall").submit(function(event) {
			if ($('#nameCall').val() == ""){
				$('#errorNameCall').fadeIn(1000).html('What\'s your name?');
			}
			else if ($('#phoneCall').val() == ""){
				$('#errorNameCall').empty();
				$('#errorPhoneCall').fadeIn(1000).html('How we can call you?');
			}
			else{
				var postForm = {
              'name'  : $('#nameCall').val(),
              'phone'  : $('#phoneCall').val()
			};
          $.ajax({
              type        : 'POST',
              url         : 'feedback.php',
              data        : postForm,
              dataType    : 'json',
              success     : function(data)
                  {
									if (!data.success){
										if (data.errors.name) $('#errorCall').fadeIn(1000).html(data.errors.name);
									}
									else{
										$('#form-feedbackCall').fadeIn(1000).html('<p>' + data.posted + '</p>');
									}
								}
                });
            }
        event.preventDefault();
    });
});
$(function() {
    $('#popupbuttonPack').fancybox({
        'padding': 37,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 400,
        'minHeight': 310

    });
    //$("#phone").mask("+7(999) 999-99-99");
    $("#form-feedbackPack").submit(function(event) {
			if ($('#namePack').val() == ""){
				$('#errorNamePack').fadeIn(1000).html('What\'s your name?');
			}
			else if ($('#emailPack').val() == ""){
				$('#errorNamePack').empty();
				$('#errorEmailPack').fadeIn(1000).html('How we can send you email?');
			}
			else{
				var postForm = {
              'name'  : $('#namePack').val(),
              'email'  : $('#emailPack').val(),
              'phone'  : $('#phonePack').val()
			};
          $.ajax({
              type        : 'POST',
              url         : 'feedback.php',
              data        : postForm,
              dataType    : 'json',
              success     : function(data)
                  {
									if (!data.success){
										if (data.errors.name) $('#errorPack').fadeIn(1000).html(data.errors.name);
									}
									else{
										$('#form-feedbackPack').fadeIn(1000).html('<p>' + data.posted + '</p>');
									}
								}
                });
            }
        event.preventDefault();
    });
});

/** другие всплывающие формы **/


$(function() {

    $('#politika2').fancybox({
        'padding': 37,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 600,
        'minHeight': 410

    });
    
});




$(function() {

    $('#package2').fancybox({
        'padding': 37,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 600,
        'minHeight': 410

    });
    
});



$(function() {

    $('#moreinfo2').fancybox({
        'padding': 37,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 800,
        'minHeight': 510

    });
    
});